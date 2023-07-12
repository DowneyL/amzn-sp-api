# SellingPartnerApi\DefinitionsApi

All URIs are relative to *https://sellingpartnerapi-na.amazon.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDefinitionsProductType**](DefinitionsApi.md#getDefinitionsProductType) | **GET** /definitions/2020-09-01/productTypes/{productType} | 
[**searchDefinitionsProductTypes**](DefinitionsApi.md#searchDefinitionsProductTypes) | **GET** /definitions/2020-09-01/productTypes | 


# **getDefinitionsProductType**
> \SellingPartnerApi\Model\ProductTypeDefinition getDefinitionsProductType($product_type, $marketplace_ids, $seller_id, $product_type_version, $requirements, $requirements_enforced, $locale)



Retrieve an Amazon product type definition.  **Usage Plans:**  | Plan type | Rate (requests per second) | Burst | | ---- | ---- | ---- | |Default| 5 | 10 | |Selling partner specific| Variable | Variable |  The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](doc:usage-plans-and-rate-limits-in-the-sp-api).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SellingPartnerApi\Api\DefinitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$product_type = "LUGGAGE"; // string | The Amazon product type name.
$marketplace_ids = array("ATVPDKIKX0DER"); // string[] | A comma-delimited list of Amazon marketplace identifiers for the request. Note: This parameter is limited to one marketplaceId at this time.
$seller_id = "seller_id_example"; // string | A selling partner identifier. When provided, seller-specific requirements and values are populated within the product type definition schema, such as brand names associated with the selling partner.
$product_type_version = "LATEST"; // string | The version of the Amazon product type to retrieve. Defaults to \"LATEST\",. Prerelease versions of product type definitions may be retrieved with \"RELEASE_CANDIDATE\". If no prerelease version is currently available, the \"LATEST\" live version will be provided.
$requirements = "LISTING"; // string | The name of the requirements set to retrieve requirements for.
$requirements_enforced = "ENFORCED"; // string | Identifies if the required attributes for a requirements set are enforced by the product type definition schema. Non-enforced requirements enable structural validation of individual attributes without all the required attributes being present (such as for partial updates).
$locale = "DEFAULT"; // string | Locale for retrieving display labels and other presentation details. Defaults to the default language of the first marketplace in the request.

try {
    $result = $apiInstance->getDefinitionsProductType($product_type, $marketplace_ids, $seller_id, $product_type_version, $requirements, $requirements_enforced, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefinitionsApi->getDefinitionsProductType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_type** | **string**| The Amazon product type name. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A comma-delimited list of Amazon marketplace identifiers for the request. Note: This parameter is limited to one marketplaceId at this time. |
 **seller_id** | **string**| A selling partner identifier. When provided, seller-specific requirements and values are populated within the product type definition schema, such as brand names associated with the selling partner. | [optional]
 **product_type_version** | **string**| The version of the Amazon product type to retrieve. Defaults to \&quot;LATEST\&quot;,. Prerelease versions of product type definitions may be retrieved with \&quot;RELEASE_CANDIDATE\&quot;. If no prerelease version is currently available, the \&quot;LATEST\&quot; live version will be provided. | [optional] [default to LATEST]
 **requirements** | **string**| The name of the requirements set to retrieve requirements for. | [optional] [default to LISTING]
 **requirements_enforced** | **string**| Identifies if the required attributes for a requirements set are enforced by the product type definition schema. Non-enforced requirements enable structural validation of individual attributes without all the required attributes being present (such as for partial updates). | [optional] [default to ENFORCED]
 **locale** | **string**| Locale for retrieving display labels and other presentation details. Defaults to the default language of the first marketplace in the request. | [optional] [default to DEFAULT]

### Return type

[**\SellingPartnerApi\Model\ProductTypeDefinition**](../Model/ProductTypeDefinition.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchDefinitionsProductTypes**
> \SellingPartnerApi\Model\ProductTypeList searchDefinitionsProductTypes($marketplace_ids, $keywords)



Search for and return a list of Amazon product types that have definitions available.  **Usage Plans:**  | Plan type | Rate (requests per second) | Burst | | ---- | ---- | ---- | |Default| 5 | 10 | |Selling partner specific| Variable | Variable |  The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](doc:usage-plans-and-rate-limits-in-the-sp-api).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SellingPartnerApi\Api\DefinitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$marketplace_ids = array("ATVPDKIKX0DER"); // string[] | A comma-delimited list of Amazon marketplace identifiers for the request.
$keywords = array("LUGGAGE"); // string[] | A comma-delimited list of keywords to search product types by.

try {
    $result = $apiInstance->searchDefinitionsProductTypes($marketplace_ids, $keywords);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefinitionsApi->searchDefinitionsProductTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_ids** | [**string[]**](../Model/string.md)| A comma-delimited list of Amazon marketplace identifiers for the request. |
 **keywords** | [**string[]**](../Model/string.md)| A comma-delimited list of keywords to search product types by. | [optional]

### Return type

[**\SellingPartnerApi\Model\ProductTypeList**](../Model/ProductTypeList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

