<?php
/**
 * SalesApi
 * PHP version 5
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Sales
 *
 * The Selling Partner API for Sales provides APIs related to sales performance.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.36
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Api\Sales;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use SellingPartnerApi\ApiException;
use SellingPartnerApi\Configuration;
use SellingPartnerApi\HeaderSelector;
use SellingPartnerApi\ObjectSerializer;

/**
 * SalesApi Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SalesApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getOrderMetrics
     *
     * @param  string[] $marketplaceIds A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.  For example, ATVPDKIKX0DER indicates the US marketplace. (required)
     * @param  string $interval A time interval used for selecting order metrics. This takes the form of two dates separated by two hyphens (first date is inclusive; second date is exclusive). Dates are in ISO8601 format and must represent absolute time (either Z notation or offset notation). Example: 2018-09-01T00:00:00-07:00--2018-09-04T00:00:00-07:00 requests order metrics for Sept 1st, 2nd and 3rd in the -07:00 zone. (required)
     * @param  string $granularity The granularity of the grouping of order metrics, based on a unit of time. Specifying granularity&#x3D;Hour results in a successful request only if the interval specified is less than or equal to 30 days from now. For all other granularities, the interval specified must be less or equal to 2 years from now. Specifying granularity&#x3D;Total results in order metrics that are aggregated over the entire interval that you specify. If the interval start and end date don’t align with the specified granularity, the head and tail end of the response interval will contain partial data. Example: Day to get a daily breakdown of the request interval, where the day boundary is defined by the granularityTimeZone. (required)
     * @param  string $granularityTimeZone An IANA-compatible time zone for determining the day boundary. Required when specifying a granularity value greater than Hour. The granularityTimeZone value must align with the offset of the specified interval value. For example, if the interval value uses Z notation, then granularityTimeZone must be UTC. If the interval value uses an offset, then granularityTimeZone must be an IANA-compatible time zone that matches the offset. Example: US/Pacific to compute day boundaries, accounting for daylight time savings, for US/Pacific zone. (optional)
     * @param  string $buyerType Filters the results by the buyer type that you specify, B2B (business to business) or B2C (business to customer). Example: B2B, if you want the response to include order metrics for only B2B buyers. (optional, default to All)
     * @param  string $fulfillmentNetwork Filters the results by the fulfillment network that you specify, MFN (merchant fulfillment network) or AFN (Amazon fulfillment network). Do not include this filter if you want the response to include order metrics for all fulfillment networks. Example: AFN, if you want the response to include order metrics for only Amazon fulfillment network. (optional)
     * @param  string $firstDayOfWeek Specifies the day that the week starts on when granularity&#x3D;Week, either Monday or Sunday. Default: Monday. Example: Sunday, if you want the week to start on a Sunday. (optional, default to Monday)
     * @param  string $asin Filters the results by the ASIN that you specify. Specifying both ASIN and SKU returns an error. Do not include this filter if you want the response to include order metrics for all ASINs. Example: B0792R1RSN, if you want the response to include order metrics for only ASIN B0792R1RSN. (optional)
     * @param  string $sku Filters the results by the SKU that you specify. Specifying both ASIN and SKU returns an error. Do not include this filter if you want the response to include order metrics for all SKUs. Example: TestSKU, if you want the response to include order metrics for only SKU TestSKU. (optional)
     *
     * @throws \SellingPartnerApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SellingPartnerApi\Model\Sales\GetOrderMetricsResponse
     */
    public function getOrderMetrics($marketplaceIds, $interval, $granularity, $granularityTimeZone = null, $buyerType = 'All', $fulfillmentNetwork = null, $firstDayOfWeek = 'Monday', $asin = null, $sku = null)
    {
        list($response) = $this->getOrderMetricsWithHttpInfo($marketplaceIds, $interval, $granularity, $granularityTimeZone, $buyerType, $fulfillmentNetwork, $firstDayOfWeek, $asin, $sku);
        return $response;
    }

    /**
     * Operation getOrderMetricsWithHttpInfo
     *
     * @param  string[] $marketplaceIds A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.  For example, ATVPDKIKX0DER indicates the US marketplace. (required)
     * @param  string $interval A time interval used for selecting order metrics. This takes the form of two dates separated by two hyphens (first date is inclusive; second date is exclusive). Dates are in ISO8601 format and must represent absolute time (either Z notation or offset notation). Example: 2018-09-01T00:00:00-07:00--2018-09-04T00:00:00-07:00 requests order metrics for Sept 1st, 2nd and 3rd in the -07:00 zone. (required)
     * @param  string $granularity The granularity of the grouping of order metrics, based on a unit of time. Specifying granularity&#x3D;Hour results in a successful request only if the interval specified is less than or equal to 30 days from now. For all other granularities, the interval specified must be less or equal to 2 years from now. Specifying granularity&#x3D;Total results in order metrics that are aggregated over the entire interval that you specify. If the interval start and end date don’t align with the specified granularity, the head and tail end of the response interval will contain partial data. Example: Day to get a daily breakdown of the request interval, where the day boundary is defined by the granularityTimeZone. (required)
     * @param  string $granularityTimeZone An IANA-compatible time zone for determining the day boundary. Required when specifying a granularity value greater than Hour. The granularityTimeZone value must align with the offset of the specified interval value. For example, if the interval value uses Z notation, then granularityTimeZone must be UTC. If the interval value uses an offset, then granularityTimeZone must be an IANA-compatible time zone that matches the offset. Example: US/Pacific to compute day boundaries, accounting for daylight time savings, for US/Pacific zone. (optional)
     * @param  string $buyerType Filters the results by the buyer type that you specify, B2B (business to business) or B2C (business to customer). Example: B2B, if you want the response to include order metrics for only B2B buyers. (optional, default to All)
     * @param  string $fulfillmentNetwork Filters the results by the fulfillment network that you specify, MFN (merchant fulfillment network) or AFN (Amazon fulfillment network). Do not include this filter if you want the response to include order metrics for all fulfillment networks. Example: AFN, if you want the response to include order metrics for only Amazon fulfillment network. (optional)
     * @param  string $firstDayOfWeek Specifies the day that the week starts on when granularity&#x3D;Week, either Monday or Sunday. Default: Monday. Example: Sunday, if you want the week to start on a Sunday. (optional, default to Monday)
     * @param  string $asin Filters the results by the ASIN that you specify. Specifying both ASIN and SKU returns an error. Do not include this filter if you want the response to include order metrics for all ASINs. Example: B0792R1RSN, if you want the response to include order metrics for only ASIN B0792R1RSN. (optional)
     * @param  string $sku Filters the results by the SKU that you specify. Specifying both ASIN and SKU returns an error. Do not include this filter if you want the response to include order metrics for all SKUs. Example: TestSKU, if you want the response to include order metrics for only SKU TestSKU. (optional)
     *
     * @throws \SellingPartnerApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SellingPartnerApi\Model\Sales\GetOrderMetricsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOrderMetricsWithHttpInfo($marketplaceIds, $interval, $granularity, $granularityTimeZone = null, $buyerType = 'All', $fulfillmentNetwork = null, $firstDayOfWeek = 'Monday', $asin = null, $sku = null)
    {
        $returnType = '\SellingPartnerApi\Model\Sales\GetOrderMetricsResponse';
        $request = $this->getOrderMetricsRequest($marketplaceIds, $interval, $granularity, $granularityTimeZone, $buyerType, $fulfillmentNetwork, $firstDayOfWeek, $asin, $sku);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\Sales\GetOrderMetricsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\Sales\GetOrderMetricsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\Sales\GetOrderMetricsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\Sales\GetOrderMetricsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 413:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\Sales\GetOrderMetricsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 415:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\Sales\GetOrderMetricsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\Sales\GetOrderMetricsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\Sales\GetOrderMetricsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\Sales\GetOrderMetricsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getOrderMetricsAsync
     *
     * 
     *
     * @param  string[] $marketplaceIds A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.  For example, ATVPDKIKX0DER indicates the US marketplace. (required)
     * @param  string $interval A time interval used for selecting order metrics. This takes the form of two dates separated by two hyphens (first date is inclusive; second date is exclusive). Dates are in ISO8601 format and must represent absolute time (either Z notation or offset notation). Example: 2018-09-01T00:00:00-07:00--2018-09-04T00:00:00-07:00 requests order metrics for Sept 1st, 2nd and 3rd in the -07:00 zone. (required)
     * @param  string $granularity The granularity of the grouping of order metrics, based on a unit of time. Specifying granularity&#x3D;Hour results in a successful request only if the interval specified is less than or equal to 30 days from now. For all other granularities, the interval specified must be less or equal to 2 years from now. Specifying granularity&#x3D;Total results in order metrics that are aggregated over the entire interval that you specify. If the interval start and end date don’t align with the specified granularity, the head and tail end of the response interval will contain partial data. Example: Day to get a daily breakdown of the request interval, where the day boundary is defined by the granularityTimeZone. (required)
     * @param  string $granularityTimeZone An IANA-compatible time zone for determining the day boundary. Required when specifying a granularity value greater than Hour. The granularityTimeZone value must align with the offset of the specified interval value. For example, if the interval value uses Z notation, then granularityTimeZone must be UTC. If the interval value uses an offset, then granularityTimeZone must be an IANA-compatible time zone that matches the offset. Example: US/Pacific to compute day boundaries, accounting for daylight time savings, for US/Pacific zone. (optional)
     * @param  string $buyerType Filters the results by the buyer type that you specify, B2B (business to business) or B2C (business to customer). Example: B2B, if you want the response to include order metrics for only B2B buyers. (optional, default to All)
     * @param  string $fulfillmentNetwork Filters the results by the fulfillment network that you specify, MFN (merchant fulfillment network) or AFN (Amazon fulfillment network). Do not include this filter if you want the response to include order metrics for all fulfillment networks. Example: AFN, if you want the response to include order metrics for only Amazon fulfillment network. (optional)
     * @param  string $firstDayOfWeek Specifies the day that the week starts on when granularity&#x3D;Week, either Monday or Sunday. Default: Monday. Example: Sunday, if you want the week to start on a Sunday. (optional, default to Monday)
     * @param  string $asin Filters the results by the ASIN that you specify. Specifying both ASIN and SKU returns an error. Do not include this filter if you want the response to include order metrics for all ASINs. Example: B0792R1RSN, if you want the response to include order metrics for only ASIN B0792R1RSN. (optional)
     * @param  string $sku Filters the results by the SKU that you specify. Specifying both ASIN and SKU returns an error. Do not include this filter if you want the response to include order metrics for all SKUs. Example: TestSKU, if you want the response to include order metrics for only SKU TestSKU. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOrderMetricsAsync($marketplaceIds, $interval, $granularity, $granularityTimeZone = null, $buyerType = 'All', $fulfillmentNetwork = null, $firstDayOfWeek = 'Monday', $asin = null, $sku = null)
    {
        return $this->getOrderMetricsAsyncWithHttpInfo($marketplaceIds, $interval, $granularity, $granularityTimeZone, $buyerType, $fulfillmentNetwork, $firstDayOfWeek, $asin, $sku)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getOrderMetricsAsyncWithHttpInfo
     *
     * 
     *
     * @param  string[] $marketplaceIds A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.  For example, ATVPDKIKX0DER indicates the US marketplace. (required)
     * @param  string $interval A time interval used for selecting order metrics. This takes the form of two dates separated by two hyphens (first date is inclusive; second date is exclusive). Dates are in ISO8601 format and must represent absolute time (either Z notation or offset notation). Example: 2018-09-01T00:00:00-07:00--2018-09-04T00:00:00-07:00 requests order metrics for Sept 1st, 2nd and 3rd in the -07:00 zone. (required)
     * @param  string $granularity The granularity of the grouping of order metrics, based on a unit of time. Specifying granularity&#x3D;Hour results in a successful request only if the interval specified is less than or equal to 30 days from now. For all other granularities, the interval specified must be less or equal to 2 years from now. Specifying granularity&#x3D;Total results in order metrics that are aggregated over the entire interval that you specify. If the interval start and end date don’t align with the specified granularity, the head and tail end of the response interval will contain partial data. Example: Day to get a daily breakdown of the request interval, where the day boundary is defined by the granularityTimeZone. (required)
     * @param  string $granularityTimeZone An IANA-compatible time zone for determining the day boundary. Required when specifying a granularity value greater than Hour. The granularityTimeZone value must align with the offset of the specified interval value. For example, if the interval value uses Z notation, then granularityTimeZone must be UTC. If the interval value uses an offset, then granularityTimeZone must be an IANA-compatible time zone that matches the offset. Example: US/Pacific to compute day boundaries, accounting for daylight time savings, for US/Pacific zone. (optional)
     * @param  string $buyerType Filters the results by the buyer type that you specify, B2B (business to business) or B2C (business to customer). Example: B2B, if you want the response to include order metrics for only B2B buyers. (optional, default to All)
     * @param  string $fulfillmentNetwork Filters the results by the fulfillment network that you specify, MFN (merchant fulfillment network) or AFN (Amazon fulfillment network). Do not include this filter if you want the response to include order metrics for all fulfillment networks. Example: AFN, if you want the response to include order metrics for only Amazon fulfillment network. (optional)
     * @param  string $firstDayOfWeek Specifies the day that the week starts on when granularity&#x3D;Week, either Monday or Sunday. Default: Monday. Example: Sunday, if you want the week to start on a Sunday. (optional, default to Monday)
     * @param  string $asin Filters the results by the ASIN that you specify. Specifying both ASIN and SKU returns an error. Do not include this filter if you want the response to include order metrics for all ASINs. Example: B0792R1RSN, if you want the response to include order metrics for only ASIN B0792R1RSN. (optional)
     * @param  string $sku Filters the results by the SKU that you specify. Specifying both ASIN and SKU returns an error. Do not include this filter if you want the response to include order metrics for all SKUs. Example: TestSKU, if you want the response to include order metrics for only SKU TestSKU. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOrderMetricsAsyncWithHttpInfo($marketplaceIds, $interval, $granularity, $granularityTimeZone = null, $buyerType = 'All', $fulfillmentNetwork = null, $firstDayOfWeek = 'Monday', $asin = null, $sku = null)
    {
        $returnType = '\SellingPartnerApi\Model\Sales\GetOrderMetricsResponse';
        $request = $this->getOrderMetricsRequest($marketplaceIds, $interval, $granularity, $granularityTimeZone, $buyerType, $fulfillmentNetwork, $firstDayOfWeek, $asin, $sku);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getOrderMetrics'
     *
     * @param  string[] $marketplaceIds A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.  For example, ATVPDKIKX0DER indicates the US marketplace. (required)
     * @param  string $interval A time interval used for selecting order metrics. This takes the form of two dates separated by two hyphens (first date is inclusive; second date is exclusive). Dates are in ISO8601 format and must represent absolute time (either Z notation or offset notation). Example: 2018-09-01T00:00:00-07:00--2018-09-04T00:00:00-07:00 requests order metrics for Sept 1st, 2nd and 3rd in the -07:00 zone. (required)
     * @param  string $granularity The granularity of the grouping of order metrics, based on a unit of time. Specifying granularity&#x3D;Hour results in a successful request only if the interval specified is less than or equal to 30 days from now. For all other granularities, the interval specified must be less or equal to 2 years from now. Specifying granularity&#x3D;Total results in order metrics that are aggregated over the entire interval that you specify. If the interval start and end date don’t align with the specified granularity, the head and tail end of the response interval will contain partial data. Example: Day to get a daily breakdown of the request interval, where the day boundary is defined by the granularityTimeZone. (required)
     * @param  string $granularityTimeZone An IANA-compatible time zone for determining the day boundary. Required when specifying a granularity value greater than Hour. The granularityTimeZone value must align with the offset of the specified interval value. For example, if the interval value uses Z notation, then granularityTimeZone must be UTC. If the interval value uses an offset, then granularityTimeZone must be an IANA-compatible time zone that matches the offset. Example: US/Pacific to compute day boundaries, accounting for daylight time savings, for US/Pacific zone. (optional)
     * @param  string $buyerType Filters the results by the buyer type that you specify, B2B (business to business) or B2C (business to customer). Example: B2B, if you want the response to include order metrics for only B2B buyers. (optional, default to All)
     * @param  string $fulfillmentNetwork Filters the results by the fulfillment network that you specify, MFN (merchant fulfillment network) or AFN (Amazon fulfillment network). Do not include this filter if you want the response to include order metrics for all fulfillment networks. Example: AFN, if you want the response to include order metrics for only Amazon fulfillment network. (optional)
     * @param  string $firstDayOfWeek Specifies the day that the week starts on when granularity&#x3D;Week, either Monday or Sunday. Default: Monday. Example: Sunday, if you want the week to start on a Sunday. (optional, default to Monday)
     * @param  string $asin Filters the results by the ASIN that you specify. Specifying both ASIN and SKU returns an error. Do not include this filter if you want the response to include order metrics for all ASINs. Example: B0792R1RSN, if you want the response to include order metrics for only ASIN B0792R1RSN. (optional)
     * @param  string $sku Filters the results by the SKU that you specify. Specifying both ASIN and SKU returns an error. Do not include this filter if you want the response to include order metrics for all SKUs. Example: TestSKU, if you want the response to include order metrics for only SKU TestSKU. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getOrderMetricsRequest($marketplaceIds, $interval, $granularity, $granularityTimeZone = null, $buyerType = 'All', $fulfillmentNetwork = null, $firstDayOfWeek = 'Monday', $asin = null, $sku = null)
    {
        // verify the required parameter 'marketplaceIds' is set
        if ($marketplaceIds === null || (is_array($marketplaceIds) && count($marketplaceIds) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $marketplaceIds when calling getOrderMetrics'
            );
        }
        // verify the required parameter 'interval' is set
        if ($interval === null || (is_array($interval) && count($interval) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $interval when calling getOrderMetrics'
            );
        }
        // verify the required parameter 'granularity' is set
        if ($granularity === null || (is_array($granularity) && count($granularity) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $granularity when calling getOrderMetrics'
            );
        }

        $resourcePath = '/sales/v1/orderMetrics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($marketplaceIds)) {
            $marketplaceIds = ObjectSerializer::serializeCollection($marketplaceIds, 'csv', true);
        }
        if ($marketplaceIds !== null) {
            $queryParams['marketplaceIds'] = ObjectSerializer::toQueryValue($marketplaceIds, null);
        }
        // query params
        if ($interval !== null) {
            $queryParams['interval'] = ObjectSerializer::toQueryValue($interval, null);
        }
        // query params
        if ($granularityTimeZone !== null) {
            $queryParams['granularityTimeZone'] = ObjectSerializer::toQueryValue($granularityTimeZone, null);
        }
        // query params
        if ($granularity !== null) {
            $queryParams['granularity'] = ObjectSerializer::toQueryValue($granularity, null);
        }
        // query params
        if ($buyerType !== null) {
            $queryParams['buyerType'] = ObjectSerializer::toQueryValue($buyerType, null);
        }
        // query params
        if ($fulfillmentNetwork !== null) {
            $queryParams['fulfillmentNetwork'] = ObjectSerializer::toQueryValue($fulfillmentNetwork, null);
        }
        // query params
        if ($firstDayOfWeek !== null) {
            $queryParams['firstDayOfWeek'] = ObjectSerializer::toQueryValue($firstDayOfWeek, null);
        }
        // query params
        if ($asin !== null) {
            $queryParams['asin'] = ObjectSerializer::toQueryValue($asin, null);
        }
        // query params
        if ($sku !== null) {
            $queryParams['sku'] = ObjectSerializer::toQueryValue($sku, null);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'payload']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'payload'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
