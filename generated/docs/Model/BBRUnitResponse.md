# # BBRUnitResponse

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
**enh008_uuid_to_mother_apartment** | **mixed** | Angiver henvisning fra supplementsrum til moderlejlighed. | [optional]
**enh020_unit_usage** | **mixed** | Angiver kode for enhedens anvendelse. | [optional]
**enh023_property_type** | **mixed** | Angiver kode for boligtype. |
**enh024_unit_condemned** | **mixed** | Angiver kode for kondemneret boligenhed. | [optional]
**enh025_unit_identification_creation_date** | **mixed** | Angiver oprettelsesdato for enheden. | [optional]
**enh026_area_unit_total** | **mixed** | Angiver enhedens samlede areal. | [optional]
**enh027_area_residential** | **mixed** | Angiver enhedens areal til beboelse. | [optional]
**enh028_area_commercial** | **mixed** | Angiver enhedens areal til erhverv. | [optional]
**enh030_area_unit_source** | **mixed** | Angiver kode for kilde til oplysninger om areal. | [optional]
**enh031_number_rooms** | **mixed** | Angiver antal værelser i enheden. | [optional]
**enh032_facilities_toilet** | **mixed** | Angiver kode for enhedens toiletforhold. | [optional]
**enh033_facilities_shower** | **mixed** | Angiver kode for enhedens badeforhold. | [optional]
**enh034_facilities_kitchen** | **mixed** | Angiver kode for enhedens køkkenforhold. | [optional]
**enh035_energy_supply** | **mixed** | Angiver kode for enhedens energiforsyning. | [optional]
**enh039_area_other** | **mixed** | Angiver enhedens andet areal | [optional]
**enh041_lawful_usage** | **mixed** | Angiver eventuel dispensation til anvendelse af enheden | [optional]
**enh042_temporary_dispensation_date** | **mixed** | Angiver dato for tidsbegrænset dispensation. | [optional]
**enh044_partial_commissioning_permit_date** | **mixed** | Angiver dato for delvis ibrugtagningstilladelse. | [optional]
**enh045_rental_status** | **mixed** | Angiver enhedens udlejningsforhold | [optional]
**enh046_public_subsidy** | **mixed** | Angiver offentlig støtte. | [optional]
**enh047_occupancy_date** | **mixed** | Angiver dato for indflytning. | [optional]
**enh048_approved_empty_home** | **mixed** | Angiver om boligen er godkendt som tom bolig | [optional]
**enh051_heating_installation** | **mixed** | Angiver enhedens varmeinstallation. | [optional]
**enh052_heating_medium** | **mixed** | Angiver enhedens opvarmningsmiddel. | [optional]
**enh053_heating_supplementary** | **mixed** | Angiver enhedens supplerende varme. | [optional]
**enh060_area_unit_common_access_share** | **mixed** | Angiver enhedens andel i fælles adgangsareal. | [optional]
**enh061_area_open_cover** | **mixed** | Angiver enhedens areal af åben overdækning. | [optional]
**enh062_area_closed_cover_outhouse** | **mixed** | Angiver enhedens areal af lukket overdækning. | [optional]
**enh063_number_commercial_rooms** | **mixed** | Angiver antal værelser i enheden der anvendes til erhverv. | [optional]
**enh065_number_flushing_toilets** | **mixed** | Angiver antal vandskyllende toiletter. | [optional]
**enh066_number_bathrooms** | **mixed** | Angiver antal badeværeslser. | [optional]
**enh067_noise_insulation** | **mixed** | Angiver årstal for støjisolering. | [optional]
**enh068_flex_housing_permission** | **mixed** | Angivelse af om en tilladelse til flexbolig er personlig eller ej og om den er med eller uden tidsbegrænsning | [optional]
**enh069_flex_housing_termination_date** | **mixed** | &amp;#8203;Dato for ophør af en tidsbegrænset flexboligtilladelse | [optional]
**enh070_area_open_balcony_rooftop** | **mixed** | Samlet areal af åben altan og/eller åben tagterrasse, som lejligheden har eneadgang til | [optional]
**enh071_address_function** | **mixed** | Angiver adressens funktion i forhold til denne enhed , dvs. om den identificerer netop denne enhed i bygningen eller blot fungerer vejledende, fordi adressen egentlig er fastsat til en anden enhed i denne bygning eller i en anden bygning | [optional]
**enh101_validation_date** | **mixed** | Angvier gyldighedsdato for enheden | [optional]
**enh102_area_hereof1** | **mixed** | Oplysning som kan knyttes til en erhvervsenhed som har anvendelser. Anvendelseskoden for det pågældende areal fremgår af feltet enh105 | [optional]
**enh103_area_hereof2** | **mixed** | Oplysning som kan knyttes til en erhvervsenhed som har anvendelser. Anvendelseskoden for det pågældende areal fremgår af feltet enh106 | [optional]
**enh104_area_hereof3** | **mixed** | Oplysning som kan knyttes til en erhvervsenhed som har anvendelser. Anvendelseskoden for det pågældende areal fremgår af feltet enh107 | [optional]
**enh105_supplementary_application_code1** | **mixed** | Oplysning som kan knyttes til en erhvervsenhed som har anvendelser. Enhedens areal med den pågældende anvendelse fremgår af feltet enh102 | [optional]
**enh106_supplementary_application_code2** | **mixed** | Oplysning som kan knyttes til en erhvervsenhed som har anvendelser. Enhedens areal med den pågældende anvendelse fremgår af feltet enh103 | [optional]
**enh107_supplementary_application_code3** | **mixed** | Oplysning som kan knyttes til en erhvervsenhed som har anvendelser. Enhedens areal med den pågældende anvendelse fremgår af feltet enh104 | [optional]
**enh127_area_physical_residential** | **mixed** | Angiver enhedens fysiske areal til beboelse. | [optional]
**enh128_area_physical_commercial** | **mixed** | Angiver enhedens fysiske areal til erhverv. | [optional]
**enh500_note** | **mixed** | Beskrivende tekstnotat om særlige forhold for dette BBR-element | [optional]
**address** | [**\OpenAPI\Client\Model\DARAddress**](DARAddress.md) |  | [optional]
**building_id** | **mixed** |  |
**floor_id** | **mixed** |  |
**staircase_id** | **mixed** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
