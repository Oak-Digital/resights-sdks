# # BBRStaircaseResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **mixed** | Persistent unik nøgle. |
**namespace** | **mixed** |  |
**status** | **mixed** | Angivelse af hvor et forvaltningsobjekt er i sin livscyklus. | [optional]
**business_process** | **mixed** | Den manuelle eller IT-understøttede proces hvori forretningsområdet håndterer hændelsen. | [optional]
**business_area** | **mixed** | Den del af den offentlige forretning der håndterer hændelsen og derved udvirker ændringen i data. | [optional]
**business_event** | **mixed** | Den begivenhed i virkeligheden som udløste ændringen i data. | [optional]
**registration_from** | **mixed** | Tidspunktet hvor registreringen er foretaget. |
**registration_to** | **mixed** | Tidspunktet hvor en ny registrering er foretaget på objektet, og hvor denne version således ikke længere er den seneste. | [optional]
**registration_actor** | **mixed** | Den aktør der har foretaget registreringen. |
**effect_from** | **mixed** | Tidspunktet hvorfra objektet har virkning. |
**effect_to** | **mixed** | Tidspunktet hvor objektets virkning ophører. | [optional]
**effect_actor** | **mixed** | Den aktør der har afstedkommet objektets virkning. |
**municipality_code** | **mixed** |  | [optional]
**opg020_elevator** | **mixed** | Angiver om der er elevator i opgangen/bygningen. | [optional]
**opg021_access_address_function** | **mixed** | Ukendt | [optional]
**opg500_note** | **mixed** | Notatlinjer indeholder tekstuel information om et givet BBR objekt, som ikke naturligt omfattes af eksisterende attributter på BBR objektet. Det kan for eksempel være særlige forhold om adgang til eller anvendelsen af BBR objektet. Der kan, som navnet angiver, angives flere notatlinjer. | [optional]
**building_id** | **mixed** |  |
**access_address** | [**\OpenAPI\Client\Model\DARAccessAddress**](DARAccessAddress.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
