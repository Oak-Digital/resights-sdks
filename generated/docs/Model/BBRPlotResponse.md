# # BBRPlotResponse

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
**gru009_water_supply** | **mixed** | Forhold omkring vandforsyning for grunden. | [optional]
**gru010_drainage** | **mixed** | Forhold omkring afløb for grunden. | [optional]
**gru021_discharge_permit** | **mixed** | Udledningstilladelse for grund. For grunde udenfor kloakopland jf. spildevandsplanen (afløbskoder 101 - 601) angives status for deres udledningstilladelse. | [optional]
**gru022_wastewater_supply_membership** | **mixed** | For grunde udenfor kloakopland jf. spildevandsplanen (afløbskoder 101-601) angives om der indgået kontraktligt medlemskab med et spildevandsforsyningsselskab. | [optional]
**gru023_wastewater_drainage_order** | **mixed** | Her angives påbud vedr. spildevandsafledning.  For grunde/bygninger udenfor kloakopland jf. spildevandsplanen (afløbskoder 101-601) angives om kommunen har givet påbud om at etablere forbedret rensning, så regionplanens og vandplanens renseklasser overholdes eller om kommunen har givet påbud om tilslutning til spildevandsforsyningsselskab (koderne 0-6).  For grunde/bygninger indenfor kloakopland (afløbskoder 1-9) angives om kommunen har givet påbud om, at grunden/bygningen skal tilsluttes separatkloakering (kode7).   For grunde/bygninger angives om kommunen har givet påbud påbud vedr. korrektion af fejltilslutninger (kode 8)  eller om kommunen har givet andre påbud iht. Miljøbeskyttelseslovens  paragraf 30, stk. 1 (kode 9).  I de tilfælde hvor der benyttes koderne 2-9 skal der ændres til kode 1,  når påbuddet er opfyldt. | [optional]
**gru024_wastewater_drainage_deadline** | **mixed** | Dato for frist vedr. spildevandsafledning. For grunde/bygninger hvor der ifølge feltet ”Påbud vedr. spildevandsafledning” er givet et påbud, angives det hvornår fristen opfyldelse af påbuddet udløber.   Angives i formatet ååååmmdd. | [optional]
**gru025_permission_to_exit** | **mixed** | For grunde indenfor kloakopland jf. spildevandsplanen (afløbskoder 1-9) angives status for tilladelse til hel eller delvis udtræden af \&quot;det offentlige kloakfællesskab\&quot; (Spildevandsforsyning) jf. Spildevandsbekendtgørrelsen §11, stk 1. | [optional]
**gru026_permission_to_exit_date** | **mixed** | For grunde, hvor der ifølge feltet ”Tilladelse til udtræden” er meddelt tilladelse eller tilladelse er bortfaldet, skal det angives fra hvilken dato tilladelsen er gældende, hhv. fra hvilken dato tilladelsen er bortfaldet.  Angives i formatet ååååmmdd. | [optional]
**gru027_permission_to_alternative_disposal_diversion** | **mixed** | For grunde indenfor kloakopland jf. spildevandsplanen (afløbskoder 1-9) angives status for tilladelse til alternativ bortskaffelse eller afledning jf. Spildevandsbekendtgørelsens § 11, stk. 2. | [optional]
**gru028_permission_to_alternative_disposal_diversion_date** | **mixed** | For grunde hvor der ifølge feltet ”Tilladelse til alt. bortskaffelse eller afledning” er meddelt tilladelse eller tilladelse er bortfaldet, skal det angives fra hvilken dato tilladelsen er gældende, hhv. fra hvilken dato tilladelsen er bortfaldet.   Angives i formatet ååååmmdd. | [optional]
**gru029_exemption_collective_heating_supply** | **mixed** | For ubebyggede grunde, hvor der ifølge feltet ”Dato for dispensation/fritagelse” er oplyst en dato, angives det om den er tidsbegrænset. | [optional]
**gru030_exemption_collective_heating_supply_date** | **mixed** | For ubebyggede grunde, hvor der ifølge feltet ”Dispensation/fritagelse” er udstedt dispensation eller fritagelse, angives dato for dispensation eller fritagelsen.  Angives i formatet ååååmmdd. | [optional]
**gru500_note** | **mixed** | Notatlinjer indeholder tekstuel information om et givet BBR objekt, som ikke naturligt omfattes af eksisterende attributter på BBR objektet. Det kan for eksempel være særlige forhold om adgang til eller anvendelsen af BBR objektet. Der kan, som navnet angiver, angives flere notatlinjer. | [optional]
**access_address** | [**\OpenAPI\Client\Model\DARAccessAddress**](DARAccessAddress.md) |  | [optional]
**property_relation_id** | **mixed** |  |
**land_ids** | **mixed** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
