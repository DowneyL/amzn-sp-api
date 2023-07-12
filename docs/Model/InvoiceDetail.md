# InvoiceDetail

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**invoice_number** | **string** | The unique invoice number. | 
**invoice_date** | [**\DateTime**](\DateTime.md) | Invoice date. | 
**reference_number** | **string** | An additional unique reference number used for regulatory or other purposes. | [optional] 
**remit_to_party** | [**\SellingPartnerApi\Model\PartyIdentification**](PartyIdentification.md) | Name, address and tax details of the party receiving the payment of this invoice. | 
**ship_from_party** | [**\SellingPartnerApi\Model\PartyIdentification**](PartyIdentification.md) | Warehouse code of the vendor as in the order. | 
**bill_to_party** | [**\SellingPartnerApi\Model\PartyIdentification**](PartyIdentification.md) | Name, address and tax details of the party to whom this invoice is issued. | [optional] 
**ship_to_country_code** | **string** | Ship-to country code. | [optional] 
**payment_terms_code** | **string** | The payment terms for the invoice. | [optional] 
**invoice_total** | [**\SellingPartnerApi\Model\Money**](Money.md) | Total amount details of the invoice. | 
**tax_totals** | [**\SellingPartnerApi\Model\TaxDetail[]**](TaxDetail.md) | Individual tax details per line item. | [optional] 
**additional_details** | [**\SellingPartnerApi\Model\AdditionalDetails[]**](AdditionalDetails.md) | Additional details provided by the selling party, for tax-related or other purposes. | [optional] 
**charge_details** | [**\SellingPartnerApi\Model\ChargeDetails[]**](ChargeDetails.md) | Total charge amount details for all line items. | [optional] 
**items** | [**\SellingPartnerApi\Model\InvoiceItem[]**](InvoiceItem.md) | Provides the details of the items in this invoice. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


