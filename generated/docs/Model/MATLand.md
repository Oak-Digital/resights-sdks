# # MATLand

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **mixed** | Persistent unik nøgle. |
**namespace** | **mixed** |  |
**status** | [**\OpenAPI\Client\Model\MATStatusEnum**](MATStatusEnum.md) |  |
**business_process** | **mixed** | Den manuelle eller IT-understøttede proces hvori forretningsområdet håndterer hændelsen. |
**business_area** | **mixed** | Den del af den offentlige forretning der håndterer hændelsen og derved udvirker ændringen i data. |
**business_event** | **mixed** | Den primære begivenhed i virkeligheden som udløste ændringen i data. |
**latest_case_id** | **mixed** | Unik identifikation af den sag som sidst har foretaget opdatering af det pågældende matrikulære element. |
**intended_action** | **mixed** | Den påtænkte handling for objekter med status &#39;Under udarbejdelse&#39; og &#39;Foreløbig&#39; | [optional]
**registration_from** | **mixed** | Tidspunktet hvor registreringen er foretaget. |
**registration_to** | **mixed** | Tidspunktet hvor en ny registrering er foretaget på objektet, og hvor denne version således ikke længere er den seneste. | [optional]
**registration_actor** | **mixed** | Den aktør der har foretaget registreringen. |
**effect_from** | **mixed** | Tidspunktet hvorfra objektet har virkning. |
**effect_to** | **mixed** | Tidspunktet hvor objektets virkning ophører. | [optional]
**effect_actor** | **mixed** | Den aktør der har afstedkommet objektets virkning. |
**daf_updated_at** | **mixed** | Datafordeler opdateringstid | [optional]
**sfe_number** | **mixed** | Samlet fast ejendom - BFE-nr. |
**area_calculation_method** | **mixed** | Angivelse af beregningsmetoden for arealet på det pågældende jordstykke. |
**area_definition** | **mixed** | Tekstlig beskrivelse af arealets art eller type. | [optional]
**area_type** | **mixed** | Den registrerede type for arealet. | [optional]
**area_use_right** | **mixed** | Et areal, der er stiftet en brugsret over for højest 30 år, såfremt arealet udgør en del af en samlet fast ejendom, eller for højest 10 år, såfremt arealet udgør en del af en umatrikuleret ejendom. | [optional]
**part_number** | **mixed** | Midlertidigt nummer tildelt jordstykket inden det får tildelt det endelige matrikelnummer. | [optional]
**land_lot_code** | **mixed** | Den unikke identifikation af det specifikke ejerlav. |
**cadastre_number** | **mixed** | Entydig identifikation af et jordstykke inden for et ejerlav. |
**is_common_lot** | **mixed** | Angiver om jordstykket er et fælleslod og dermed indgår i flere faste ejendomme. |
**municipality_code** | **mixed** | Unik identifikation for den specifikke kommune. |
**region_code** | **mixed** | Unik identifikation tildelt en specifik region. |
**registered_area** | **mixed** | Jordstykkets registrerede areal i Matriklen. |
**boundary_business_case_id** | **mixed** | Identifikation af den seneste skelforretningssag som er gennemført på jordstykket. | [optional]
**parish_code** | **mixed** | Kode for det sogn som jordstykket hører under. |
**originates_from_land_id** | **mixed** | Angiver det jordstykke, som det pågældende jordstykke oprinder fra. | [optional]
**supplementary_measurement_case_id** | **mixed** | Identifikation af seneste sag som indeholder supplerende måloplysninger. | [optional]
**water_area_inclusion** | **mixed** | Angivelse af om et eventuelt vandareal indenfor jordstykket indgår i det registrerede areal for jordstykket. |
**street_area** | **mixed** | Det i matriklen registrerede areal for en ikke udskilt vej på Jordstykket. |
**street_area_calculation_status** | **mixed** | Angiver hvorvidt et eventuelt vejareal på jordstykket er beregnet. |
**forest_reserve_area** | **mixed** | Registrering af om der er fredskovspligt, på et jordstykke der er skov. | [optional]
**forest_reserve_scope** | **mixed** | Registrering af om der er fredskovspligt, på et jordstykke der er skov. | [optional]
**land_rent_scope** | **mixed** | Registrering af om der på jordstykket hviler jordrenteforpligtigelse i henhold til Bekendtgørelse om statshusmandsbrug m.m. og jordrente. | [optional]
**preservation_dunes_area** | **mixed** | Registrering af, om der på jordstykket er klitfredning jf. naturbeskyttelsesloven. | [optional]
**preservation_dunes_scope** | **mixed** | Registrering af, om der på jordstykket er klitfredning jf. naturbeskyttelsesloven. | [optional]
**forest_majorat_number** | **mixed** | Registrering af, om den fredskov som er registreret på jordstykket er noteret som majoratsskov i henhold til Skovloven. | [optional]
**forest_majorat_scope** | **mixed** | Registrering af, om den fredskov som er registreret på jordstykket er noteret som majoratsskov i henhold til Skovloven. | [optional]
**beach_protection_area** | **mixed** | Registrering af, om der på jordstykket er strandbeskyttelse jf. naturbeskyttelsesloven. | [optional]
**beach_protection_scope** | **mixed** | Registrering af, om der på jordstykket er strandbeskyttelse jf. naturbeskyttelsesloven. | [optional]
**land_lot_name** | **mixed** | Angiver det ejerlav som et jordstykke ligger indenfor. |
**centroid** | **mixed** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
