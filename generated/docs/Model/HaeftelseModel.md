# # HaeftelseModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **mixed** | Identifikation af et dokument, som kan være et adkomst-, hæftelses- eller servitutdokument. |
**revision_nummer** | **mixed** | Revisionsnummer for rettighedsdokument. |
**alias_id** | **mixed** | Unikt dokument-alias bestående af dags dato og et løbenummer. F.eks. 20080304-1234567890 | [optional]
**alias_akt_historisk_id** | **mixed** | For konverterede data er dokument-alias dato, løbenummer og retskreds for det konverterede dokument. Elementet er opbygget af dato der består af 8 tal på formen yyyymmdd, herefter kommer bindestreg. Løbenummer indeholder 1 til 6 tal. Der er ikke foranstillede nuller. Herefter kommer en bindestreg. Retskreds består af 2 tal, f. eks. 01 eller 19. Hvis der findes flere konverteret dokumenter med samme dato/løbenummer, får disse tilføjet et suffix på fem tegn: [-][ét tegns dokumenttype][trecifret løbenr]. Dokumentypen er enten A (adkomstdokument), H (hæftelsesdokument) eller S (servitutdokument). Eksempler: 20060304-123456-19, 19950507-12345-04, 19981209-1234-21-H0001 og 11111111-0-10-H0054 | [optional]
**overfoert** | **mixed** | Angiver om dokumentet oprindeligt blev oprettet i e-akten som resultat af overførslen fra TLS. True angiver at dokumentet blev oprettet i e-akten ifm. overførslen. False angiver at dokumentet ikke blev oprettet i e-akten ifm. overførslen. |
**type** | [**\OpenAPI\Client\Model\HaeftelseCompleteTypeEnum**](HaeftelseCompleteTypeEnum.md) |  | [optional]
**tinglysning_dato** | **mixed** | Tinglysningsdatoen er tidspunktet for modtagelsen af en anmeldelse, der indeholder oprettende ekspeditionstype. Tinglysningsdatoen viser altid datoen for den oprindelige tinglysning. Datoen for eventuelle påtegninger kan udelukkende ses i akten via revisionssporet. |
**senest_paategnet_dato** | **mixed** | Dato for seneste påtegning | [optional]
**pantrettighed_id** | **mixed** | Identifikation af en rettighed. Betegnelsen rettighed dækker alle de former for sammenkob- linger som et rettighedsdokument (DokumentIdentifikator) kan registrere i forhold til et tinglysningsobjekt. |
**pantrettighed_prioritet_nummer** | **mixed** | Den faktiske prioritet for rettigheden. Ud af dokumentet kan læses respekterne, som angiver den ønskede prioritet. Dette modereres evt. af anmærkninger og giver den faktiske prioritet. |
**pantebrev_formular_lovpligtig_kode** | [**\OpenAPI\Client\Model\HaeftelsePantebrevFormularLovpligtigKodeEnum**](HaeftelsePantebrevFormularLovpligtigKodeEnum.md) |  | [optional]
**kreditor_samling** | **mixed** | Information om kreditorer på det valgte tingslysningsopbjekt | [optional]
**debitor_samling** | **mixed** | Information om debitorer på det valgte tingslysningsopbjekt. | [optional]
**meddelelseshaver_samling** | **mixed** | Information om meddelelseshavere på det valgte tingslysningsopbjekt | [optional]
**underpantrettighed_samling** | **mixed** | Angiver et underpant i en pantrettighed. Underpant har deres egen underordnede prioritetsstilling og sin egen unikke rettighedsidentifkator. Der returneres identifikation af underpantets dokument i form af DokumenRevisionIdentifikator og underpantets beløb. | [optional]
**beloeb** | **mixed** | Beløb på hæftelse. |
**beloeb_valuta** | **mixed** | ISO 4217 valutakode |
**delta_beloeb** | **mixed** | Deltabeløb ved forhøjelser og nedsættelser inden for det enkelte tinglysningsobjekt. | [optional]
**rente** | [**\OpenAPI\Client\Model\HaeftelseRenteModel**](HaeftelseRenteModel.md) |  | [optional]
**rente_overfoert** | **mixed** | Angives for et overført dokument, hvis renten ikke er ændret ved påtegning efter overførslen. | [optional]
**anmaerkning_samling** | **mixed** | Samling af anmaerkninger. Det kan være anmaerkninger om servitutter og hæftelser angivet ved nummer. Anmærkninger vedrører altid respekter. Mangler der i en anmeldelse respekt for en eller flere hæftelser eller servitutter, giver sagsbehandlingen anledning til anmærkninger herom. Anmærkning for servitutter indeholder kode for yderligere oplysninger om servitutten. | [optional]
**respekt_samling** | **mixed** | Samling af respekter. | [optional]
**fritekst_information_tekst** | **mixed** | Her angives information i fri tekst, som ikke kan placeres andensteds. Der vil ikke optræde koder i dette felt og man skal vise indholdet som fri tekst. Feltet er relateret til arbejdet med med den interne sagsportal. | [optional]
**tinglysning_afgift_betalt** | **mixed** | Det totale tinglysningsbeløb i danske kroner, der er betalt for anmeldelsen, der berørte det pågældende dokument. Beløbet kan dække flere dokumenter, hvis behandlingen af anmeldelsen har resulteret i flere dokumenter eller dokumentrevisioner. | [optional]
**tinglysning_afgift_overfoersel_indikator** | **mixed** | True angiver at der findes en erklæring om at hæftelse alene indestår med henblik på overførsel af tinglysningsafgift. |
**konverteret_digital_pantebrev_indikator** | **mixed** | Kun for overførte dokumenter: True angiver at pantebrevet er digitaliseret og papir udgaven hermed er ugyldig. | [optional]
**rettighedsspaltning_status_tekst** | [**\OpenAPI\Client\Model\RettighedsspaltningStatusEnum**](RettighedsspaltningStatusEnum.md) |  | [optional]
**saerlige_laanevilkaar_samling** | **mixed** | Særlige lånevilkår for en fremtidig hæftelse. | [optional]
**laantype_kode** | [**\OpenAPI\Client\Model\HaeftelseLaantypeKodeEnum**](HaeftelseLaantypeKodeEnum.md) |  | [optional]
**kreditorbetegnelse_tekst** | [**\OpenAPI\Client\Model\TekstGruppeNestedModel**](TekstGruppeNestedModel.md) |  | [optional]
**tillaegstekst_samling** | **mixed** | Angiver enten en oplysende tekst givet af Tinglysningsmedarbejderen i den interne sagsportal eller et antal tillægstekster fra overførslen. | [optional]
**frist_information_samling** | **mixed** | FristInformation ved tinglysning med frist. Her oplyses årsag og fristdato. | [optional]
**ogsaa_lyst_paa** | [**\OpenAPI\Client\Model\OgsaaLystPaaModel**](OgsaaLystPaaModel.md) |  | [optional]
**information_overfoert** | [**\OpenAPI\Client\Model\DokumentInformationOverfoertModel**](DokumentInformationOverfoertModel.md) |  | [optional]
**andel** | **mixed** |  | [optional]
**andel_taeller** | **mixed** |  | [optional]
**andel_naevner** | **mixed** |  | [optional]
**implicit_fuldmagt_samling** | **mixed** | Samling af anmeldte fuldmagter. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
