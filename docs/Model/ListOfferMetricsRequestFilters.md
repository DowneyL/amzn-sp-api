# ListOfferMetricsRequestFilters

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**aggregation_frequency** | [**\SellingPartnerApi\Model\AggregationFrequency**](AggregationFrequency.md) |  | [optional] 
**time_interval** | [**\SellingPartnerApi\Model\TimeInterval**](TimeInterval.md) | A time interval used to compute metrics. | 
**time_period_type** | [**\SellingPartnerApi\Model\TimePeriodType**](TimePeriodType.md) |  | 
**marketplace_id** | [**\SellingPartnerApi\Model\MarketplaceId**](MarketplaceId.md) | The marketplace identifier. The supported marketplaces for both sellers and vendors are US, CA, ES, UK, FR, IT, IN, DE and JP. The supported marketplaces for vendors only are BR, AU, MX, AE and NL.  Refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids) to find the identifier for the marketplace. | 
**program_types** | [**\SellingPartnerApi\Model\ProgramTypes**](ProgramTypes.md) |  | 
**asins** | **string[]** | A list of Amazon Standard Identification Numbers (ASINs). | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


