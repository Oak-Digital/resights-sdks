# # BBRCaseLevelResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **mixed** | Persistent unik nøgle. |
**namespace** | **mixed** |  |
**status** | **mixed** | Angivelse af hvor et forvaltningsobjekt er i sin livscyklus. | [optional]
**business_process** | **mixed** | Den manuelle eller IT-understøttede proces hvori forretningsområdet håndterer hændelsen. | [optional]
**business_area** | **mixed** | Den del af den offentlige forretning der håndterer hændelsen og derved udvirker ændringen i data. | [optional]
**business_event** | **mixed** | Den begivenhed i virkeligheden som udløste ændringen i data. | [optional]
**registration_from** | **mixed** | Tidspunktet hvor registreringen er foretaget. |
**registration_to** | **mixed** | Tidspunktet hvor en ny registrering er foretaget på objektet, og hvor denne version således ikke længere er den seneste. | [optional]
**registration_actor** | **mixed** | Den aktør der har foretaget registreringen. |
**effect_from** | **mixed** | Tidspunktet hvorfra objektet har virkning. |
**effect_to** | **mixed** | Tidspunktet hvor objektets virkning ophører. | [optional]
**effect_actor** | **mixed** | Den aktør der har afstedkommet objektets virkning. |
**municipality_code** | **mixed** |  | [optional]
**level_type** | **mixed** | Angiver hvilket element byggesagen tilhører. 1 - Grund 2 - Bygning 3 - TekniskAnlaeg 4 - Etage 5 - Opgang 6 - Enhed |
**case_type** | **mixed** | Angiver typen af byggesagen. 0 - Sag på grund 1 - Nybyggeri 2 - Til/ombygning 31 - Nedrivning (delvis) 32 - Nedrivning (hel) | [optional]
**building_project_id** | **mixed** |  |
**plot_data_id** | **mixed** |  | [optional]
**plot_case_id** | **mixed** |  | [optional]
**building_data_id** | **mixed** |  | [optional]
**building_case_id** | **mixed** |  | [optional]
**unit_data_id** | **mixed** |  | [optional]
**unit_case_id** | **mixed** |  | [optional]
**floor_data_id** | **mixed** |  | [optional]
**floor_case_id** | **mixed** |  | [optional]
**staircase_data_id** | **mixed** |  | [optional]
**staircase_case_id** | **mixed** |  | [optional]
**technical_installation_data_id** | **mixed** |  | [optional]
**technical_installation_case_id** | **mixed** |  | [optional]
**case** | [**\OpenAPI\Client\Model\BBRCase**](BBRCase.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
