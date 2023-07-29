<?php

namespace SellingPartnerApi\Auth;

use SellingPartnerApi\Contracts\Auth\Signable;
use SellingPartnerApi\Endpoint\Endpoint;
use SellingPartnerApi\Helpers\Str;
use SellingPartnerApi\Model\Tokens20210301\CreateRestrictedDataTokenRequest;
use SellingPartnerApi\Model\Tokens20210301\RestrictedResource;

trait SignerTrait
{
    /**
     * @var array
     */
    protected $signerMap = [];

    /**
     * @param $signerName
     * @return Signable|null
     */
    protected function getSignerFromMap($signerName)
    {
        $signer = null;
        if (isset($this->signerMap[$signerName]) && !empty($this->signerMap[$signerName])) {
            $signer = $this->signerMap[$signerName];
        }

        return $signer;
    }

    /**
     * @param $signerName
     * @param Signable $singer
     * @return void
     */
    protected function setSignerInMap($signerName, Signable $singer)
    {
        $this->signerMap[$signerName] = $singer;
    }

    /**
     * @param $signerName
     * @param array $extra
     * @return Signable
     */
    protected function getOrSetSignerFromMap($signerName, array $extra = [])
    {
        switch ($signerName) {
            case 'grantless_auth':
                $signerKey = sprintf("%s_%s", $signerName, $extra['scope']);
                break;
            case 'restricted_auth':
                $signerKey = sprintf('%s_%s', $signerName, md5((string)$extra['rdt_request']));
                break;
            default:
                $signerKey = 'basic_auth';
        }

        $signer = $this->getSignerFromMap($signerKey);
        if ($signer) {
            return $signer;
        }
        switch ($signerName) {
            case 'grantless_auth':
                $signer = new GrantlessAuth(
                    $this->endpoint, $this->clientId, $this->clientSecret,
                    $this->accessKeyId, $this->secretAccessKey, $extra['scope']
                );
                break;
            case 'restricted_auth':
                $signer = new RestrictedAuth(
                    $this->endpoint, $this->clientId, $this->clientSecret,
                    $this->accessKeyId, $this->secretAccessKey, $this->refreshToken,
                    $extra['rdt_request']
                );
                break;
            default:
                $signer = new BasicAuth(
                    $this->endpoint, $this->clientId, $this->clientSecret,
                    $this->accessKeyId, $this->secretAccessKey, $this->refreshToken
                );
        }

        $this->setSignerInMap($signerKey, $signer);
        return $signer;
    }

    /**
     * @return Signable
     */
    public function getSigner()
    {
        if ($scope = $this->checkGrantlessRequest()) {
            return $this->getOrSetSignerFromMap('grantless_auth', ['scope' => $scope]);
        }

        if ($rdtRequest = $this->checkRestrictedRequest()) {
            return $this->getOrSetSignerFromMap('restricted_auth', ['rdt_request' => $rdtRequest]);
        }

        return $this->getOrSetSignerFromMap('basic_auth');
    }

    /**
     * @return array
     */
    private function grantlessOperationMap()
    {
        // TODO add more
        return [
            'sellingpartnerapi::notifications' => [
                'get' => [
                    '/notifications/v1/destinations',
                    '/notifications/v1/destinations/{destinationId}',
                    '/notifications/v1/subscriptions/{notificationType}/{subscriptionId}',
                    '/authorization/v1/authorizationCode',
                ],
                'post' => [
                    '/notifications/v1/destinations',
                ],
                'delete' => [
                    '/notifications/v1/destinations/{destinationId}',
                    '/notifications/v2/subscriptions/{notificationType}/{subscriptionId}',
                ],
            ],
        ];
    }

    /**
     * @return array
     */
    private function restrictedOperationMap()
    {
        // TODO add more
        return [
            'get' => [
                '/orders/v0/orders',
                '/orders/v0/orders/{orderId}',
                '/orders/v0/orders/{orderId}/orderItems',
                '/orders/v0/orders/{orderId}/regulatedInfo',
            ],
        ];
    }

    /**
     * @return string
     */
    private function checkGrantlessRequest()
    {
        $requestMethod = strtolower($this->request->getMethod());
        $requestPath = $this->request->getUri()->getPath();
        $requestScope = '';
        foreach ($this->grantlessOperationMap() as $scope => $methodPathMap) {
            foreach ($methodPathMap as $method => $paths) {
                if ($method !== $requestMethod) {
                    continue;
                }
                foreach ($paths as $path) {
                    if (Str::isPathMatch($requestPath, $path)) {
                        $requestScope = $scope;
                        break 3;
                    }
                }
            }
        }

        return $requestScope;
    }

    /**
     * @return CreateRestrictedDataTokenRequest|null
     */
    private function checkRestrictedRequest()
    {
        if (Endpoint::$sandbox || !$this->isWithRestrictedData()) {
            return null;
        }

        $requestMethod = strtolower($this->request->getMethod());
        $requestPath = $this->request->getUri()->getPath();

        $resourcePath = [];
        foreach ($this->restrictedOperationMap() as $method => $paths) {
            if ($method !== $requestMethod) {
                continue;
            }
            foreach ($paths as $path) {
                if (Str::isPathMatch($requestPath, $path)) {
                    $resourcePath = $path;
                    break 2;
                }
            }
        }

        $rdtRequest = null;
        if ($resourcePath) {
            $rdtRequest = $this->createRdtRequest($resourcePath);
        }

        return $rdtRequest;
    }

    /**
     * create restricted data token request by path map
     * @param string $path
     * @return CreateRestrictedDataTokenRequest
     */
    private function createRdtRequest($path)
    {
        $map = [
            'method' => $this->request->getMethod(),
            'path' => $path,
            'dataElements' => null,
        ];

        $queryParams = [];
        parse_str($this->request->getUri()->getQuery(), $queryParams);
        if (isset($queryParams['dataElements']) && !empty($queryParams['dataElements'])) {
            if (is_array($queryParams['dataElements'])) {
                $map['dataElements'] = $queryParams['dataElements'];
            } else {
                $map['dataElements'] = explode(',', $queryParams['dataElements']);
            }
        }

        $specialPaths = [
            '/orders/v0/orders',
            '/orders/v0/orders/{orderId}',
            '/orders/v0/orders/{orderId}/orderItems',
        ];

        if ($map['dataElements'] === null && in_array($map['path'], $specialPaths)) {
            $map['dataElements'] = ['buyerInfo', 'shippingAddress'];
        }

        $restrictedResource = new RestrictedResource($map);
        return new CreateRestrictedDataTokenRequest([
            'restrictedResources' => [$restrictedResource],
        ]);
    }
}