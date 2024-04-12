# # DomusProDocumentModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**document_type_id** | **mixed** | The name of the types might change over time, but this ID will be constant. |
**document_type_name** | **mixed** | The documenttype as a string |
**file_name** | **mixed** | Filename of the actual file |
**file_token** | **mixed** | Filetoken used for later fileretrieval. The token is used in the fetchFile method of the documentService to fetch the actual binary data. The token is valid for one hour. It is valid only for one retrieval of the document and is then invalidated |
**original_file_name** | **mixed** | The filename the file had originally when sent to domuspro. This filename might contain invalid characters, or have cryptic names. |
**draft** | **mixed** | If this is a draft, this is set to TRUE. |
**signed** | **mixed** | Indicates whether this document is signed or not. Will be TRUE or FALSE. If not set (NULL), then the status is unknown or not relevant |
**held_date** | **mixed** | If this documents is a meeting minute, this field will contain the date of the meeting | [optional]
**signed_date** | **mixed** | If signed, this will will contain the date it was signed. | [optional]
**budget_start_date** | **mixed** | Første dato i regnskabsåret for budgettet, bruges ifm. dokumenttypen &#39;Budget, separat&#39; | [optional]
**public_allowed** | **mixed** | Angiver om oplysninger fra denne fil må bruges på offentlige portaler. |
**subrogation** | **mixed** | Indtrædelsesret, benyttes kun ifm. dokumenter af typen &#39;Vedtægter&#39; | [optional]
**loan_limitation** | **mixed** | Lånebegrænsning, benyttes kun ifm. dokumenter af typen &#39;Vedtægter&#39; | [optional]
**is_association_creation** | **mixed** | Hvis dette dokument er et regnskab, angiver dette felt om foreningen i dette regnskab er under stiftelse. Kan antage sand, fald eller null. For dokumenter der ikke er regnskaber, vil værdien være null, ligeseom den vil være det på ældre regnskaber. | [optional]
**notes** | **mixed** |  | [optional]
**description** | **mixed** | Udvidet beskrivelse såfremt dokumenttypen er &#39;Andet&#39; | [optional]
**important_date** | **mixed** | Feltet angiver en vigtig dato ifm. dokumenter af typen &#39;Andet&#39; | [optional]
**deleted** | **mixed** | If this is set, then the document is deleted and can no logner be retrieved, and should also be deleted in the comsuming end of the webservice. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
