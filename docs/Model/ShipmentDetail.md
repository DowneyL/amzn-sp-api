# ShipmentDetail

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**warehouse_id** | **string** | The Amazon-defined identifier for the warehouse. | [optional] 
**amazon_order_id** | **string** | The Amazon-defined identifier for the order. | [optional] 
**amazon_shipment_id** | **string** | The Amazon-defined identifier for the shipment. | [optional] 
**purchase_date** | [**\DateTime**](\DateTime.md) | The date and time when the order was created. | [optional] 
**shipping_address** | [**\SellingPartnerApi\Model\Address**](Address.md) |  | [optional] 
**payment_method_details** | [**\SellingPartnerApi\Model\PaymentMethodDetailItemList**](PaymentMethodDetailItemList.md) |  | [optional] 
**marketplace_id** | **string** | The identifier for the marketplace where the order was placed. | [optional] 
**seller_id** | **string** | The seller identifier. | [optional] 
**buyer_name** | **string** | The name of the buyer. | [optional] 
**buyer_county** | **string** | The county of the buyer. | [optional] 
**buyer_tax_info** | [**\SellingPartnerApi\Model\BuyerTaxInfo**](BuyerTaxInfo.md) |  | [optional] 
**marketplace_tax_info** | [**\SellingPartnerApi\Model\MarketplaceTaxInfo**](MarketplaceTaxInfo.md) |  | [optional] 
**seller_display_name** | **string** | The seller’s friendly name registered in the marketplace. | [optional] 
**shipment_items** | [**\SellingPartnerApi\Model\ShipmentItems**](ShipmentItems.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


