# # EJFOwnerPersonResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **mixed** | Persistent unik nøgle. |
**name** | **mixed** | Angiver personens fulde navn med statusangivelse. | [optional]
**first_name** | **mixed** |  | [optional]
**last_name** | **mixed** |  | [optional]
**full_name** | **mixed** | Angiver personens fulde navn. | [optional]
**addressing_name** | **mixed** | Angiver personens adresseringsnavn. | [optional]
**name_co** | **mixed** | C/O navn i adressen. Konstanten C/O samt en blank vil være indeholdt i de første 4 positioner. | [optional]
**gender** | **mixed** | Angiver personens køn. |
**status** | **mixed** | Angiver personens status. |
**status_date** | **mixed** | Hændelsesdato/tid for angivelse af status. Eksisterer kun i forbindelse med en inaktiv status. |
**status_date_uncertain** | **mixed** | Angiver at statusdato er usikker, hvilket vil sige at det ikke har været muligt at verificere datoens korrekthed. |
**birth_date** | **mixed** | Angiver personens fødselsdato. |
**birth_date_uncertain** | **mixed** | Angiver at fødselsdatoen er usikker, hvilket vil sige, at det ikke har været muligt af verificere datoens korrekthed. |
**municipality_code** | **mixed** | Kode for en kommune. | [optional]
**municipality_name** | **mixed** | Navn for en kommune. | [optional]
**standard_address** | **mixed** | Sammensat af: vejadresseringsnavn husnummer, etage, sidedoer bygningsnummer | [optional]
**building_number** | **mixed** | Bygningsnummer er et persondatafelt, og anvendes på Grønland som selvstændigt datum eller i stedet for husnummer. | [optional]
**street_code** | **mixed** | Vejkode danner sammen med kommunekode en entydig kode for en vej i Danmark. Værdimængde: 0001 - 9999 | [optional]
**street_name** | **mixed** | En forkortelse af vejnavn, som benyttes ved forsendelser. Feltet er indrapporteret, hvis vejnavnet er over 20 positioner. Ved vejnavne under 20 positioner er vejnavn &#x3D; vejadresseringsnavn. | [optional]
**house_number** | **mixed** | Feltet angiver husnummer på en given bolig. | [optional]
**floor** | **mixed** | Etageangivelse i adressen. 1 - 99 samt kl, k2, k3, st og blank. mz, kv, og pt kan desuden forekomme ved adresseregistreringer. | [optional]
**door** | **mixed** | Side- eller dørnummer for en bolig. Identificerer sammen med kommunekode, vejkode, husnummer, og etage en bolig. | [optional]
**city_name** | **mixed** | Bynavn i klarskrift. Benyttes som en del af den postale adresse, hvor postnummer og postdistrikt er utilstrækkeligt, ved forsendelse af post til borgeren. | [optional]
**zip_name** | **mixed** | Angiver postdistrikts navn i klarskrift. Feltet er på 20 karakterer, så det sammen med postnummer + 1 blank kan være i en rudekuvert. | [optional]
**zip_code** | **mixed** | Postvæsenets landsdækkende postnummerkode. Postnummer er et obligatorisk vejdistrikt. | [optional]
**address_name** | **mixed** |  |
**country** | **mixed** | Angiver det land personen er indrejst fra eller udrejst til | [optional]
**country_code** | **mixed** | Angiver det land personen er indrejst fra eller udrejst til | [optional]
**address_line_1** | **mixed** | Fritekst om udenlandsadresser | [optional]
**address_line_2** | **mixed** | Fritekst om udenlandsadresser | [optional]
**address_line_3** | **mixed** | Fritekst om udenlandsadresser | [optional]
**address_line_4** | **mixed** | Fritekst om udenlandsadresser | [optional]
**address_line_5** | **mixed** | Fritekst om udenlandsadresser | [optional]
**credit_alert** | **mixed** | Angiver om personen har en beskyttelse af typen kreditadvarsel | [optional]
**marketing_protection** | **mixed** | Angiver om personen har en beskyttelse af typen markedsfoering | [optional]
**local_directory_protection** | **mixed** | Angiver om personen har en beskyttelse af typen lokal vejviser | [optional]
**name_and_address_protection** | **mixed** | Angiver om personen har en beskyttelse af typen navne og adresse beskyttekse | [optional]
**unit_number** | **mixed** | Reference to a CVR person | [optional]
**address** | [**\OpenAPI\Client\Model\DARAddress**](DARAddress.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
