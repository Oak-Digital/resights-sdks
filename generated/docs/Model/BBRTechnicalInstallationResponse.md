# # BBRTechnicalInstallationResponse

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
**tek007_facility_number** | **mixed** | Løbenummer under vurderingsejendommen (vurderingsejendomsnummeret vedligeholdes af SKAT).  Værdierne 1-9999 er tilladte. | [optional]
**tek020_classification** | **mixed** | Beskriver det tekniske anlægs anvendelse. | [optional]
**tek021_production_type** | **mixed** | Angiver fabrikattype af det tekniske anlæg. | [optional]
**tek022_external_database** | **mixed** | Reference til ekstern database. | [optional]
**tek023_external_key** | **mixed** | Unik teknisk nøgle til det tekniske anlæg. | [optional]
**tek024_year_of_establishment** | **mixed** | Årstallet hvor det tekniske anlæg er færdigt etableret.   Angives i formatet åååå. | [optional]
**tek025_year_of_renovation** | **mixed** | Årstallet for seneste til-/ombygning.   Angives i formatet åååå. | [optional]
**tek026_oiltank_size** | **mixed** | Olietankens størrelsesklasse. Kun gældende for olietanke. | [optional]
**tek027_location** | **mixed** | Placering af tank, silo, gas- og affaldsbeholder. | [optional]
**tek028_oiltank_removal** | **mixed** | Forhold for sløjfning af tank og slanger til jordvarme. | [optional]
**tek030_production_number** | **mixed** | Fabrikationsnummeret på tank. | [optional]
**tek031_approval_number_type** | **mixed** | Typegodkendelsesnummeret angives på en af to måder:  ENTEN: På formen xx xxx PUFO godkendelsesnummer før 1. januar 2000 (nb. Ikke krav om PUFO godkendelse af overjordiske tanke før 1. januar 2000). ELLER: På formen xx xxxx PUFO godkendelsesnummer efter 1. januar 2000. | [optional]
**tek032_size** | **mixed** | Tankens størrelse.  Angives i liter. | [optional]
**tek033_type** | **mixed** | Beskriver olietankens konstruktion, ift. bekyttelse imod korrosion. | [optional]
**tek034_oiltank_content** | **mixed** | Beskriver indhold af tank/olietank. | [optional]
**tek035_oiltank_removal_deadline** | **mixed** | Frist for sløfning af tank.  Angives i ååååmmdd | [optional]
**tek036_volume** | **mixed** | Rumfang af teknisk anlæg.   Angives i kubikmeter. | [optional]
**tek037_area** | **mixed** | Bebygget areal af teknisk anlæg.   Angives i kvadratmeter. | [optional]
**tek038_height** | **mixed** | Højde af det tekniske anlæg. For vindmøller angives højden til vindmøllens vingespids.  Angives i meter. | [optional]
**tek039_effect** | **mixed** | Effekt for et energiproducerende teknisk anlæg.   Angives i kilowatt. | [optional]
**tek040_preservation** | **mixed** | Angiver eventuel type af fredning der gælder for det teknisk anlæg.Feltet ajourføres af Kulturstyrelsen. | [optional]
**tek042_revision_date** | **mixed** | Revisionsdato for seneste ændring af geometri.  Angives i ååååmmdd. | [optional]
**tek045_coordinate_system** | **mixed** | Det geografiske koordinatsystem geometrioplysninger er angivet i. | [optional]
**tek067_production_year** | **mixed** | Dette felt gælder for tanke. Årstal for tankens fabrikation angives. For tanke omfattet af olietankbekendtgørelsen  beregnes sløjfningsfristen ud fra tankens  fabrikationsår.  Angives i formatet åååå. | [optional]
**tek068_material** | **mixed** | Dette felt gælder for tanke. Materiale tanken er lavet af. | [optional]
**tek069_additional_internal_corrosion_protection** | **mixed** | Dette felt gælder for tanke. Angiver type af senest udførte supplerende indvendig korrosionsbeskyttelse (korrosionsbeskyttelse som tanken ikke er ”født med”) | [optional]
**tek070_additional_internal_corrosion_protection_latest_date** | **mixed** | Dato for den senest udførte indvendige korrosionsbeskyttelse.   Angives i formatet ååååmmdd. | [optional]
**tek072_removal_year** | **mixed** | Dette felt gælder for tanke. Feltet angiver årstal for sløjfning af tank.  Angives i formatet åååå. | [optional]
**tek073_hub_height** | **mixed** | Dette felt gælder for vindmøller. Vindmøllens højde målt til navet.  Angives i meter | [optional]
**tek074_windmill_number** | **mixed** | Vindmøllens unikke nummer i Energistyrelsens vindmølleregister (GSRN). | [optional]
**tek075_rotor_diameter** | **mixed** | Diameteren for rotoren på vindmøllen.   Angives i meter. | [optional]
**tek076_coordinates_source** | **mixed** | Kilden til koordinatsættets oplysninger. | [optional]
**tek077_coordinates_quality** | **mixed** | Kvalitetet af koordinatsæt. | [optional]
**tek078_coordinates_supplementary_information** | **mixed** | Her angives, om det fysiske objekt koordinatsættet referer til, ligger under eller over jorden. | [optional]
**tek101_validation_date** | **mixed** | Gyldighedsdato i forbindelse med vurdering. | [optional]
**tek102_windmill_brand** | **mixed** | Her angives fabrikatet eller typen på vindmøllen. | [optional]
**tek103_oil_fired_burner_brand** | **mixed** | Angiver fabrikatet eller typen på oliefyret. | [optional]
**tek104_solarsystem_brand** | **mixed** | Angiver fabrikatet eller typen på solcelleanlægget eller solvarmenanlægget. | [optional]
**tek105_tank_cover** | **mixed** | Her angives om tanken er helt, delvis eller ikke overdækket. | [optional]
**tek106_tank_inspection_date** | **mixed** | Angiver dato for seneste inspektion af tank. | [optional]
**tek107_placement_maritime_territory** | **mixed** | Angiver om objekt ligger på Søterritorie. | [optional]
**tek109_coordinate** | **mixed** | Det tekniske areals geografiske placering ved hjælp af et punkt. | [optional]
**tek110_operating_status** | **mixed** | Ukendt | [optional]
**tek111_inspection_latest_date** | **mixed** | Ukendt | [optional]
**tek112_inspection_company** | **mixed** | Ukendt | [optional]
**tek500_note** | **mixed** | Notatlinjer indeholder tekstuel information om et givet BBR objekt, som ikke naturligt omfattes af eksisterende attributter på BBR objektet. Det kan for eksempel være særlige forhold om adgang til eller anvendelsen af BBR objektet. Der kan, som navnet angiver, angives flere notatlinjer. | [optional]
**access_address** | [**\OpenAPI\Client\Model\DARAccessAddress**](DARAccessAddress.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
