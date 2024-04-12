# # UnderpantrettighedModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **mixed** | Identifikation af et dokument, som kan være et adkomst-, hæftelses- eller servitutdokument. |
**alias_id** | **mixed** | Unikt dokument-alias bestående af dags dato og et løbenummer. F.eks. 20080304-1234567890 | [optional]
**alias_akt_historisk_id** | **mixed** | For konverterede data er dokument-alias dato, løbenummer og retskreds for det konverterede dokument. Elementet er opbygget af dato der består af 8 tal på formen yyyymmdd, herefter kommer bindestreg. Løbenummer indeholder 1 til 6 tal. Der er ikke foranstillede nuller. Herefter kommer en bindestreg. Retskreds består af 2 tal, f. eks. 01 eller 19. Hvis der findes flere konverteret dokumenter med samme dato/løbenummer, får disse tilføjet et suffix på fem tegn: [-][ét tegns dokumenttype][trecifret løbenr]. Dokumentypen er enten A (adkomstdokument), H (hæftelsesdokument) eller S (servitutdokument). Eksempler: 20060304-123456-19, 19950507-12345-04, 19981209-1234-21-H0001 og 11111111-0-10-H0054 | [optional]
**rettighed_id** | **mixed** | Identifikation af en rettighed. Betegnelsen rettighed dækker alle de former for sammenkoblinger som et rettighedsdokument (DokumentIdentifikator) kan registrere i forhold til et tinglysningsobjekt. | [optional]
**underpant_beloeb** | **mixed** | Beløbsværdi. Tallet skal være nul eller positivt tal. Det kan maximalt være på 20 cifre og der kan maksimalt angives 2 decimaler. | [optional]
**underpant_valuta** | **mixed** | ISO 4217 valutakode. | [optional]
**prioritet_nummer** | **mixed** | rioriteten for underpantet, ikke at forveksle med prioriteten for selve pantebrevet. | [optional]
**underpanthaver_samling** | **mixed** | Underpanthavere | [optional]
**anmaerkning_samling** | **mixed** | Samling af anmaerkninger. Det kan være anmaerkninger om servitutter og hæftelser angivet ved nummer. Anmærkninger vedrører altid respekter. Mangler der i en anmeldelse respekt for en eller flere hæftelser eller servitutter, giver sagsbehandlingen anledning til anmærkninger herom. Anmærkning for servitutter indeholder kode for yderligere oplysninger om servitutten. | [optional]
**tillaegstekst_samling** | **mixed** | Samling af TekstAngivelse. | [optional]
**frist_information_samling** | **mixed** | FristInformation ved tinglysning med frist. Her oplyses årsag og fristdato. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
