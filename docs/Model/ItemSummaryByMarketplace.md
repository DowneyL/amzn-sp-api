# ItemSummaryByMarketplace

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**marketplace_id** | **string** | A marketplace identifier. Identifies the Amazon marketplace for the listings item. | 
**asin** | **string** | Amazon Standard Identification Number (ASIN) of the listings item. | 
**product_type** | **string** | The Amazon product type of the listings item. | 
**condition_type** | **string** | Identifies the condition of the listings item. | [optional] 
**status** | **string[]** | Statuses that apply to the listings item. | 
**fn_sku** | **string** | Fulfillment network stock keeping unit is an identifier used by Amazon fulfillment centers to identify each unique item. | [optional] 
**item_name** | **string** | Name, or title, associated with an Amazon catalog item. | 
**created_date** | [**\DateTime**](\DateTime.md) | Date the listings item was created, in ISO 8601 format. | 
**last_updated_date** | [**\DateTime**](\DateTime.md) | Date the listings item was last updated, in ISO 8601 format. | 
**main_image** | [**\SellingPartnerApi\Model\ItemImage**](ItemImage.md) | Main image for the listings item. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


