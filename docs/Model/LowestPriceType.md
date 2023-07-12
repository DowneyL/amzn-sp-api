# LowestPriceType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**condition** | **string** | Indicates the condition of the item. For example: New, Used, Collectible, Refurbished, or Club. | 
**fulfillment_channel** | **string** | Indicates whether the item is fulfilled by Amazon or by the seller. | 
**offer_type** | [**\SellingPartnerApi\Model\OfferCustomerType**](OfferCustomerType.md) | Indicates the type of customer that the offer is valid for. | [optional] 
**quantity_tier** | **int** | Indicates at what quantity this price becomes active. | [optional] 
**quantity_discount_type** | [**\SellingPartnerApi\Model\QuantityDiscountType**](QuantityDiscountType.md) | Indicates the type of quantity discount this price applies to. | [optional] 
**landed_price** | [**\SellingPartnerApi\Model\MoneyType**](MoneyType.md) | The value calculated by adding ListingPrice + Shipping - Points. | 
**listing_price** | [**\SellingPartnerApi\Model\MoneyType**](MoneyType.md) | The price of the item. | 
**shipping** | [**\SellingPartnerApi\Model\MoneyType**](MoneyType.md) | The shipping cost. | 
**points** | [**\SellingPartnerApi\Model\Points**](Points.md) | The number of Amazon Points offered with the purchase of an item. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


