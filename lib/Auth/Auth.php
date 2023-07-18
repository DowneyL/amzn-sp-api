<?php

namespace SellingPartnerApi\Auth;

use GuzzleHttp\Client;
use Psr\Http\Message\RequestInterface;
use SellingPartnerApi\Contracts\Auth\Authenticatable;
use SellingPartnerApi\Contracts\Auth\Signable;
use SellingPartnerApi\Contracts\Endpoint\Endpoint AS EndpointContract;
use SellingPartnerApi\Helpers\Date;

abstract class Auth implements Authenticatable, Signable
{
    use CredentialTrait;
    use SignTrait;

    const LWA_OAUTH2_URL = 'https://api.amazon.com/auth/o2/token';
    const TERMINATION_STRING = 'aws4_request';
    const SERVICE_NAME = 'execute-api';
    const ALGORITHM_DESIGNATION = 'AWS4-HMAC-SHA256';

    /**
     * @var Client
     */
    protected $client;

    /**
     * Get this value when you register your application.
     * See https://developer-docs.amazon.com/sp-api/docs/viewing-your-application-information-and-credentials
     * @var string
     */
    protected $clientId;

    /**
     * Get this value when you register your application
     * See https://developer-docs.amazon.com/sp-api/docs/viewing-your-application-information-and-credentials
     * @var string
     */
    protected $clientSecret;

    /**
     * @var string
     */
    protected $accessKeyId;

    /**
     * @var string
     */
    protected $secretAccessKey;

    /**
     * @var EndpointContract
     */
    protected $endpoint;

    /**
     * @param EndpointContract $endpoint
     * @param $clientId
     * @param $clientSecret
     * @param $accessKeyId
     * @param $secretAccessKey
     */
    public function __construct(EndpointContract $endpoint, $clientId, $clientSecret, $accessKeyId, $secretAccessKey)
    {
        $this->client = new Client();
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->accessKeyId = $accessKeyId;
        $this->secretAccessKey = $secretAccessKey;
        $this->endpoint = $endpoint;
    }

    /**
     * Request Amazon auth service
     * @return Credential
     * @throws AuthenticationException
     */
    abstract protected function doAuth();

    /**
     * @return $this|Authenticatable
     * @throws \Exception
     */
    public function auth()
    {
        if (!$this->isCredentialExpireSoon()) {
            return $this;
        }

        try {
            $this->setCredential($this->doAuth());
        } catch (AuthenticationException $e) {
            // TODO log
            throw new \Exception($e->getCode(), $e->getMessage());
        }

        return $this;
    }

    /**
     * @param RequestInterface $request
     * @return RequestInterface
     * @throws \Exception
     */
    public function sign(RequestInterface $request)
    {
        try {
            if (!$this->getCredential()) {
                $this->auth();
            }

            $this->request = $request;
            return $this->request
                ->withHeader('Authorization', $this->createAuthorization())
                ->withHeader('x-amz-access-token', $this->getCredential()->getToken())
                ->withHeader('x-amz-date', Date::utcDatetime());
        } catch (\Exception $e) {
            // TODO log
            throw $e;
        }
    }
}