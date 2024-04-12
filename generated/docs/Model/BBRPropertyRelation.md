# # BBRPropertyRelation

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
**ownership_code** | **mixed** | Ejerforholdskode for hovedejeren for den ejendom som denne ejendomsrelation refrerer til, baseret på Ejerfortegnelsens oplysninger om ejerskaber ejendommen | [optional]
**property_type** | **mixed** | Afledt attribut som angiver ejendomstypen, dvs. om ejendommen udgør en samlet fast ejendom (dvs. et matrikuleret areal), en bygning på fremmed grund eller en ejerlejlighed |
**valuation_property_number** | **mixed** | Angiver SKAT&#39;s vurderingsejendomsnummer som denne Ejendomsrelation indgår i | [optional]
**esr_number** | **mixed** | Kombination af kommunekode og ejendomsnummer | [optional]
**property_number** | **mixed** | Ejendomsnummer for den ESR-ejendom som denne ejendomsrelation indgår i | [optional]
**bfe_number** | **mixed** | Angiver den fælles ejendomsidentifikation for den bestemte faste ejendom som den tilhørende BBR-entitet udgør eller indgår i | [optional]
**sfe_number** | **mixed** | Her angives hvilken Samlet Fast Ejendom der er tilknyttet den konkrete Ejendomsrelation, der er tilknyttet et BBR Objekt. | [optional]
**bpfg_number** | **mixed** | Her angives hvilken BPFG der er tilknyttet den konkrete Ejendomsrelation, der er tilknyttet et BBR Objekt. | [optional]
**ejl_number** | **mixed** | Her angives hvilken Ejerlejlighed der er tilknyttet den konkrete Ejendomsrelation, der er tilknyttet et BBR Objekt. | [optional]
**condominium_number** | **mixed** | Angiver Matriklens ejerlejlighedsnummer når Ejendomsrelation er af typen ejerlejlighed | [optional]
**tinglyst_area** | **mixed** | Angiver ESR&#39;s oplysning om det samlede tinglyste areal af en ejerlejlighed som indgår i en enhed eller bygning | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
