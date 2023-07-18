<?php

namespace SellingPartnerApi\Auth;

use SellingPartnerApi\Contracts\Endpoint\Endpoint as EndpointContract;

class BasicAuth extends Auth
{
    /**
     * The LWA refresh token. Get this value when the selling
     * partner authorizes your application. For more information
     * See https://developer-docs.amazon.com/sp-api/docs/authorizing-selling-partner-api-applications
     * @var string
     */
    protected $refreshToken;

    /**
     * @param EndpointContract $endpoint
     * @param $clientId
     * @param $clientSecret
     * @param $accessKeyId
     * @param $secretAccessKey
     * @param $refreshToken
     */
    public function __construct(
        EndpointContract $endpoint, $clientId,
                         $clientSecret, $accessKeyId,
                         $secretAccessKey, $refreshToken
    ) {
        parent::__construct($endpoint, $clientId, $clientSecret, $accessKeyId, $secretAccessKey);
        $this->refreshToken = $refreshToken;
    }

    /**
     * @inheritdoc
     */
    protected function doAuth()
    {
        $request = [
            'grant_type' => 'refresh_token',
            'client_id' => $this->clientId,
            'client_secret' => $this->clientSecret,
            'refresh_token' => $this->refreshToken,
        ];

        $response = $this->client->post(static::LWA_OAUTH2_URL, ['json' => $request]);
        $body = json_decode($response->getBody(), true);
        if (empty($body['access_token']) || empty($body['expires_in'])) {
            throw new AuthenticationException();
        }

        return $this->createCredential($body['access_token'], $body['expires_in']);
    }
}