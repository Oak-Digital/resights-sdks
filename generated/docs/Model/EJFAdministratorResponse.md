# # EJFAdministratorResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **mixed** | Persistent unik nøgle. |
**namespace** | **mixed** |  |
**status** | [**\OpenAPI\Client\Model\EJFStatusEnum**](EJFStatusEnum.md) |  | [optional]
**business_process** | [**\OpenAPI\Client\Model\EJFBusinessProcessEnum**](EJFBusinessProcessEnum.md) |  | [optional]
**business_area** | [**\OpenAPI\Client\Model\EJFBusinessAreaEnum**](EJFBusinessAreaEnum.md) |  | [optional]
**business_event** | [**\OpenAPI\Client\Model\EJFBusinessEventEnum**](EJFBusinessEventEnum.md) |  | [optional]
**registration_from** | **mixed** | Tidspunktet hvor registreringen er foretaget. |
**registration_to** | **mixed** | Tidspunktet hvor en ny registrering er foretaget på objektet, og hvor denne version således ikke længere er den seneste. | [optional]
**registration_actor** | **mixed** | Den aktør der har foretaget registreringen. |
**effect_from** | **mixed** | Tidspunktet hvorfra objektet har virkning. |
**effect_to** | **mixed** | Tidspunktet hvor objektets virkning ophører. | [optional]
**effect_actor** | **mixed** | Den aktør der har afstedkommet objektets virkning. |
**case_id** | **mixed** | Persistent unik nøgle for den Ejerskabshændelse behandling eller Person/Virksomhedshændelse behandling, som objektet senest er ændret ved. |
**person_id** | **mixed** | Anvendes når administrator er en person i CPR | [optional]
**company_cvr_number** | **mixed** | Anvendes når administrator er en virksomhed i CVR | [optional]
**p_unit_p_number** | **mixed** | Anvendes når administrator er en produktionsenhed i CVR | [optional]
**other_id** | **mixed** | Anvendes, når administrator ikke er i CPR eller CVR | [optional]
**bfe_number** | **mixed** |  |
**person** | [**\OpenAPI\Client\Model\EJFPerson**](EJFPerson.md) |  | [optional]
**company** | [**\OpenAPI\Client\Model\EJFCompany**](EJFCompany.md) |  | [optional]
**other** | [**\OpenAPI\Client\Model\EJFPersonCompanyInfo**](EJFPersonCompanyInfo.md) |  | [optional]
**p_unit** | [**\OpenAPI\Client\Model\EJFPUnit**](EJFPUnit.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
