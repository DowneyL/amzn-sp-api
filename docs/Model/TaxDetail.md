# TaxDetail

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tax_type** | **string** | Type of the tax applied. | 
**tax_rate** | [**\SellingPartnerApi\Model\Decimal**](Decimal.md) | Tax percentage applied. Percentage must be expressed in decimal. | [optional] 
**tax_amount** | [**\SellingPartnerApi\Model\Money**](Money.md) | Total tax amount applied on invoice total or an item total. | 
**taxable_amount** | [**\SellingPartnerApi\Model\Money**](Money.md) | This field will contain the invoice amount that is taxable at the rate specified in the tax rate field. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


