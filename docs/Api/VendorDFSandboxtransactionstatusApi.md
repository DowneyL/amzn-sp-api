# SellingPartnerApi\VendorDFSandboxtransactionstatusApi

All URIs are relative to *https://sandbox.sellingpartnerapi-na.amazon.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOrderScenarios**](VendorDFSandboxtransactionstatusApi.md#getOrderScenarios) | **GET** /vendor/directFulfillment/sandbox/2021-10-28/transactions/{transactionId} | 


# **getOrderScenarios**
> \SellingPartnerApi\Model\TransactionStatus getOrderScenarios($transaction_id)



Returns the status of the transaction indicated by the specified transactionId. If the transaction was successful, also returns the requested test order data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SellingPartnerApi\Api\VendorDFSandboxtransactionstatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$transaction_id = "transaction_id_example"; // string | The transaction identifier returned in the response to the generateOrderScenarios operation.

try {
    $result = $apiInstance->getOrderScenarios($transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorDFSandboxtransactionstatusApi->getOrderScenarios: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | **string**| The transaction identifier returned in the response to the generateOrderScenarios operation. |

### Return type

[**\SellingPartnerApi\Model\TransactionStatus**](../Model/TransactionStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

