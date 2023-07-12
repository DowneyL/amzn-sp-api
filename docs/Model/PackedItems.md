# PackedItems

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_sequence_number** | **string** | Item sequence number for the item. The first item will be 001, the second 002, and so on. This number is used as a reference to refer to this item from the carton or pallet level. | [optional] 
**buyer_product_identifier** | **string** | Buyer Standard Identification Number (ASIN) of an item. | [optional] 
**vendor_product_identifier** | **string** | The vendor selected product identification of the item. Should be the same as was sent in the purchase order. | [optional] 
**packed_quantity** | [**\SellingPartnerApi\Model\ItemQuantity**](ItemQuantity.md) | Total item quantity shipped in this shipment. | [optional] 
**item_details** | [**\SellingPartnerApi\Model\PackageItemDetails**](PackageItemDetails.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


