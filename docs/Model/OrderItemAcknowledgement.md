# OrderItemAcknowledgement

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**acknowledgement_code** | **string** | This indicates the acknowledgement code. | 
**acknowledged_quantity** | [**\SellingPartnerApi\Model\ItemQuantity**](ItemQuantity.md) | Details of quantity acknowledged with the above acknowledgement code. | 
**scheduled_ship_date** | [**\DateTime**](\DateTime.md) | Estimated ship date per line item. Must be in ISO-8601 date/time format. | [optional] 
**scheduled_delivery_date** | [**\DateTime**](\DateTime.md) | Estimated delivery date per line item. Must be in ISO-8601 date/time format. | [optional] 
**rejection_reason** | **string** | Indicates the reason for rejection. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


