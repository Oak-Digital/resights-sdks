# # PersondokumentModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **mixed** | Identifikation af et dokument, som kan være et adkomst-, hæftelses- eller servitutdokument. |
**revision_nummer** | **mixed** | Revisionsnummer for rettighedsdokument. |
**alias_id** | **mixed** | Unikt dokument-alias bestående af dags dato og et løbenummer. F.eks. 20080304-1234567890 | [optional]
**alias_akt_historisk_id** | **mixed** | For konverterede data er dokument-alias dato, løbenummer og retskreds for det konverterede dokument. Elementet er opbygget af dato der består af 8 tal på formen yyyymmdd, herefter kommer bindestreg. Løbenummer indeholder 1 til 6 tal. Der er ikke foranstillede nuller. Herefter kommer en bindestreg. Retskreds består af 2 tal, f. eks. 01 eller 19. Hvis der findes flere konverteret dokumenter med samme dato/løbenummer, får disse tilføjet et suffix på fem tegn: [-][ét tegns dokumenttype][trecifret løbenr]. Dokumentypen er enten A (adkomstdokument), H (hæftelsesdokument) eller S (servitutdokument). Eksempler: 20060304-123456-19, 19950507-12345-04, 19981209-1234-21-H0001 og 11111111-0-10-H0054 | [optional]
**tinglysning_dato** | **mixed** | Tinglysningsdatoen er tidspunktet for modtagelsen af en anmeldelse, der indeholder oprettende ekspeditionstype. Tinglysningsdatoen viser altid datoen for den oprindelige tinglysning. Datoen for eventuelle påtegninger kan udelukkende ses i akten via revisionssporet. |
**afgoerelse_dato** | **mixed** | Afgoerelsesdato. | [optional]
**rettighed_id** | **mixed** | Angiver det faktiske prioritetsnummer for en rettighed. |
**disponent_samling** | **mixed** | Information om kreditorer på det valgte tingslysningsopbjekt | [optional]
**tillaegstekst_samling** | **mixed** | Samling af TekstAngivelse. | [optional]
**frist_information_samling** | **mixed** | FristInformation ved tinglysning med frist. Her oplyses årsag og fristdato. | [optional]
**senest_paategnet_dato** | **mixed** | Dato for seneste påtegning | [optional]
**aktualiseret** | **mixed** | True Angiver at dokumentet er gjort aktuel | [optional]
**type** | [**\OpenAPI\Client\Model\PersondokumentTypeEnum**](PersondokumentTypeEnum.md) |  |
**testamente_type** | [**\OpenAPI\Client\Model\TestamenteTypeEnum**](TestamenteTypeEnum.md) |  | [optional]
**testamente_myndighed_cvr** | **mixed** | CVR-nummer for byret, hvor testamentet er oprettet. | [optional]
**testamente_myndighed_navn** | **mixed** | Navn på byret, hvor testamentet er oprettet. | [optional]
**testamente_myndighed_authority_code** | **mixed** | Code, which identifies an authority. Every AuthorityCode belongs to a specific authority(reference to data of authorities in CPR). The AuthorityCode is unique. | [optional]
**vaerge_information** | [**\OpenAPI\Client\Model\LoesoreStamoplysningerModel**](LoesoreStamoplysningerModel.md) |  | [optional]
**tekst_samling** | **mixed** | Tekst som bruges i anmeldelser til personbogen. Her angives selve teksten tilTinglysningVærgemål(144), TinglysningÆgtepagt(145), Testamente(188) og PåtegningÆgtepagt(192) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
