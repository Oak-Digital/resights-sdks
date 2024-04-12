# # ServitutModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **mixed** | Identifikation af et dokument, som kan være et adkomst-, hæftelses- eller servitutdokument. Kunne også kaldes en sagsreference |
**revision_nummer** | **mixed** | Revisionsnummer for rettighedsdokument. |
**alias_id** | **mixed** | Unikt dokument-alias bestående af dags dato og et løbenummer. F.eks. 20080304-1234567890 | [optional]
**alias_akt_historisk_id** | **mixed** | For konverterede data er dokument-alias dato, løbenummer og retskreds for det konverterede dokument. Elementet er opbygget af dato der består af 8 tal på formen yyyymmdd, herefter kommer bindestreg. Løbenummer indeholder 1 til 6 tal. Der er ikke foranstillede nuller. Herefter kommer en bindestreg. Retskreds består af 2 tal, f. eks. 01 eller 19. Hvis der findes flere konverteret dokumenter med samme dato/løbenummer, får disse tilføjet et suffix på fem tegn: [-][ét tegns dokumenttype][trecifret løbenr]. Dokumentypen er enten A (adkomstdokument), H (hæftelsesdokument) eller S (servitutdokument). Eksempler: 20060304-123456-19, 19950507-12345-04, 19981209-1234-21-H0001 og 11111111-0-10-H0054 | [optional]
**overfoert** | **mixed** | Angiver om dokumentet oprindeligt blev oprettet i e-akten som resultat af overførslen fra TLS. True angiver at dokumentet blev oprettet i e-akten ifm. overførslen. False angiver at dokumentet ikke blev oprettet i e-akten ifm. overførslen. |
**paataleberettiget_samling** | **mixed** | Paataleberettiget oplysninger. | [optional]
**information_overfoert** | [**\OpenAPI\Client\Model\DokumentInformationOverfoertModel**](DokumentInformationOverfoertModel.md) |  | [optional]
**type** | [**\OpenAPI\Client\Model\ServitutTypeEnum**](ServitutTypeEnum.md) |  |
**tinglysning_dato** | **mixed** | Tinglysningsdatoen er tidspunktet for modtagelsen af en anmeldelse, der indeholder oprettende ekspeditionstype. Tinglysningsdatoen viser altid datoen for den oprindelige tinglysning. Datoen for eventuelle påtegninger kan udelukkende ses i akten via revisionssporet. |
**rettighed_id** | **mixed** | Tinglysningsdatoen er tidspunktet for modtagelsen af en anmeldelse, der indeholder oprettende ekspeditionstype. Tinglysningsdatoen viser altid datoen for den oprindelige tinglysning. Datoen for eventuelle påtegninger kan udelukkende ses i akten via revisionssporet. |
**prioritet_nummer** | **mixed** | Tinglysningsdatoen er tidspunktet for modtagelsen af en anmeldelse, der indeholder oprettende ekspeditionstype. Tinglysningsdatoen viser altid datoen for den oprindelige tinglysning. Datoen for eventuelle påtegninger kan udelukkende ses i akten via revisionssporet. |
**senest_paategnet_dato** | **mixed** | Dato for seneste påtegning | [optional]
**tekst_summarisk** | **mixed** | Summarisk udgave af servituttekst. Der returneres kun overskrift fra ServitutTekst. De samme regler gælder hvis der i e-TL er gemt i FraseIdentifikator, som indeholder overskrift og afsnit. Hvis der ikke er angivet overskrift optræder elementet ikke. | [optional]
**tinglysning_afgift_betalt** | **mixed** | Det totale tinglysningsbeløb i danske kroner, der er betalt for anmeldelsen, der berørte det pågældende dokument. Beløbet kan dække flere dokumenter, hvis behandlingen af anmeldelsen har resulteret i flere dokumenter eller dokumentrevisioner. | [optional]
**ogsaa_lyst_paa** | [**\OpenAPI\Client\Model\OgsaaLystPaaModel**](OgsaaLystPaaModel.md) |  | [optional]
**anmaerkning_samling** | **mixed** | Samling af anmaerkninger. Det kan være anmaerkninger om servitutter og hæftelser angivet ved nummer. Anmærkninger vedrører altid respekter. Mangler der i en anmeldelse respekt for en eller flere hæftelser eller servitutter, giver sagsbehandlingen anledning til anmærkninger herom. Anmærkning for servitutter indeholder kode for yderligere oplysninger om servitutten. | [optional]
**tillaegstekst_samling** | **mixed** | Samling af TekstAngivelse. | [optional]
**rettighedsspaltning_status_tekst** | [**\OpenAPI\Client\Model\RettighedsspaltningStatusEnum**](RettighedsspaltningStatusEnum.md) |  | [optional]
**frist_information_samling** | **mixed** | FristInformation ved tinglysning med frist. Her oplyses årsag og fristdato. | [optional]
**information** | [**\OpenAPI\Client\Model\ServitutInformationModel**](ServitutInformationModel.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
