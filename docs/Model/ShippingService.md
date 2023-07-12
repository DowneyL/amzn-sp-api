# ShippingService

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipping_service_name** | **string** | A plain text representation of a carrier&#39;s shipping service. For example, \&quot;UPS Ground\&quot; or \&quot;FedEx Standard Overnight\&quot;. | 
**carrier_name** | **string** | The name of the carrier. | 
**shipping_service_id** | [**\SellingPartnerApi\Model\ShippingServiceIdentifier**](ShippingServiceIdentifier.md) |  | 
**shipping_service_offer_id** | **string** | An Amazon-defined shipping service offer identifier. | 
**ship_date** | [**\SellingPartnerApi\Model\Timestamp**](Timestamp.md) | The date that the carrier will ship the package. | 
**earliest_estimated_delivery_date** | [**\SellingPartnerApi\Model\Timestamp**](Timestamp.md) | The earliest date by which the shipment will be delivered. | [optional] 
**latest_estimated_delivery_date** | [**\SellingPartnerApi\Model\Timestamp**](Timestamp.md) | The latest date by which the shipment will be delivered. | [optional] 
**rate** | [**\SellingPartnerApi\Model\CurrencyAmount**](CurrencyAmount.md) | The amount that the carrier will charge for the shipment. | 
**shipping_service_options** | [**\SellingPartnerApi\Model\ShippingServiceOptions**](ShippingServiceOptions.md) | Extra services offered by the carrier. | 
**available_shipping_service_options** | [**\SellingPartnerApi\Model\AvailableShippingServiceOptions**](AvailableShippingServiceOptions.md) |  | [optional] 
**available_label_formats** | [**\SellingPartnerApi\Model\LabelFormatList**](LabelFormatList.md) |  | [optional] 
**available_format_options_for_label** | [**\SellingPartnerApi\Model\AvailableFormatOptionsForLabelList**](AvailableFormatOptionsForLabelList.md) |  | [optional] 
**requires_additional_seller_inputs** | **bool** | When true, additional seller inputs are required. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


