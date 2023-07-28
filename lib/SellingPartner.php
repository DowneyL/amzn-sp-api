<?php

namespace SellingPartnerApi;

use GuzzleHttp\ClientInterface;
use Psr\Http\Message\RequestInterface;
use SellingPartnerApi\Auth\SignerTrait;
use SellingPartnerApi\Helpers\Api;
use SellingPartnerApi\Http\Client;
use SellingPartnerApi\Contracts\Auth\Signable;
use SellingPartnerApi\Contracts\Endpoint\Endpoint as EndpointContract;
use SellingPartnerApi\Endpoint\Endpoint;
use SellingPartnerApi\Http\Request;

/**
 * @method \SellingPartnerApi\Api\AplusContent20201101\AplusContentApi aplusContent20201101Api()
 * @method \SellingPartnerApi\Api\Authorization\AuthorizationApi authorizationApi()
 * @method \SellingPartnerApi\Api\CatalogItemsV0\CatalogApi catalogV0Api()
 * @method \SellingPartnerApi\Api\CatalogItems20201201\CatalogApi catalog20201201Api()
 * @method \SellingPartnerApi\Api\CatalogItems20220401\CatalogApi catalog20220401Api()
 * @method \SellingPartnerApi\Api\DefinitionsProductTypes20200901\DefinitionsApi definitions20200901Api()
 * @method \SellingPartnerApi\Api\EasyShip20220323\EasyShipApi easyShip20220323Api()
 * @method \SellingPartnerApi\Api\FbaInbound\FbaInboundApi fbaInboundApi()
 * @method \SellingPartnerApi\Api\FbaInventory\FbaInventoryApi fbaInventoryApi()
 * @method \SellingPartnerApi\Api\FbaSmallandLight\SmallAndLightApi fbaSmallAndLightApi()
 * @method \SellingPartnerApi\Api\Feeds20200904\FeedsApi feeds20200904Api()
 * @method \SellingPartnerApi\Api\Feeds20210630\FeedsApi feeds20210630Api()
 * @method \SellingPartnerApi\Api\FinancesV0\DefaultApi financesV0Api()
 * @method \SellingPartnerApi\Api\FulfillmentInboundV0\FbaInboundApi fbaInboundV0Api()
 * @method \SellingPartnerApi\Api\FulfillmentOutbound20200701\FbaOutboundApi fbaOutbound20200701Api()
 * @method \SellingPartnerApi\Api\ListingsItems20200901\ListingsApi listings20200901Api()
 * @method \SellingPartnerApi\Api\ListingsItems20210801\ListingsApi listings20210801Api()
 * @method \SellingPartnerApi\Api\ListingsRestrictions20210801\ListingsApi listingsRestrictions20210801Api()
 * @method \SellingPartnerApi\Api\MerchantFulfillmentV0\MerchantFulfillmentApi merchantFulfillmentV0Api()
 * @method \SellingPartnerApi\Api\Messaging\MessagingApi messagingApi()
 * @method \SellingPartnerApi\Api\Notifications\NotificationsApi notificationsApi()
 * @method \SellingPartnerApi\Api\OrdersV0\OrdersV0Api ordersV0Api()
 * @method \SellingPartnerApi\Api\OrdersV0\ShipmentApi shipmentApi()
 * @method \SellingPartnerApi\Api\ProductFeesV0\FeesApi productFeesV0Api()
 * @method \SellingPartnerApi\Api\ProductPricing20220501\ProductPricingApi productPricing20220501Api()
 * @method \SellingPartnerApi\Api\ProductPricingV0\ProductPricingApi productPricingV0Api()
 * @method \SellingPartnerApi\Api\Replenishment20221107\OffersApi offers20221107Api()
 * @method \SellingPartnerApi\Api\Replenishment20221107\SellingpartnersApi sellingpartners20221107Api()
 * @method \SellingPartnerApi\Api\Reports20200904\ReportsApi reports20200904Api()
 * @method \SellingPartnerApi\Api\Reports20210630\ReportsApi reports20210630Api()
 * @method \SellingPartnerApi\Api\Sales\SalesApi salesApi()
 * @method \SellingPartnerApi\Api\Sellers\SellersApi sellersApi()
 * @method \SellingPartnerApi\Api\Services\ServiceApi serviceApi()
 * @method \SellingPartnerApi\Api\ShipmentInvoicingV0\ShipmentInvoiceApi shipmentInvoicingV0Api()
 * @method \SellingPartnerApi\Api\Shipping\ShippingApi shippingApi()
 * @method \SellingPartnerApi\Api\Solicitations\SolicitationsApi solicitationsApi()
 * @method \SellingPartnerApi\Api\Tokens20210301\TokensApi tokens20210301Api()
 * @method \SellingPartnerApi\Api\Uploads20201101\UploadsApi uploads20201101Api()
 * @method \SellingPartnerApi\Api\VendorDirectFulfillmentInventoryV1\UpdateInventoryApi vendorDirectFulfillmentInventoryV1Api()
 * @method \SellingPartnerApi\Api\VendorDirectFulfillmentOrders20211228\VendorOrdersApi vendorDirectFulfillmentOrders20211228Api()
 * @method \SellingPartnerApi\Api\VendorDirectFulfillmentOrdersV1\VendorOrdersApi vendorDirectFulfillmentOrdersV1Api()
 * @method \SellingPartnerApi\Api\VendorDirectFulfillmentPaymentsV1\VendorInvoiceApi vendorDirectInvoiceV1Api()
 * @method \SellingPartnerApi\Api\VendorDirectFulfillmentSandboxData20211028\VendorDFSandboxApi vendorDFSandboxApi()
 * @method \SellingPartnerApi\Api\VendorDirectFulfillmentSandboxData20211028\VendorDFSandboxtransactionstatusApi vendorDFSandboxtransactionstatusApi()
 * @method \SellingPartnerApi\Api\VendorDirectFulfillmentShipping20211228\CustomerInvoicesApi customerInvoices20211228Api()
 * @method \SellingPartnerApi\Api\VendorDirectFulfillmentShipping20211228\VendorShippingApi vendorShipping20211228Api()
 * @method \SellingPartnerApi\Api\VendorDirectFulfillmentShipping20211228\VendorShippingLabelsApi vendorShippingLabels20211228Api()
 * @method \SellingPartnerApi\Api\VendorDirectFulfillmentShippingV1\CustomerInvoicesApi customerInvoicesV1Api()
 * @method \SellingPartnerApi\Api\VendorDirectFulfillmentShippingV1\VendorShippingApi vendorShippingV1Api()
 * @method \SellingPartnerApi\Api\VendorDirectFulfillmentShippingV1\VendorShippingLabelsApi vendorShippingLabelsV1Api()
 * @method \SellingPartnerApi\Api\VendorDirectFulfillmentTransactions20211228\VendorTransactionApi vendorTransaction20211228Api()
 * @method \SellingPartnerApi\Api\VendorDirectFulfillmentTransactionsV1\VendorTransactionApi vendorTransactionV1Api()
 * @method \SellingPartnerApi\Api\VendorInvoices\VendorPaymentsApi vendorPaymentsApi()
 * @method \SellingPartnerApi\Api\VendorOrders\VendorOrdersApi vendorOrdersApi()
 * @method \SellingPartnerApi\Api\VendorShipments\VendorShippingApi vendorShippingApi()
 * @method \SellingPartnerApi\Api\VendorTransactionStatus\VendorTransactionApi vendorTransactionApi()
 */
class SellingPartner implements Signable
{
    use SignerTrait;

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
     * @var RequestInterface
     */
    private $request;

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
        $this->request = $request;
        return $this->getSigner()->sign($request);
    }
}