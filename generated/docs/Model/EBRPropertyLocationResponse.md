# # EBRPropertyLocationResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **mixed** | Persistent unik nøgle. |
**namespace** | **mixed** |  |
**status** | [**\OpenAPI\Client\Model\EBRStatusEnum**](EBRStatusEnum.md) |  |
**business_process** | **mixed** | Den manuelle eller IT-understøttede proces hvori forretningsområdet håndterer hændelsen. |
**business_area** | **mixed** | Den del af den offentlige forretning der håndterer hændelsen og derved udvirker ændringen i data. | [optional]
**business_event** | **mixed** | Den begivenhed i virkeligheden som udløste ændringen i data. | [optional]
**registration_from** | **mixed** | Tidspunktet hvor registreringen er foretaget. |
**registration_to** | **mixed** | Tidspunktet hvor en ny registrering er foretaget på objektet, og hvor denne version således ikke længere er den seneste. | [optional]
**registration_actor** | **mixed** | Den aktør der har foretaget registreringen. |
**effect_from** | **mixed** | Tidspunktet hvorfra objektet har virkning. |
**effect_to** | **mixed** | Tidspunktet hvor objektets virkning ophører. | [optional]
**effect_actor** | **mixed** | Den aktør der har afstedkommet objektets virkning. |
**municipality_code** | **mixed** | Udpeger den kommune som har det administrative ansvar for den bestemte faste ejendom. | [optional]
**bfe_number** | **mixed** | Udpeger den bestemte faste ejendom der har sin beliggenhed og sin kommune tilhørsforhold angivet ved en ejendomsbeliggenhed. |
**description** | **mixed** | Tekst der beskriver ejendommens beliggenhed i tilfælde hvor der ikke er en adresse at vælge ved udstilling af beliggenhedsadressen | [optional]
**esdh_reference_address** | **mixed** | Journalnummer i kommunens ESDH i de tilfælde hvor der er valgt en anden adresse end den automatisk beregnede | [optional]
**esdh_reference_municipality_code** | **mixed** | Journalnummer i kommunens ESDH i de tilfælde hvor der er valgt en anden kommune end den automatisk beregnede. | [optional]
**address_manually_entered** | **mixed** | Markering når der er valgt en anden adresse end den der automatisk er beregnet |
**municipality_manually_entered** | **mixed** | Markering når der er valgt en anden kommune end den der automatisk er beregnet |
**address** | [**\OpenAPI\Client\Model\DARAddress**](DARAddress.md) |  | [optional]
**access_address** | [**\OpenAPI\Client\Model\DARAccessAddress**](DARAccessAddress.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
