# # MATSFEResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **mixed** | Persistent unik nøgle. |
**namespace** | **mixed** |  |
**status** | [**\OpenAPI\Client\Model\MATStatusEnum**](MATStatusEnum.md) |  |
**business_process** | **mixed** | Den manuelle eller IT-understøttede proces hvori forretningsområdet håndterer hændelsen. |
**business_area** | **mixed** | Den del af den offentlige forretning der håndterer hændelsen og derved udvirker ændringen i data. |
**business_event** | **mixed** | Den primære begivenhed i virkeligheden som udløste ændringen i data. |
**latest_case_id** | **mixed** | Unik identifikation af den sag som sidst har foretaget opdatering af det pågældende matrikulære element. |
**intended_action** | **mixed** | Den påtænkte handling for objekter med status &#39;Under udarbejdelse&#39; og &#39;Foreløbig&#39; | [optional]
**registration_from** | **mixed** | Tidspunktet hvor registreringen er foretaget. |
**registration_to** | **mixed** | Tidspunktet hvor en ny registrering er foretaget på objektet, og hvor denne version således ikke længere er den seneste. | [optional]
**registration_actor** | **mixed** | Den aktør der har foretaget registreringen. |
**effect_from** | **mixed** | Tidspunktet hvorfra objektet har virkning. |
**effect_to** | **mixed** | Tidspunktet hvor objektets virkning ophører. | [optional]
**effect_actor** | **mixed** | Den aktør der har afstedkommet objektets virkning. |
**daf_updated_at** | **mixed** | Datafordeler opdateringstid | [optional]
**bfe_number** | **mixed** | Bestemt fast ejendom |
**worker_house** | **mixed** | Angiver om den samlede faste ejendom er en arbejderbolig. |
**is_common_lot** | **mixed** | Angiver, at typen af samlet fast ejendom er fælleslod. |
**mother_property_divided_into_condominiums** | **mixed** | Angiver, om den pågældende samlede faste ejendom er registreret som hovedejendom og opdelt i ejerlejligheder. |
**agriculture_listing** | **mixed** | Angiver hvorvidt ejendommen er noteret som landbrugsejendom og derfor har landbrugspligt. | [optional]
**separated_road** | **mixed** | Angiver, om der er tale om en udskilt, offentlig vej med selvstændigt  matrikelnummer. |
**lands** | **mixed** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
