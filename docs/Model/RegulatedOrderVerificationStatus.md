# RegulatedOrderVerificationStatus

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | [**\SellingPartnerApi\Model\VerificationStatus**](VerificationStatus.md) | The verification status of the order. | 
**requires_merchant_action** | **bool** | When true, the regulated information provided in the order requires a review by the merchant. | 
**valid_rejection_reasons** | [**\SellingPartnerApi\Model\RejectionReason[]**](RejectionReason.md) | A list of valid rejection reasons that may be used to reject the order&#39;s regulated information. | 
**rejection_reason** | [**\SellingPartnerApi\Model\RejectionReason**](RejectionReason.md) | The reason for rejecting the order&#39;s regulated information. Not present if the order isn&#39;t rejected. | [optional] 
**review_date** | **string** | The date the order was reviewed. In ISO 8601 date time format. | [optional] 
**external_reviewer_id** | **string** | The identifier for the order&#39;s regulated information reviewer. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


