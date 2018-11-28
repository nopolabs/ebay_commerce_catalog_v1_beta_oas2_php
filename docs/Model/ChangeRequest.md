# ChangeRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**change_request_id** | **string** | The unique identifier of this change request. This value was originally generated by the createChangeRequest call and returned in the location code of that call&#39;s HTTP response header. | [optional] 
**change_request_status** | **string** | The current processing status of this change request. If the value of this field is APPROVED_WITH_MODIFICATIONS, the change request has been approved with one or more modifications applied by eBay. Check the processResolution.corrections response object for details about the modifications. If the value of this field is REJECTED, the change request has been rejected for violating eBay standards or for conflicting with an existing product record. Check the processResolution.violations response object for details about the rejection. Available values: APPROVED &amp;mdash; Upon review, the change request has been approved as submitted. APPROVED_WITH_MODIFICATIONS &amp;mdash; Upon review, the change request has been approved with one or more corrections applied by eBay. Check the processResolution.corrections response object for details about the modifications. REJECTED &amp;mdash; Upon review, the change request has been rejected for a conflict with an existing catalog product, or for violating eBay standards. Check the processResolution.violations response object for details about the rejection. SUBMITTED &amp;mdash; The change request has been submitted and is being processed. UNDER_EXTENDED_REVIEW &amp;mdash; After one hour of review, the change request is under extended review by eBay. UNDER_REVIEW &amp;mdash; Upon submission/processing, the change request is under review by eBay. This typically takes up to one hour. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/catalog/types/ChangeRequestStatus.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**change_request_type** | **string** | The type of catalog modification being requested by this change request. Available values: PRODUCT_CREATION &amp;mdash; Change request to create a new product PRODUCT_UPDATE &amp;mdash; Change request to update an existing product For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/catalog/types/ChangeRequestType.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**creation_date** | **string** | The creation date of this change request. | [optional] 
**expected_completion_date** | **string** | eBay&#39;s estimate of the completion date of this change request. | [optional] 
**process_resolution** | [**\Nopolabs\EBay\Commerce\Catalog\Model\ProcessResolution**](ProcessResolution.md) |  | [optional] 
**process_status_message** | **string** | A text description and explanation of the status indicated by the changeRequestStatus field. | [optional] 
**reason_for_change_request** | **string** | A text description of why this change request was submitted. | [optional] 
**reference_id** | **string** | Returned if the referenceType field is returned in the response. This is the identifier of an object of the type specified by the value of referenceType. For example, if the value of referenceType is INVENTORY_ITEM, this field should contain the seller&#39;s SKU for an inventory item. | [optional] 
**reference_type** | **string** | Returned if this field was included in the the createChangeRequest call. This specifies the type of eBay object that the seller wants to create or update using the requested change. It applies to objects that are incomplete due to the need for a matching catalog product. Providing a referenceType and a referenceId in a catalog change request enables eBay to automatically apply the resulting new or updated product directly to the specified object without requiring additional action on your part. Available values: INVENTORY_ITEM &amp;mdash; The requested change will support the completion of an inventory item, which you can then use to create an offer. LISTING &amp;mdash; The requested change will support the modification of an active product listing. LISTING_DRAFT &amp;mdash; The requested change will support the completion of an offer, which you can then publish as a product listing. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/catalog/types/ReferenceType.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**resolution_date** | **string** | Returned if the value of changeRequestStatus is APPROVED, APPROVED_WITH_MODIFICATIONS, or REJECTED. This is the date that the change request was resolved. | [optional] 
**suggested_product** | [**\Nopolabs\EBay\Commerce\Catalog\Model\SuggestedProduct**](SuggestedProduct.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

