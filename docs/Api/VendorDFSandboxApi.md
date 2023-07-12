# SellingPartnerApi\VendorDFSandboxApi

All URIs are relative to *https://sandbox.sellingpartnerapi-na.amazon.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**generateOrderScenarios**](VendorDFSandboxApi.md#generateOrderScenarios) | **POST** /vendor/directFulfillment/sandbox/2021-10-28/orders | 


# **generateOrderScenarios**
> \SellingPartnerApi\Model\TransactionReference generateOrderScenarios($body)



Submits a request to generate test order data for Vendor Direct Fulfillment API entities.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SellingPartnerApi\Api\VendorDFSandboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \SellingPartnerApi\Model\GenerateOrderScenarioRequest(); // \SellingPartnerApi\Model\GenerateOrderScenarioRequest | 

try {
    $result = $apiInstance->generateOrderScenarios($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorDFSandboxApi->generateOrderScenarios: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SellingPartnerApi\Model\GenerateOrderScenarioRequest**](../Model/GenerateOrderScenarioRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\TransactionReference**](../Model/TransactionReference.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

