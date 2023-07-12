# Carton

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**carton_identifiers** | [**\SellingPartnerApi\Model\ContainerIdentification[]**](ContainerIdentification.md) | A list of carton identifiers. | [optional] 
**carton_sequence_number** | **string** | Carton sequence number for the carton. The first carton will be 001, the second 002, and so on. This number is used as a reference to refer to this carton from the pallet level. | 
**dimensions** | [**\SellingPartnerApi\Model\Dimensions**](Dimensions.md) |  | [optional] 
**weight** | [**\SellingPartnerApi\Model\Weight**](Weight.md) |  | [optional] 
**tracking_number** | **string** | This is required to be provided for every carton in the small parcel shipments. | [optional] 
**items** | [**\SellingPartnerApi\Model\ContainerItem[]**](ContainerItem.md) | A list of container item details. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


