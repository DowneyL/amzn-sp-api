<?php

namespace SellingPartnerApi\Auth;

use SellingPartnerApi\Contracts\Endpoint\Endpoint as EndpointContract;

class GrantlessAuth extends Auth
{
    /**
     * The scope of the LWA authorization grant
     * @var string
     */
    protected $scope;

    /**
     * @param EndpointContract $endpoint
     * @param $clientId
     * @param $clientSecret
     * @param $accessKeyId
     * @param $secretAccessKey
     * @param $scope
     */
    public function __construct(
        EndpointContract $endpoint, $clientId, $clientSecret,
                         $accessKeyId, $secretAccessKey, $scope
    ) {
        parent::__construct($endpoint, $clientId, $clientSecret, $accessKeyId, $secretAccessKey);
        $this->scope = $scope;
    }

    /**
     * @inheritdoc
     */
    protected function doAuth()
    {
        $request = [
            'grant_type' => 'client_credentials',
            'client_id' => $this->clientId,
            'client_secret' => $this->clientSecret,
            'scope' => $this->scope,
        ];

        $response = $this->client->post(static::LWA_OAUTH2_URL, ['json' => $request]);
        $body = json_decode($response->getBody(), true);
        if (empty($body['access_token']) || empty($body['expires_in'])) {
            throw new AuthenticationException();
        }

        return $this->createCredential($body['access_token'], $body['expires_in']);
    }
}