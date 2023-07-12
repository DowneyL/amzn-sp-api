# Invoice

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**invoice_type** | **string** | Identifies the type of invoice. | 
**id** | **string** | Unique number relating to the charges defined in this document. This will be invoice number if the document type is Invoice or CreditNote number if the document type is Credit Note. Failure to provide this reference will result in a rejection. | 
**reference_number** | **string** | An additional unique reference number used for regulatory or other purposes. | [optional] 
**date** | [**\SellingPartnerApi\Model\\DateTime**](\DateTime.md) | Date when the invoice/credit note information was generated in the origin&#39;s accounting system. The invoice date should be on or after the purchase order creation date. | 
**remit_to_party** | [**\SellingPartnerApi\Model\PartyIdentification**](PartyIdentification.md) | Name, address and tax details of the party receiving the payment of this invoice. | 
**ship_to_party** | [**\SellingPartnerApi\Model\PartyIdentification**](PartyIdentification.md) | Name, address and tax details of the party receiving a shipment of products. | [optional] 
**ship_from_party** | [**\SellingPartnerApi\Model\PartyIdentification**](PartyIdentification.md) | Name, address and tax details of the party sending a shipment of products. | [optional] 
**bill_to_party** | [**\SellingPartnerApi\Model\PartyIdentification**](PartyIdentification.md) | Name, address and tax details of the party to whom this invoice is issued. | [optional] 
**payment_terms** | [**\SellingPartnerApi\Model\PaymentTerms**](PaymentTerms.md) | The payment terms for the invoice. | [optional] 
**invoice_total** | [**\SellingPartnerApi\Model\Money**](Money.md) | Total monetary amount charged in the invoice or full value of credit note to be paid including all relevant taxes. It is the total amount of invoice (including charges, less allowances) before terms discount (if discount is applicable). | 
**tax_details** | [**\SellingPartnerApi\Model\TaxDetails[]**](TaxDetails.md) | Total tax amount details for all line items. | [optional] 
**additional_details** | [**\SellingPartnerApi\Model\AdditionalDetails[]**](AdditionalDetails.md) | Additional details provided by the selling party, for tax related or other purposes. | [optional] 
**charge_details** | [**\SellingPartnerApi\Model\ChargeDetails[]**](ChargeDetails.md) | Total charge amount details for all line items. | [optional] 
**allowance_details** | [**\SellingPartnerApi\Model\AllowanceDetails[]**](AllowanceDetails.md) | Total allowance amount details for all line items. | [optional] 
**items** | [**\SellingPartnerApi\Model\InvoiceItem[]**](InvoiceItem.md) | The list of invoice items. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


