# # EjendomStamoplysningerModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**adresse** | [**\OpenAPI\Client\Model\AdresseModel**](AdresseModel.md) |  | [optional]
**bestemt_fast_ejendom_nummer** | **mixed** | BestemtFastEjendomNummer | [optional]
**hoved_notering** | [**\OpenAPI\Client\Model\HovedNoteringEnum**](HovedNoteringEnum.md) |  | [optional]
**indskannet_akt_samling** | **mixed** | Samling af identifikatorer paa indskannede akter for en ejendom. Hver identifikator er filnavnet. | [optional]
**vurdering_samling** | **mixed** | Der kan være mere end en ejendomsvurdering knyttet til en ejendom identificeret via EjendomIdentifikator. Dette sker i de situationer, hvor der for en EjendomIdentifikator eksisterer flere BBR numre. Der er en vurdering per BBR nummer (RealPropertyStructure). | [optional]
**tillaegstekst_samling** | **mixed** | Resulterende tekst fra Tinglysningsrettens behandling af særllige ekspeditionstyper af kategorien meddeleleser. Indholdet er relateret til den interne sagsportal. | [optional]
**landbrugsnotering** | **mixed** | AgriculturalNotationTypeText | [optional]
**matrikel_struktur_samling** | **mixed** | Indeholder berigede matrikler. | [optional]
**fordelingtal** | [**\OpenAPI\Client\Model\BroekModel**](BroekModel.md) |  | [optional]
**notering_tekst_samling** | **mixed** | Samling af noteringer på ejendommen | [optional]
**umatrikuleretareal** | [**\OpenAPI\Client\Model\UmatrikuleretArealModel**](UmatrikuleretArealModel.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
