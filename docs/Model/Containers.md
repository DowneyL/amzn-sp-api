# Containers

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**container_type** | **string** | The type of container. | 
**container_sequence_number** | **string** | An integer that must be submitted for multi-box shipments only, where one item may come in separate packages. | [optional] 
**container_identifiers** | [**\SellingPartnerApi\Model\ContainerIdentification[]**](ContainerIdentification.md) | A list of carton identifiers. | 
**tracking_number** | **string** | The tracking number used for identifying the shipment. | [optional] 
**dimensions** | [**\SellingPartnerApi\Model\Dimensions**](Dimensions.md) |  | [optional] 
**weight** | [**\SellingPartnerApi\Model\Weight**](Weight.md) |  | [optional] 
**tier** | **int** | Number of layers per pallet. | [optional] 
**block** | **int** | Number of cartons per layer on the pallet. | [optional] 
**inner_containers_details** | [**\SellingPartnerApi\Model\InnerContainersDetails**](InnerContainersDetails.md) |  | [optional] 
**packed_items** | [**\SellingPartnerApi\Model\PackedItems[]**](PackedItems.md) | A list of packed items. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


