<?php

namespace SellingPartnerApi;

use GuzzleHttp\ClientInterface;
use Psr\Http\Message\RequestInterface;
use SellingPartnerApi\Helpers\Api;
use SellingPartnerApi\Http\Client;
use SellingPartnerApi\Contracts\Auth\Signable;
use SellingPartnerApi\Contracts\Endpoint\Endpoint as EndpointContract;
use SellingPartnerApi\Endpoint\Endpoint;
use SellingPartnerApi\Http\Request;

// TODO add more @method
/**
 * @method \SellingPartnerApi\Api\Tokens20210301\TokensApi tokensApi()
 * @method \SellingPartnerApi\Api\OrdersV0\OrdersV0Api ordersV0Api()
 * @method \SellingPartnerApi\Api\Sellers\SellersApi sellersApi()
 */
class SellingPartner implements Signable
{
    const VERSION = '1.0.0';

    /**
     * @var \Closure
     */
    private static $defaultOptionsFunc;

    /**
     * Get this value when you register your application.
     * See https://developer-docs.amazon.com/sp-api/docs/viewing-your-application-information-and-credentials
     * @var string
     */
    public $clientId;

    /**
     * Get this value when you register your application
     * See https://developer-docs.amazon.com/sp-api/docs/viewing-your-application-information-and-credentials
     * @var string
     */
    public $clientSecret;

    /**
     * The LWA refresh token. Get this value when the selling
     * partner authorizes your application. For more information
     * See https://developer-docs.amazon.com/sp-api/docs/authorizing-selling-partner-api-applications
     * @var string
     */
    public $refreshToken;

    /**
     * @var string
     */
    public $accessKeyId;

    /**
     * @var string
     */
    public $secretAccessKey;

    /**
     * @var string
     */
    public $roleArn;

    /**
     * @var EndpointContract
     */
    public $endpoint;

    /**
     * @var bool
     */
    protected $withRestrictedData = true;

    /**
     * Create instance with default options
     */
    public function __construct($withDefaultOptions = true)
    {
        if ($withDefaultOptions) {
            return static::instance();
        }
    }

    /**
     * @param $name
     * @param $arguments
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        $api = Api::findClassByName($name);
        $client = $this->createClient($arguments);
        $configuration = $this->createConfiguration($arguments);
        $headerSelector = $this->createHeaderSelector($arguments);

        return new $api($client, $configuration, $headerSelector);
    }

    /**
     * @param array $options
     * @return SellingPartner
     */
    public static function instance(array $options = [])
    {
        if (!$options) {
            $defaultOptions = static::getDefaultOptionsFunc();
            $options = $defaultOptions();
        }

        return static::withOptions($options);
    }

    /**
     * @param array $options
     * @return SellingPartner
     */
    public static function withOptions(array $options)
    {
        $sp = new self(false);
        foreach ($options as $name => $value) {
            $name = str_replace(' ', '', ucwords(str_replace('_', ' ', $name)));
            $name = lcfirst($name);
            if (!property_exists($sp, $name)) {
                continue;
            }

            switch ($name) {
                case 'endpoint':
                    if (is_string($value)) {
                        $value = strtoupper($value);
                        $sp->endpoint = Endpoint::$value();
                    }
                    break;
                case 'with_restricted_data':
                    $sp->withRestrictedData = (bool)$value;
                    break;
                default:
                    $sp->$name = $value;
            }
        }

        if (!($sp->endpoint instanceof EndpointContract)) {
            $sp->endpoint = Endpoint::NA();
        }

        return $sp;
    }

    /**
     * @return \Closure
     */
    public static function getDefaultOptionsFunc()
    {
        if (self::$defaultOptionsFunc === null) {
            return function () {
                $endpointName = strtoupper(getenv('LWA_ENDPOINT') ?: 'NA');
                return [
                    'client_id' => getenv('LWA_CLIENT_ID') ?: '',
                    'client_secret' => getenv('LWA_CLIENT_SECRET') ?: '',
                    'refresh_token' => getenv('LWA_REFRESH_TOKEN') ?: '',
                    'access_key_id' => getenv('AWS_ACCESS_KEY_ID') ?: '',
                    'secret_access_key' => getenv('AWS_SECRET_ACCESS_KEY') ?: '',
                    'role_arn' => getenv('AWS_ROLE_ARN') ?: '',
                    'endpoint' => Endpoint::$endpointName(),
                ];
            };
        }

        return self::$defaultOptionsFunc;
    }

    /**
     * @param \Closure $defaultOptionsFunc
     */
    public static function setDefaultOptionsFunc(\Closure $defaultOptionsFunc)
    {
        self::$defaultOptionsFunc = $defaultOptionsFunc;
    }

    /**
     * @return bool
     */
    public function isWithRestrictedData()
    {
        return $this->withRestrictedData;
    }

    /**
     * @return $this
     */
    public function withRestrictedData()
    {
        $this->withRestrictedData = true;

        return $this;
    }

    /**
     * @return $this
     */
    public function withoutRestrictedData()
    {
        $this->withRestrictedData = false;

        return $this;
    }

    /**
     * Get client from arguments
     * @param $arguments
     * @return ClientInterface
     */
    protected function createClient($arguments)
    {
        if (isset($arguments[0]) && !empty($arguments[0])) {
            if (!($arguments[0] instanceof ClientInterface)) {
                throw new \InvalidArgumentException('The parameter $client must instance of GuzzleHttp\ClientInterface');
            }
            return $arguments[0];
        }

        return new Client(['selling_partner' => $this]);
    }

    /**
     * Get configuration from arguments
     * @param $arguments
     * @return Configuration
     */
    protected function createConfiguration($arguments)
    {
        if (isset($arguments[1]) && !empty($arguments[1])) {
            if (!($arguments[1] instanceof Configuration)) {
                throw new \InvalidArgumentException('The parameter $configuration must instance of SellingPartnerApi\Configuration');
            }
            return $arguments[1];
        }

        $configuration = new Configuration();
        $configuration->setUserAgent("august6th/amzn-sp-api/" . static::VERSION . " (Language=PHP)");
        $configuration->setHost($this->endpoint->getHost());

        return $configuration;
    }

    /**
     * Get header selector from arguments
     * @param $arguments
     * @return HeaderSelector
     */
    protected function createHeaderSelector($arguments)
    {
        if (isset($arguments[2]) && !empty($arguments[2])) {
            if (!($arguments[2] instanceof HeaderSelector)) {
                throw new \InvalidArgumentException('The parameter $selector must instance of SellingPartnerApi\HeaderSelector');
            }
            return $arguments[2];
        }

        return new HeaderSelector();
    }

    /**
     * @param Request $request
     * @param array $options
     * @return RequestInterface
     * @throws \Exception
     */
    public function sign(Request $request, array $options = [])
    {
        return $request->getSigner($this)->sign($request);
    }
}