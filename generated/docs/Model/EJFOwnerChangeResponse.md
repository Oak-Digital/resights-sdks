# # EJFOwnerChangeResponse

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
**acquisition_date** | **mixed** | Dato for købers overtagelse af den købte andel af ejendommen |
**acquisition_method** | [**\OpenAPI\Client\Model\AcquisitionMethodEnum**](AcquisitionMethodEnum.md) |  |
**claim_identifier** | **mixed** | Unik identifikation af en tinglysningsanmeldelse. | [optional]
**claim_date** | **mixed** | Dato for anmeldelse til tinglysning | [optional]
**conditional** | **mixed** | Angivelse af, om Ejerskiftet er betinget | [optional]
**deadline** | **mixed** | Dato for frist oplyst i tinglysningsmeddelelser, som er afsendt som følge af en tinglysning med frist. | [optional]
**annexes** | **mixed** |  |
**ownership_changes** | **mixed** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
