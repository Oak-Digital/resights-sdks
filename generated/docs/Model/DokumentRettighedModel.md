# # DokumentRettighedModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **mixed** | Identifikation af et dokument, som kan være et adkomst-, hæftelses- eller servitutdokument. |
**revision_nummer** | **mixed** | Revisionsnummer for rettighedsdokument. |
**alias_akt_historisk_id** | **mixed** | For konverterede data er dokument-alias dato, løbenummer og retskreds for det konverterede dokument. Elementet er opbygget af dato der består af 8 tal på formen yyyymmdd, herefter kommer bindestreg. Løbenummer indeholder 1 til 6 tal. Der er ikke foranstillede nuller. Herefter kommer en bindestreg. Retskreds består af 2 tal, f. eks. 01 eller 19. Hvis der findes flere konverteret dokumenter med samme dato/løbenummer, får disse tilføjet et suffix på fem tegn: [-][ét tegns dokumenttype][trecifret løbenr]. Dokumentypen er enten A (adkomstdokument), H (hæftelsesdokument) eller S (servitutdokument). Eksempler: 20060304-123456-19, 19950507-12345-04, 19981209-1234-21-H0001 og 11111111-0-10-H0054 | [optional]
**adkomst_type** | [**\OpenAPI\Client\Model\AdkomstTypeEnum**](AdkomstTypeEnum.md) |  | [optional]
**haeftelse_type** | [**\OpenAPI\Client\Model\HaeftelseTypeEnum**](HaeftelseTypeEnum.md) |  | [optional]
**servitut_type** | [**\OpenAPI\Client\Model\ServitutTypeEnum**](ServitutTypeEnum.md) |  | [optional]
**rettighed_samling** | **mixed** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
