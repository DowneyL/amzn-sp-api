# RetrochargeEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**retrocharge_event_type** | **string** | The type of event.  Possible values:  * Retrocharge  * RetrochargeReversal | [optional] 
**amazon_order_id** | **string** | An Amazon-defined identifier for an order. | [optional] 
**posted_date** | [**\SellingPartnerApi\Model\\DateTime**](\DateTime.md) | The date and time when the financial event was posted. | [optional] 
**base_tax** | [**\SellingPartnerApi\Model\Currency**](Currency.md) | The base tax associated with the retrocharge event. | [optional] 
**shipping_tax** | [**\SellingPartnerApi\Model\Currency**](Currency.md) | The shipping tax associated with the retrocharge event. | [optional] 
**marketplace_name** | **string** | The name of the marketplace where the retrocharge event occurred. | [optional] 
**retrocharge_tax_withheld_list** | [**\SellingPartnerApi\Model\TaxWithheldComponentList**](TaxWithheldComponentList.md) | A list of information about taxes withheld. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


