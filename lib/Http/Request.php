<?php

namespace SellingPartnerApi\Http;

use GuzzleHttp\Psr7\Query as GuzzleHttpQuery;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\StreamInterface;
use Psr\Http\Message\UriInterface;
use SellingPartnerApi\Auth\BasicAuth;
use SellingPartnerApi\Auth\GrantlessAuth;
use SellingPartnerApi\Auth\RestrictedAuth;
use SellingPartnerApi\Contracts\Auth\Signable;
use SellingPartnerApi\Endpoint\Endpoint;
use SellingPartnerApi\Helpers\Str;
use SellingPartnerApi\Http\Query as SellingPartnerQuery;
use SellingPartnerApi\Model\Tokens20210301\CreateRestrictedDataTokenRequest;
use SellingPartnerApi\Model\Tokens20210301\RestrictedResource;
use SellingPartnerApi\SellingPartner;

class Request implements RequestInterface
{
    /**
     * @var RequestInterface
     */
    protected $request;

    public function __construct(RequestInterface $request, $transfer = true)
    {
        $this->request = $request;
        if ($transfer) {
            return self::transfer($request);
        }
    }

    /**
     * transfer request into a selling partner request
     * @param RequestInterface $request
     * @return RequestInterface
     */
    public static function transfer(RequestInterface $request)
    {
        $query = $request->getUri()->getQuery();
        $query = GuzzleHttpQuery::parse($query);
        $query = SellingPartnerQuery::build($query);
        $uri = $request->getUri()->withQuery($query);
        $request = $request->withUri($uri);

        return new self($request, false);
    }

    /**
     * @inheritDoc
     */
    public function getProtocolVersion()
    {
        return $this->request->getProtocolVersion();
    }

    /**
     * @inheritDoc
     */
    public function withProtocolVersion($version)
    {

        return $this->request->withProtocolVersion($version);
    }

    /**
     * @inheritDoc
     */
    public function getHeaders()
    {
        return $this->request->getHeaders();
    }

    /**
     * @inheritDoc
     */
    public function hasHeader($name)
    {
        return $this->request->hasHeader($name);
    }

    /**
     * @inheritDoc
     */
    public function getHeader($name)
    {
        return $this->request->getHeader($name);
    }

    /**
     * @inheritDoc
     */
    public function getHeaderLine($name)
    {
        return $this->request->getHeaderLine($name);
    }

    /**
     * @inheritDoc
     */
    public function withHeader($name, $value)
    {
        return $this->request->withHeader($name, $value);
    }

    /**
     * @inheritDoc
     */
    public function withAddedHeader($name, $value)
    {
        return $this->request->withAddedHeader($name, $value);
    }

    /**
     * @inheritDoc
     */
    public function withoutHeader($name)
    {
        return $this->request->withoutHeader($name);
    }

    /**
     * @inheritDoc
     */
    public function getBody()
    {
        return $this->request->getBody();
    }

    /**
     * @inheritDoc
     */
    public function withBody(StreamInterface $body)
    {
        return $this->request->withBody($body);
    }

    /**
     * @inheritDoc
     */
    public function getRequestTarget()
    {
        return $this->request->getRequestTarget();
    }

    /**
     * @inheritDoc
     */
    public function withRequestTarget($requestTarget)
    {
        return $this->request->withRequestTarget($requestTarget);
    }

    /**
     * @inheritDoc
     */
    public function getMethod()
    {
        return $this->request->getMethod();
    }

    /**
     * @inheritDoc
     */
    public function withMethod($method)
    {
        return $this->request->withMethod($method);
    }

    /**
     * @inheritDoc
     */
    public function getUri()
    {
        return $this->request->getUri();
    }

    /**
     * @inheritDoc
     */
    public function withUri(UriInterface $uri, $preserveHost = false)
    {
        return $this->request->withUri($uri, $preserveHost);
    }

    /**
     * @return Signable
     */
    public function getSigner(SellingPartner $sp)
    {
        if ($scope = $this->checkGrantlessRequest()) {
            return new GrantlessAuth(
                $sp->endpoint, $sp->clientId, $sp->clientSecret,
                $sp->accessKeyId, $sp->secretAccessKey, $scope
            );
        }

        if ($rdtRequest = $this->checkRestrictedRequest($sp)) {
            return new RestrictedAuth(
                $sp->endpoint, $sp->clientId, $sp->clientSecret,
                $sp->accessKeyId, $sp->secretAccessKey, $sp->refreshToken,
                $rdtRequest
            );
        }

        return new BasicAuth(
            $sp->endpoint, $sp->clientId, $sp->clientSecret,
            $sp->accessKeyId, $sp->secretAccessKey, $sp->refreshToken
        );
    }

    /**
     * @return array
     */
    private function grantlessOperationMap()
    {
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
        $requestMethod = strtolower($this->getMethod());
        $requestPath = $this->getUri()->getPath();
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
    private function checkRestrictedRequest(SellingPartner $sp)
    {
        if (Endpoint::$sandbox || !$sp->isWithRestrictedData()) {
            return null;
        }

        $requestMethod = strtolower($this->getMethod());
        $requestPath = $this->getUri()->getPath();

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
            'method' => $this->getMethod(),
            'path' => $path,
            'dataElements' => null,
        ];

        $queryParams = [];
        parse_str($this->getUri()->getQuery(), $queryParams);
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