# ListOffersResponseOffer

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sku** | **string** | The SKU. This property is only supported for sellers and not for vendors. | [optional] 
**asin** | **string** | The Amazon Standard Identification Number (ASIN). | [optional] 
**marketplace_id** | [**\SellingPartnerApi\Model\MarketplaceId**](MarketplaceId.md) | The marketplace identifier. The supported marketplaces for both sellers and vendors are US, CA, ES, UK, FR, IT, IN, DE and JP. The supported marketplaces for vendors only are BR, AU, MX, AE and NL.  Refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids) to find the identifier for the marketplace. | [optional] 
**eligibility** | [**\SellingPartnerApi\Model\EligibilityStatus**](EligibilityStatus.md) | The offer eligibility status. | [optional] 
**offer_program_configuration** | [**\SellingPartnerApi\Model\OfferProgramConfiguration**](OfferProgramConfiguration.md) |  | [optional] 
**program_type** | [**\SellingPartnerApi\Model\ProgramType**](ProgramType.md) | The replenishment program for the offer. | [optional] 
**vendor_codes** | **string[]** | A list of vendor codes associated with the offer. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


