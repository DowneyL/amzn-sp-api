# FeaturedOfferExpectedPriceResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**featured_offer_expected_price** | [**\SellingPartnerApi\Model\FeaturedOfferExpectedPrice**](FeaturedOfferExpectedPrice.md) |  | [optional] 
**result_status** | **string** | The status of the featured offer expected price computation. Possible values include VALID_FOEP, NO_COMPETING_OFFER, OFFER_NOT_ELIGIBLE, OFFER_NOT_FOUND. | 
**competing_featured_offer** | [**\SellingPartnerApi\Model\FeaturedOffer**](FeaturedOffer.md) | The offer that will likely be the featured offer if the target offer is priced above its featured offer expected price. If the target offer is currently the featured offer, this property will be different than currentFeaturedOffer. | [optional] 
**current_featured_offer** | [**\SellingPartnerApi\Model\FeaturedOffer**](FeaturedOffer.md) | The offer that is currently the featured offer. If the target offer is not currently featured, this property will be equal to competingFeaturedOffer. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


