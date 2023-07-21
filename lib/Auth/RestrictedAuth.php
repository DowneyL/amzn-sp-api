<?php

namespace SellingPartnerApi\Auth;

use SellingPartnerApi\ApiException;
use SellingPartnerApi\Contracts\Endpoint\Endpoint as EndpointContract;
use SellingPartnerApi\Model\Tokens20210301\CreateRestrictedDataTokenRequest;
use SellingPartnerApi\ObjectSerializer;
use SellingPartnerApi\SellingPartner;

class RestrictedAuth extends BasicAuth
{
    /**
     * @var CreateRestrictedDataTokenRequest
     */
    protected $rdtRequest;

    /**
     * @param EndpointContract $endpoint
     * @param $clientId
     * @param $clientSecret
     * @param $accessKeyId
     * @param $secretAccessKey
     * @param $refreshToken
     * @param CreateRestrictedDataTokenRequest $rdtRequest
     */
    public function __construct(
        EndpointContract $endpoint, $clientId,
                         $clientSecret, $accessKeyId,
                         $secretAccessKey, $refreshToken,
        CreateRestrictedDataTokenRequest $rdtRequest
    )
    {
        parent::__construct(
            $endpoint, $clientId, $clientSecret,
            $accessKeyId, $secretAccessKey, $refreshToken
        );
        $this->rdtRequest = $rdtRequest;
    }

    /**
     * @inheritdoc
     */
    protected function doAuth()
    {
        try {
            $response = SellingPartner::withOptions([
                'client_id' => $this->clientId,
                'client_secret' => $this->clientSecret,
                'refresh_token' => $this->refreshToken,
                'access_key_id' => $this->accessKeyId,
                'secret_access_key' => $this->secretAccessKey,
                'endpoint' => $this->endpoint,
            ])->tokensApi()->createRestrictedDataToken($this->rdtRequest);
            return $this->createCredential($response->getRestrictedDataToken(), $response->getExpiresIn());
        } catch (ApiException $e) {
            throw new AuthenticationException($e->getMessage());
        }
    }
}