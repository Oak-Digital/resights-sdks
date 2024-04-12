# # TinglysningspaategningModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **mixed** | Identifikator på det dokument, der kan være et resultat af tinglysningen. Ved oprettende dokumenter indeholder den DokumentIdentifikator. Ved påtegninger indeholder den DokumentIdentifikator og revisionsnummer. DokumentIdentifikator vil ved påtegninger være identisk med indholdet af DokumentRevisionIdentifikator i TinglysningsObjektIdentifikatorSamling. I tilfælde af aflysning vil der ikke være angivet en ny DokumentRevisionIdentifikator. Hvis TinglysningStatusKode er &#39;afvist&#39;, vil der ikke være en ny DokumentRevisionIdentifikator. | [optional]
**revision_nummer** | **mixed** | Revisionsnummer for rettighedsdokument. | [optional]
**alias_id** | **mixed** | Ved oprettende dokumenter indeholder det, dato/løbenummer (Menneskevenligt alias) for det dokument, der er resultatet af tinglysningen. | [optional]
**fuldmagt_identifikator** | **mixed** | Ved anmeldelse af fuldmagt, returneres en FuldmagtIdentifikator. Denne skal bruges ved tilbagekaldelse. | [optional]
**rettighed_samling** | **mixed** |  | [optional]
**ekspeditionstype_id** | **mixed** | Her angives den ekspeditionstype, der har ført til Tinglysningsrettens tinglysningspåtegning. I tilfælde af kombination af påtegnende ekspeditionstyper, kan man skelne mellem hvilke tinglysningspåtegningselementer, der hører til hvilke ekspeditionstyper. |
**ekspeditionstype_tekst** | **mixed** | Ekspeditionstype i tekstformat | [optional]
**ekspeditionstype_raekkefoelge** | **mixed** | I anmeldelser med påtegninger kan der optræde flere ekspeditionstyper i én anmeldelse. Dette kan også være flere påtegninger med samme ekspeditionstypenummer. Det betyder at man i en sådan situation ikke ud fra TinglysningObjektIdentifikator og EkspeditionstypeIdentifikator kan afgøre, hvilken påtegning i enmeldelsen det enkelte TinglysningpaategningElement vedrører. Ved at angive EkspeditionstypeRaekkefoelge bliver det muligt. | [optional]
**tinglysning_status** | [**\OpenAPI\Client\Model\TinglysningStatusEnum**](TinglysningStatusEnum.md) |  |
**tinglysning_objekt_identifikator** | [**\OpenAPI\Client\Model\TinglysningObjektIdentifikatorModel**](TinglysningObjektIdentifikatorModel.md) |  |
**bemaerkning_samling** | **mixed** | Bemærkninger fra de automatiske kontroller og sagsbehandlingen. En eller flere af disse kan være årsagen til en eventuel afvisning af anmeldelsen. Bemærkninger knytter supplerende information til resultatet af de udførte kontroller. Bemærkninger angives i form af kode for standard bemærkningstekst, eller kode for fri tekst (hvor tinglysningsmedarbejderen ikke anvender standard bemærkningstekst, men selv anfører bemærkningsteksten). | [optional]
**anmaerkning_samling** | **mixed** | Samling af anmaerkninger. Det kan være anmaerkninger om servitutter og hæftelser angivet ved nummer. Anmærkninger vedrører altid respekter. Mangler der i en anmeldelse respekt for en eller flere hæftelser eller servitutter, giver sagsbehandlingen anledning til anmærkninger herom. Anmærkning for servitutter indeholder kode for yderligere oplysninger om servitutten. | [optional]
**frist_information_samling** | **mixed** | FristInformation ved tinglysning med frist. Her oplyses årsag og fristdato. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
