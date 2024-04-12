# # EjendomKategoriModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**kategori** | [**\OpenAPI\Client\Model\EjendomKategoriEnum**](EjendomKategoriEnum.md) |  | [optional]
**byggemodningsomkostning_indikator** | **mixed** | Anvendes ikke efter 18.06.2016 iht VUA028 True angiver at koebesummen omfatter alle omkostninger til byggemodning. False angiver at koebesummen ikke omfatter disse omkostninge | [optional]
**antal_beboelseslejligheder** | **mixed** | Hvis antallet er 2 eller mere skal der vaere afgivet erklaering T13-21. | [optional]
**udlejningsgrad_indikator** | **mixed** | True angiver at mere end 50 procent af erhvervs- og boligarealerne har vaeret udlejet i seneste kalenderaar. False angiver at mindre end eller lig med 50 procent af erhvervs- og boligarealerne har vaeret udlejet i seneste kalenderaar. | [optional]
**momspligtigeformaal_indikator** | **mixed** | True angiver at ejendommen har vaeret anvendt til momspligtige formaal. False angiver at ejendommen ikke har vaeret anvendt til momspligtige formaal. En ejendom har vaeret anvendt til momspligtige formål, når en momsregistreret virksomhed har anvendt ejendommen til sine momspligtige aktiviteter, f.eks. som administrationsbygning, fabrikationsbygning, lagerbygning m.m. Der kan også være tale om, at overdrageren har opnået tilladelse til frivillig momsregistrering for udlejning, bortforpagtning eller salg af ejendommen, og ejendommen har været anvendt til disse formål. | [optional]
**udlejningsejendom_indikator** | **mixed** | True angiver at der er tale om en udlejningsejendom og der skal angives antallet af beboelseslejemaal og antallet af erhvervslejemaal med tilhoerende erklaering T22-30. False angiver at der ikke er tale om en udlejningsejendom. | [optional]
**antal_beboelseslejemaal** | **mixed** | Hvis der er tale om en udlejningsejendom skal antallet af beboelseslejemaal angives. Hvis antallet er større end 5 skal der laves en tilhoerende erklæring T22-30. | [optional]
**antal_erhvervslejemaal** | **mixed** | Hvis der er tale om en udlejningsejendom skal antallet af erhvervslejemaal angives. Hvis antallet af beboelseslejemaal og erhvervslejemaal er stoeere end 12 skal der afgives en tilhoerende erklaering T22-30 | [optional]
**tekst** | **mixed** | EjendomKategoriTekst | [optional]
**beskrivelse** | **mixed** | EjendomKategoriBeskrivelse for valg EjendomKategoriAnden i EjendomKategori | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
