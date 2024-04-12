# # GISGeoBuilding

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **mixed** | Identifikation af objektet |
**bbr_id** | **mixed** | Attribut afledt af relationen imellem GeoDanmark element og Bygværkselement i Bygninger og boliger. NOTE Den afledte attribut er medtaget for at angive hvorledes relationen i den logiske model skal omsættes til en attribut i det fysiske skema. | [optional]
**temporary_id** | **mixed** | Midlertidig nøgle til kobling af GeoDanmarkobjekter med eksterne databaser | [optional]
**namespace** | **mixed** | Identifikation af et namespace inden for hvilket lokalId er unik |
**status** | **mixed** | Angivelse af hvor et GeoDanmarkobjekt er i sin livscyklus. |
**status_geometry** | **mixed** | Angivelse af status for registrering af geometri. |
**registration_specification** | **mixed** | Navnet på den specifikation objektet er registreret under eller er opgraderet til. |
**data_responsible** | **mixed** | Navnet på den myndighed, der har dataansvaret for objektet. |
**business_event** | **mixed** | Den forretningshændelse, som afstedkom opdateringen. |
**business_area** | **mixed** | FORM-kode for det offentlige forretningsområde som har opdateret dataobjektet. |
**business_process** | **mixed** | Den forretningsproces som har opdateret dataobjektet. | [optional]
**registration_actor** | **mixed** | Den aktør der sidst har registreret noget på objektet, så objektet fik ny identitet. |
**registration_from** | **mixed** | Dato og tid for databasesystemets tildeling af en ny ident til objektet og for alle efterfølgende ændringer af enhver art på objektet. |
**registration_to** | **mixed** | Tidspunktet for objektets &#39;ændring&#39; eller &#39;sletning&#39; i databasen. Ved &#39;ændring&#39; forstås ændring af enhver art, hvor den hidtidige version af objektet gøres historisk og en ny version, bliver den aktuelle. | [optional]
**effect_actor** | **mixed** | Den aktør der sidst har udført ændringer af enhver art på objektet. |
**effect_from** | **mixed** | Tidspunktet hvorfra objektet har virkning. For fotogrammetri: fotodatoen. Ellers kan datoen dateres til fortiden, nutiden eller fremtiden. |
**effect_to** | **mixed** | Tidspunktet for objektets &#39;ændring&#39; eller &#39;sletning&#39; i databasen. Ved &#39;ændring&#39; forstås ændring af enhver art, hvor den hidtidige version af objektet gøres historisk og en ny version, bliver den aktuelle. | [optional]
**plan_accuracy** | **mixed** | Den forventede middelfejl på nøjagtigheden af den registrerede XY-koordinat i forhold til dets placering i virkeligheden. &#39;Ukendt nøjagtighed&#39; angives med en nøjagtighed på &#39;10.00&#39; |
**plan_placement_method** | **mixed** | Metode til stedfæstelse af objektets koordinater i XY |
**vertical_accuracy** | **mixed** | Den forventede middelfejl på nøjagtigheden af den registrerede Z-koordinat i forhold til dets placering i virkeligheden. &#39;Ukendt nøjagtighed&#39; angives med en nøjagtighed på &#39;10.00&#39; |
**vertical_plan_placement_method** | **mixed** | Metode til stedfæstelse af objektets Z-.koordinater. |
**application** | **mixed** | Et frit tekstfelt, der angiver den applikation og version, der har indleveret data til databasen |
**comment** | **mixed** | Et frit tekstfelt, der kan indeholde en valgfri kommentar/beskrivelse af objektets forhold. | [optional]
**building_type** | **mixed** | Angiver type af bygning med én af de anførte værdier. |
**measurement_place** | **mixed** | Angiver den metode, objektet er stedfæstet med. |
**method_3d** | **mixed** | Angiver efter hvilken metode herunder specifikation z-koordinaten er registreret. |
**below_minimum_building** | **mixed** | Angivelse af om arealet er mindre end den minimumstørrelse på en Bygning, som er defineret i GeoDanmark-Specifikationen. |
**bbr_action** | **mixed** | Dette er en hjælpeattribut i forbindelse med geokodning. | [optional]
**visible** | **mixed** | Angiver, om en BYGNING er synlig i et ortofoto. |
**overlap** | **mixed** | Angiver, om en BYGNING overlappes helt eller delvist af en anden BYGNING. |
**geom** | **mixed** | Objektets geografiske placering. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
