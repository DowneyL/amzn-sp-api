# ItemSearchResults

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**number_of_results** | **int** | For &#x60;identifiers&#x60;-based searches, the total number of Amazon catalog items found. For &#x60;keywords&#x60;-based searches, the estimated total number of Amazon catalog items matched by the search query (only results up to the page count limit will be returned per request regardless of the number found).  Note: The maximum number of items (ASINs) that can be returned and paged through is 1000. | 
**pagination** | [**\SellingPartnerApi\Model\Pagination**](Pagination.md) | If available, the &#x60;nextToken&#x60; and/or &#x60;previousToken&#x60; values required to return paginated results. | 
**refinements** | [**\SellingPartnerApi\Model\Refinements**](Refinements.md) | Search refinements for &#x60;keywords&#x60;-based searches. | 
**items** | [**\SellingPartnerApi\Model\Item[]**](Item.md) | A list of items from the Amazon catalog. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


