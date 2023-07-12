# TransportationDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ship_mode** | **string** | The type of shipment. | [optional] 
**transportation_mode** | **string** | The mode of transportation for this shipment. | [optional] 
**shipped_date** | [**\DateTime**](\DateTime.md) | Date when shipment is performed by the Vendor to Buyer | [optional] 
**estimated_delivery_date** | [**\DateTime**](\DateTime.md) | Estimated Date on which shipment will be delivered from Vendor to Buyer | [optional] 
**shipment_delivery_date** | [**\DateTime**](\DateTime.md) | Date on which shipment will be delivered from Vendor to Buyer | [optional] 
**carrier_details** | [**\SellingPartnerApi\Model\CarrierDetails**](CarrierDetails.md) | Indicates the carrier details and their contact informations | [optional] 
**bill_of_lading_number** | **string** | Bill Of Lading (BOL) number is the unique number assigned by the vendor. The BOL present in the Shipment Confirmation message ideally matches the paper BOL provided with the shipment, but that is no must. Instead of BOL, an alternative reference number (like Delivery Note Number) for the shipment can also be sent in this field. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


