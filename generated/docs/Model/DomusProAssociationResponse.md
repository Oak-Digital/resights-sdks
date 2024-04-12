# # DomusProAssociationResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**association_id** | **mixed** | Unique identifier |
**external_id** | **mixed** | External id of the association. This ID will be dependant on who is calling the webservice | [optional]
**cvr_number** | **mixed** | CVR number | [optional]
**see_other_identifier** | **mixed** | If the association record is superceded by another record, this field contains the reference to the new identifier | [optional]
**name** | **mixed** | Name of the association |
**search_name** | **mixed** |  |
**website** | **mixed** | Link to website of the association | [optional]
**notes** | **mixed** | Notes regarding this association | [optional]
**warnings** | **mixed** | Warnings about the association | [optional]
**deleted** | **mixed** | Indicates if this association is deleted. | [optional]
**zip** | **mixed** | Zip code, if association spans across several zip codes, this will contain the lowest one. |
**city** | **mixed** | City. The city of the zip. If the association spans several zip codes, this will be the name of the city with thelowest zip. |
**construction_year** | **mixed** | Year of construction | [optional]
**construction_year_not_verified** | **mixed** | Indicates whether the construction year is verified or not |
**established_year** | **mixed** | The year the association is established | [optional]
**established_year_not_verified** | **mixed** | Indicates whether the establishment year is verified or not |
**accountant_type_id** | **mixed** | Identifier of the accountant type. Even though the labels for accountant type might change, the ID should be constant. | [optional]
**accountant_type_name** | **mixed** | Name of the accountant type | [optional]
**administrator_type_id** | **mixed** | Identifier of the administrator type. Even though the labels for administrator type might change, the ID should be constant. | [optional]
**administrator_type_name** | **mixed** | Name of the administrator type | [optional]
**degree_published** | **mixed** | Publication degree. Determines the validity of the data. Higher is better. |
**latest_update** | **mixed** | Time of the latest update |
**accountant** | [**\OpenAPI\Client\Model\DomusProAccountantModel**](DomusProAccountantModel.md) |  | [optional]
**administrator** | [**\OpenAPI\Client\Model\DomusProAdministratorModel**](DomusProAdministratorModel.md) |  | [optional]
**fiscal_year** | [**\OpenAPI\Client\Model\DomusProFiscalYearModel**](DomusProFiscalYearModel.md) |  |
**fiscal_year_end_date** | **mixed** | End date of the fiscalYear. | [optional]
**annual_reports** | **mixed** | Array of annual reports registered for the association |
**documents** | **mixed** |  |
**budgets** | **mixed** | Array of budgets registered for the association |
**renovation_plans** | **mixed** | Array of renovation plans for the association |
**properties** | **mixed** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
