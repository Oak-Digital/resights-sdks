# # LocalPlan

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **mixed** |  |
**oid** | **mixed** |  |
**plan_id** | **mixed** | Planens unikke identifikator. Genereres af Plandata.dk. | [optional]
**municipality_code** | **mixed** | Det trecifrede kommunenummer for den kommune som planen findes i. | [optional]
**municipality_name** | **mixed** |  | [optional]
**object_code** | [**\OpenAPI\Client\Model\ObjectcodeEnum**](ObjectcodeEnum.md) |  | [optional]
**plan_type** | [**\OpenAPI\Client\Model\PlantypeEnum**](PlantypeEnum.md) |  | [optional]
**plan_number** | **mixed** | Planens plannummer. Hvis der uploades til en plan, og det eksisterende plannr skal bevares, kan feltet udelades.¤ | [optional]
**plan_name** | **mixed** | Planens navn. Hvis der uploades til en plan, og det eksisterende plannavn skal bevares, kan feltet udelades.¤ | [optional]
**plan_status** | [**\OpenAPI\Client\Model\PlanStatusEnum**](PlanStatusEnum.md) |  | [optional]
**usage** | **mixed** | Kode for planens generelle anvendelse. | [optional]
**usage_general** | **mixed** |  | [optional]
**date_proposal** | **mixed** | Datoen hvor kommunalbestyrelsen vedtog forslagets udformning. | [optional]
**date_adopted** | **mixed** | Vedtagelsesdato for planen. | [optional]
**date_cancelled** | **mixed** | Dato for aflysning af planen. | [optional]
**date_in_force** | **mixed** | Dato for planens ikrafttrædelse. | [optional]
**date_start** | **mixed** | Startdatoen for gyldighedsperioden for den aktuelle version af planen. | [optional]
**date_end** | **mixed** | Slutdatoen for gyldighedsperioden for den aktuelle version af planen. | [optional]
**date_attributes** | **mixed** |  | [optional]
**date_geometry** | **mixed** |  | [optional]
**date_created** | **mixed** |  | [optional]
**date_updated** | **mixed** |  | [optional]
**link** | **mixed** | Link til plandokumentet. Kan ikke indberettes gennem upload | [optional]
**district** | **mixed** | Plandistirktets navn. | [optional]
**zone** | [**\OpenAPI\Client\Model\ResightsModelsEnumsPlandataZoneEnum**](ResightsModelsEnumsPlandataZoneEnum.md) |  | [optional]
**zone_status** | [**\OpenAPI\Client\Model\ZonestatusEnum**](ZonestatusEnum.md) |  | [optional]
**constructed_percentage_valid_for** | **mixed** | Arealenheden som Bebygpct beregnes ud fra. | [optional]
**min_environment_class_allowed** | **mixed** | Mindste tilladte miljøklasse (talværdi fra 1-7). | [optional]
**max_environment_class_allowed** | **mixed** | Højeste tilladte miljøklasse (talværdi fra 1-7). | [optional]
**conservation_description** | **mixed** | Kort valgfri beskrivelse af bevaringsbestemmelserne i planen. | [optional]
**construction_share** | **mixed** |  | [optional]
**min_land** | **mixed** |  | [optional]
**mega_watt** | **mixed** | Angivelse af hvor hvor stor effekt i MW det er planlagt for i en lokalplan der omhandler vindmøller. | [optional]
**contains_vvm** | **mixed** |  | [optional]
**supplementary_conditions** | **mixed** | Angivelse af &#39;særlige forhold&#39; i planen. Særlige forhold i Plandata.dk er beskrevet i vejledningen til indberetning af lokalplaner. | [optional]
**zone_status_regulated** | **mixed** | Markering af at zonestatus for planområdet ikke reguleres entydigt som enten &#39;byzone&#39; eller &#39;sommerhusområde&#39;. | [optional]
**usage_regulated** | **mixed** | Angiver om planen ikke regulerer anvendelse. Sættes per default til &#39;false&#39;. | [optional]
**scope_regulated** | **mixed** | Angiver om planen ikke regulerer omfang. Sættes per default til &#39;false&#39;. | [optional]
**parcel_size_regulated** | **mixed** |  | [optional]
**complex** | **mixed** | Angives hvis delområdet er så kompleks, at det ikke kan registreres i Plandata.dk. Sættes per default til &#39;false&#39;. | [optional]
**complex_description** | **mixed** | Beskrivelse af hvorfor delområdet er komplekst | [optional]
**wind_description** | **mixed** |  | [optional]
**state_plan** | **mixed** |  | [optional]
**signs_facade_regulated_1** | [**\OpenAPI\Client\Model\AbestemEnum**](AbestemEnum.md) |  | [optional]
**signs_facade_regulated_2** | [**\OpenAPI\Client\Model\AbestemEnum**](AbestemEnum.md) |  | [optional]
**signs_facade_regulated_3** | [**\OpenAPI\Client\Model\AbestemEnum**](AbestemEnum.md) |  | [optional]
**usage_specific_1** | **mixed** | Angivelse af specifik anvendelse. Der kan angives op til 10 specifikke anvendelser gennem uplaodmodulet. Disse angives hver især i felterne &#39;Anvspec1&#39;, &#39;Anvspec2&#39; ... &#39;Anvspec10&#39;. | [optional]
**usage_specific_2** | **mixed** |  | [optional]
**usage_specific_3** | **mixed** |  | [optional]
**usage_specific_4** | **mixed** |  | [optional]
**usage_specific_5** | **mixed** |  | [optional]
**usage_specific_6** | **mixed** |  | [optional]
**usage_specific_7** | **mixed** |  | [optional]
**usage_specific_8** | **mixed** |  | [optional]
**usage_specific_9** | **mixed** |  | [optional]
**usage_specific_10** | **mixed** |  | [optional]
**max_constructed_percentage_area** | **mixed** | Den højeste tilladte bebyggelsesprocent i planområdet. | [optional]
**max_constructed_percentage_area_1** | **mixed** | Bebyggelsesprocent tilknyttet en specifik anvendelse. | [optional]
**max_constructed_percentage_area_2** | **mixed** |  | [optional]
**max_constructed_percentage_area_3** | **mixed** |  | [optional]
**max_constructed_percentage_area_4** | **mixed** |  | [optional]
**max_constructed_percentage_area_5** | **mixed** |  | [optional]
**max_constructed_percentage_area_6** | **mixed** |  | [optional]
**max_constructed_percentage_area_7** | **mixed** |  | [optional]
**max_constructed_percentage_area_8** | **mixed** |  | [optional]
**max_constructed_percentage_area_9** | **mixed** |  | [optional]
**max_constructed_percentage_area_10** | **mixed** |  | [optional]
**max_constructed_share_calculated_from_1** | **mixed** | Arealenheden som Bebygpct beregnes ud fra tilknyttet en specifik anvendelse. | [optional]
**max_constructed_share_calculated_from_2** | **mixed** |  | [optional]
**max_constructed_share_calculated_from_3** | **mixed** |  | [optional]
**max_constructed_share_calculated_from_4** | **mixed** |  | [optional]
**max_constructed_share_calculated_from_5** | **mixed** |  | [optional]
**max_constructed_share_calculated_from_6** | **mixed** |  | [optional]
**max_constructed_share_calculated_from_7** | **mixed** |  | [optional]
**max_constructed_share_calculated_from_8** | **mixed** |  | [optional]
**max_constructed_share_calculated_from_9** | **mixed** |  | [optional]
**max_constructed_share_calculated_from_10** | **mixed** |  | [optional]
**max_share_land_construction** | **mixed** | Den højeste andel (%) af grundarealet som må bebygges. | [optional]
**max_share_land_construction_1** | **mixed** | Det største tilladte etageareal i området angivet i etagekvadratmetre tilknyttet en specifik anvendelse. | [optional]
**max_share_land_construction_2** | **mixed** |  | [optional]
**max_share_land_construction_3** | **mixed** |  | [optional]
**max_share_land_construction_4** | **mixed** |  | [optional]
**max_share_land_construction_5** | **mixed** |  | [optional]
**max_share_land_construction_6** | **mixed** |  | [optional]
**max_share_land_construction_7** | **mixed** |  | [optional]
**max_share_land_construction_8** | **mixed** |  | [optional]
**max_share_land_construction_9** | **mixed** |  | [optional]
**max_share_land_construction_10** | **mixed** |  | [optional]
**max_floors** | **mixed** | Det højeste tilladte antal etager. Udnyttet tagetage angives som en halv etage. | [optional]
**max_floors_1** | **mixed** | Det højeste tilladte antal etager. Udnyttet tagetage angives som en halv etage tilknyttet en specifik anvendelse. | [optional]
**max_floors_2** | **mixed** |  | [optional]
**max_floors_3** | **mixed** |  | [optional]
**max_floors_4** | **mixed** |  | [optional]
**max_floors_5** | **mixed** |  | [optional]
**max_floors_6** | **mixed** |  | [optional]
**max_floors_7** | **mixed** |  | [optional]
**max_floors_8** | **mixed** |  | [optional]
**max_floors_9** | **mixed** |  | [optional]
**max_floors_10** | **mixed** |  | [optional]
**max_floor_area** | **mixed** | Det største tilladte etageareal i området angivet i etagekvadratmetre. | [optional]
**max_floor_area_1** | **mixed** | Det største tilladte etageareal i området angivet i etagekvadratmeter tilknyttet en specifik anvendelse. | [optional]
**max_floor_area_2** | **mixed** |  | [optional]
**max_floor_area_3** | **mixed** |  | [optional]
**max_floor_area_4** | **mixed** |  | [optional]
**max_floor_area_5** | **mixed** |  | [optional]
**max_floor_area_6** | **mixed** |  | [optional]
**max_floor_area_7** | **mixed** |  | [optional]
**max_floor_area_8** | **mixed** |  | [optional]
**max_floor_area_9** | **mixed** |  | [optional]
**max_floor_area_10** | **mixed** |  | [optional]
**max_floor_area_valid_for** | **mixed** | Arealenheden som Eareal er gældende for. | [optional]
**max_floor_area_valid_for_1** | **mixed** | Arealenheden som Eareal er gældende for tilknyttet en specifik anvendelse. | [optional]
**max_floor_area_valid_for_2** | **mixed** |  | [optional]
**max_floor_area_valid_for_3** | **mixed** |  | [optional]
**max_floor_area_valid_for_4** | **mixed** |  | [optional]
**max_floor_area_valid_for_5** | **mixed** |  | [optional]
**max_floor_area_valid_for_6** | **mixed** |  | [optional]
**max_floor_area_valid_for_7** | **mixed** |  | [optional]
**max_floor_area_valid_for_8** | **mixed** |  | [optional]
**max_floor_area_valid_for_9** | **mixed** |  | [optional]
**max_floor_area_valid_for_10** | **mixed** |  | [optional]
**max_sqm3_per_sqm2** | **mixed** | Det størst tilladte bygningsrumfang per arealenhed, angivet i m3 per m2. | [optional]
**max_sqm3_per_sqm2_1** | **mixed** | Det størst tilladte bygningsrumfang per arealenhed, angivet i m3 per m2 tilknyttet en specifik anvendelse. | [optional]
**max_sqm3_per_sqm2_2** | **mixed** |  | [optional]
**max_sqm3_per_sqm2_3** | **mixed** |  | [optional]
**max_sqm3_per_sqm2_4** | **mixed** |  | [optional]
**max_sqm3_per_sqm2_5** | **mixed** |  | [optional]
**max_sqm3_per_sqm2_6** | **mixed** |  | [optional]
**max_sqm3_per_sqm2_7** | **mixed** |  | [optional]
**max_sqm3_per_sqm2_8** | **mixed** |  | [optional]
**max_sqm3_per_sqm2_9** | **mixed** |  | [optional]
**max_sqm3_per_sqm2_10** | **mixed** |  | [optional]
**max_sqm3_per_sqm2_valid_for** | **mixed** | Arealenheden som m3_m2 er gældende for. | [optional]
**max_sqm3_per_sqm2_valid_for_1** | **mixed** | Arealenheden som m3_m2 er gældende for tilknyttet en specifik anvendelse. | [optional]
**max_sqm3_per_sqm2_valid_for_2** | **mixed** |  | [optional]
**max_sqm3_per_sqm2_valid_for_3** | **mixed** |  | [optional]
**max_sqm3_per_sqm2_valid_for_4** | **mixed** |  | [optional]
**max_sqm3_per_sqm2_valid_for_5** | **mixed** |  | [optional]
**max_sqm3_per_sqm2_valid_for_6** | **mixed** |  | [optional]
**max_sqm3_per_sqm2_valid_for_7** | **mixed** |  | [optional]
**max_sqm3_per_sqm2_valid_for_8** | **mixed** |  | [optional]
**max_sqm3_per_sqm2_valid_for_9** | **mixed** |  | [optional]
**max_sqm3_per_sqm2_valid_for_10** | **mixed** |  | [optional]
**max_building_height** | **mixed** | Den højeste tilladte bygningshøjde agivet i metre. | [optional]
**max_building_height_1** | **mixed** | Den højeste tilladte bygningshøjde agivet i meter tilknyttet en specifik anvendelse. | [optional]
**max_building_height_2** | **mixed** |  | [optional]
**max_building_height_3** | **mixed** |  | [optional]
**max_building_height_4** | **mixed** |  | [optional]
**max_building_height_5** | **mixed** |  | [optional]
**max_building_height_6** | **mixed** |  | [optional]
**max_building_height_7** | **mixed** |  | [optional]
**max_building_height_8** | **mixed** |  | [optional]
**max_building_height_9** | **mixed** |  | [optional]
**max_building_height_10** | **mixed** |  | [optional]
**min_parcel_size** | **mixed** | Den mindste tilladte grundstørrelse ved udstykning. | [optional]
**min_parcel_size_1** | **mixed** | Den mindste tilladte grundstørrelse ved udstykning tilknyttet en specifik anvendelse. | [optional]
**min_parcel_size_2** | **mixed** |  | [optional]
**min_parcel_size_3** | **mixed** |  | [optional]
**min_parcel_size_4** | **mixed** |  | [optional]
**min_parcel_size_5** | **mixed** |  | [optional]
**min_parcel_size_6** | **mixed** |  | [optional]
**min_parcel_size_7** | **mixed** |  | [optional]
**min_parcel_size_8** | **mixed** |  | [optional]
**min_parcel_size_9** | **mixed** |  | [optional]
**min_parcel_size_10** | **mixed** |  | [optional]
**parcel_subdivision_regulated** | **mixed** | Angivelse af om planen forbyder udstykning i planområdet. | [optional]
**parcel_subdivision_regulated_1** | **mixed** | Angivelse af om planen forbyder udstykning i planområdet tilknyttet en specifik anvendelse. | [optional]
**parcel_subdivision_regulated_2** | **mixed** |  | [optional]
**parcel_subdivision_regulated_3** | **mixed** |  | [optional]
**parcel_subdivision_regulated_4** | **mixed** |  | [optional]
**parcel_subdivision_regulated_5** | **mixed** |  | [optional]
**parcel_subdivision_regulated_6** | **mixed** |  | [optional]
**parcel_subdivision_regulated_7** | **mixed** |  | [optional]
**parcel_subdivision_regulated_8** | **mixed** |  | [optional]
**parcel_subdivision_regulated_9** | **mixed** |  | [optional]
**parcel_subdivision_regulated_10** | **mixed** |  | [optional]
**geom** | **mixed** | Objektets geografiske placering. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
