# RemovalShipmentAdjustmentEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**posted_date** | [**\SellingPartnerApi\Model\\DateTime**](\DateTime.md) | The date when the financial event was posted. | [optional] 
**adjustment_event_id** | **string** | The unique identifier for the adjustment event. | [optional] 
**merchant_order_id** | **string** | The merchant removal orderId. | [optional] 
**order_id** | **string** | The orderId for shipping inventory. | [optional] 
**transaction_type** | **string** | The type of removal order.  Possible values:  * WHOLESALE_LIQUIDATION. | [optional] 
**removal_shipment_item_adjustment_list** | [**\SellingPartnerApi\Model\RemovalShipmentItemAdjustment[]**](RemovalShipmentItemAdjustment.md) | A comma-delimited list of Removal shipmentItemAdjustment details for FBA inventory. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


