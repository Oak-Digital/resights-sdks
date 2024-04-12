# # BBRFloorResponse

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
**eta006_floor_name_building** | **mixed** | Her angives etagebetegnelsen  som anvendes i bygningen.   Bemærkning: Dette er ikke identisk med etagebegrebet i Grunddataregister (DAR) | [optional]
**eta020_area_total_floor** | **mixed** | Det samlede areal af den pågældende etage.  Angives i kvadratmeter. | [optional]
**eta021_area_utilized_attic** | **mixed** | Arealet af den del af tagetagen, der bliver udnyttet til beboelse eller erhverv.  Angives i kvadratmeter. | [optional]
**eta022_area_basement** | **mixed** | Her angives areal på kælder, hvis loft ligger mindre end 1.25 m over terræn. | [optional]
**eta023_area_legal_residential_basement** | **mixed** | Arealet af den del af kælderen der er indrettet til lovlig beboelse i henhold til byggelovgivningen.  Angives i kvadratmeter. | [optional]
**eta024_area_access** | **mixed** | Etagens samlede adgangsareal.  Angives i kvadratmeter. | [optional]
**eta025_floor_type** | **mixed** | Her angives om etagen er en tagetage. | [optional]
**eta026_basement_commercial** | **mixed** | Her angives det samlede areal af erhverv i kælder.  Angives i kvadratmeter. | [optional]
**eta500_note** | **mixed** |  | [optional]
**building_id** | **mixed** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
