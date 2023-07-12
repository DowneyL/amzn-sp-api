# OrderStatus

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**purchase_order_number** | **string** | The buyer&#39;s purchase order number for this order. Formatting Notes: 8-character alpha-numeric code. | 
**purchase_order_status** | **string** | The status of the buyer&#39;s purchase order for this order. | 
**purchase_order_date** | [**\DateTime**](\DateTime.md) | The date the purchase order was placed. Must be in ISO-8601 date/time format. | 
**last_updated_date** | [**\DateTime**](\DateTime.md) | The date when the purchase order was last updated. Must be in ISO-8601 date/time format. | [optional] 
**selling_party** | [**\SellingPartnerApi\Model\PartyIdentification**](PartyIdentification.md) | Name/Address and tax details of the selling party. | 
**ship_to_party** | [**\SellingPartnerApi\Model\PartyIdentification**](PartyIdentification.md) | Name/Address and tax details of the ship to party. Find a list of fulfillment center addresses for a region on the [Resources page of Amazon Vendor Central](https://vendorcentral.amazon.com/hz/vendor/members/support/help/node/GPZ88XH8HQM97ZV6). | 
**item_status** | [**\SellingPartnerApi\Model\ItemStatus**](ItemStatus.md) | Detailed order status. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


