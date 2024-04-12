# # ATDModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **mixed** | Identifikation af et dokument, som kan være et adkomst-, hæftelses- eller servitutdokument. Kunne også kaldes en sagsreference |
**type** | [**\OpenAPI\Client\Model\DokumentTypeEnum**](DokumentTypeEnum.md) |  | [optional]
**revision_nummer** | **mixed** | Revisionsnummer for rettighedsdokument. |
**alias_id** | **mixed** | Unikt dokument-alias bestående af dags dato og et løbenummer. F.eks. 20080304-1234567890 | [optional]
**tinglysning_dato** | **mixed** | Tinglysningsdatoen er tidspunktet for modtagelsen af en anmeldelse, der indeholder oprettende ekspeditionstype. Tinglysningsdatoen viser altid datoen for den oprindelige tinglysning. Datoen for eventuelle påtegninger kan udelukkende ses i akten via revisionssporet. |
**fast_ejendom_med_rettigheder_samling** | **mixed** | Samling af faste ejendomme, med tilhørende pantrettigheder | [optional]
**adkomst_struktur** | [**\OpenAPI\Client\Model\AdkomstStrukturModel**](AdkomstStrukturModel.md) |  | [optional]
**haeftelse_struktur** | [**\OpenAPI\Client\Model\HaeftelseStrukturModel**](HaeftelseStrukturModel.md) |  | [optional]
**servitut_struktur** | [**\OpenAPI\Client\Model\ServitutStrukturModel**](ServitutStrukturModel.md) |  | [optional]
**anmeldelse_information** | [**\OpenAPI\Client\Model\AnmeldelseInformationModel**](AnmeldelseInformationModel.md) |  | [optional]
**anmaerkning_samling** | **mixed** | Samling af anmaerkninger. Det kan være anmaerkninger om servitutter og hæftelser angivet ved nummer. Anmærkninger vedrører altid respekter. Mangler der i en anmeldelse respekt for en eller flere hæftelser eller servitutter, giver sagsbehandlingen anledning til anmærkninger herom. Anmærkning for servitutter indeholder kode for yderligere oplysninger om servitutten. | [optional]
**frist_information_samling** | **mixed** | FristInformation ved tinglysning med frist. Her oplyses årsag og fristdato. | [optional]
**snapshot** | [**\OpenAPI\Client\Model\SnapshotModel**](SnapshotModel.md) |  |
**tillaegstekst_samling** | **mixed** | Oplysende tekster som tinglysningsretten i form af en berigelse påfører dokumentet. | [optional]
**aendringspaategning_samling** | **mixed** | Påtegninger som ligger på dokumentet, men som er tinglyst med frist eller hvor en forhøjelse er spaltet og som derfor ikke er &#39;flettet&#39; ind i ATR-dokumentet endnu. I en anmeldelse med en kombinationspåtegning kan der indgå flere forskellige ændringer, som alle bliver samlet i én ny version af dokumentet. For ekspeditionstype 80 omsætter sagsbehandleren påtegningsteksten til én eller flere elementer under kombipåtegningen. Således er der ikke behov for at gemme og returnere selve den inddaterede påtegningstekst. Ændringer i roller (kreditorskift/transport, debitorskift, ændring af meddelelseshavere samt fuldmagtsændringer) er afspejlet i rollesamlingen og indgår derfor ikke som ændringspåtegning. | [optional]
**tinglysning_afgift_overfoersel_indikator** | **mixed** | True angiver at der findes en erklæring om at hæftelse alene indestår med henblik på overførsel af tinglysningsafgift. |
**seneste_anmeldelse_svar** | [**\OpenAPI\Client\Model\SenesteAnmeldelseSvarModel**](SenesteAnmeldelseSvarModel.md) |  | [optional]
**udskrift_dato_tid** | **mixed** | Tidspunktet for en udskrift |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
