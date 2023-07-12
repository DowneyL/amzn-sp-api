# OrderItemStatus

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_sequence_number** | **string** | Numbering of the item on the purchase order. The first item will be 1, the second 2, and so on. | 
**buyer_product_identifier** | **string** | Buyer&#39;s Standard Identification Number (ASIN) of an item. | [optional] 
**vendor_product_identifier** | **string** | The vendor selected product identification of the item. | [optional] 
**net_cost** | [**\SellingPartnerApi\Model\Money**](Money.md) | The net cost to Amazon each (cost). | [optional] 
**list_price** | [**\SellingPartnerApi\Model\Money**](Money.md) | The list Price to Amazon each (list). | [optional] 
**ordered_quantity** | [**\SellingPartnerApi\Model\OrderItemStatusOrderedQuantity**](OrderItemStatusOrderedQuantity.md) |  | [optional] 
**acknowledgement_status** | [**\SellingPartnerApi\Model\OrderItemStatusAcknowledgementStatus**](OrderItemStatusAcknowledgementStatus.md) |  | [optional] 
**receiving_status** | [**\SellingPartnerApi\Model\OrderItemStatusReceivingStatus**](OrderItemStatusReceivingStatus.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


