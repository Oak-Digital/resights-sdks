# # AfgiftOplysningerModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**afgiftspligtigt_beloeb** | **mixed** | Angiver beloebet som tinglysningsafgiften er beregnet ud fra. |
**paalydende_nyt_laan** | **mixed** | Angiver beloeb for nyt pantebrevs hovedstol. Angives kun ved nye pantebreve. Kan vaere sat til 0 i forbindelse af servitutter der tinglyses pantstiftende. | [optional]
**haeftelse_beloeb_opskrevet** | **mixed** | Anvendes i de tilfaelde hvor hovedstolen kan tillaegges rente og dermed opnå en højere pantstiftende værdi end angivet i hovedstol. | [optional]
**valuta_kode** | **mixed** | ISO 4217 valutakode. | [optional]
**skoede_koebesum** | [**\OpenAPI\Client\Model\SkoedeKoebesumModel**](SkoedeKoebesumModel.md) |  |
**kurs_oplysninger** | [**\OpenAPI\Client\Model\KursOplysningerModel**](KursOplysningerModel.md) |  |
**overfoert_hovedstol_samling** | **mixed** | Afgiftsoplysning om overført hovedstol. | [optional]
**kursvaerdi_samling** | **mixed** | Samling af afgiftsoplysninger opgjort efter kursvaerdi. | [optional]
**nominel_samling** | **mixed** | Afgiftsoplysning opgjort efter nominel værdi. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
