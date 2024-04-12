# # EJFTradeResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **mixed** | Persistent unik nøgle. |
**namespace** | **mixed** |  |
**status** | [**\OpenAPI\Client\Model\EJFStatusEnum**](EJFStatusEnum.md) |  | [optional]
**business_process** | [**\OpenAPI\Client\Model\EJFBusinessProcessEnum**](EJFBusinessProcessEnum.md) |  | [optional]
**business_area** | [**\OpenAPI\Client\Model\EJFBusinessAreaEnum**](EJFBusinessAreaEnum.md) |  | [optional]
**business_event** | [**\OpenAPI\Client\Model\EJFBusinessEventEnum**](EJFBusinessEventEnum.md) |  | [optional]
**registration_from** | **mixed** | Tidspunktet hvor registreringen er foretaget. |
**registration_to** | **mixed** | Tidspunktet hvor en ny registrering er foretaget på objektet, og hvor denne version således ikke længere er den seneste. | [optional]
**registration_actor** | **mixed** | Den aktør der har foretaget registreringen. |
**effect_from** | **mixed** | Tidspunktet hvorfra objektet har virkning. |
**effect_to** | **mixed** | Tidspunktet hvor objektets virkning ophører. | [optional]
**effect_actor** | **mixed** | Den aktør der har afstedkommet objektets virkning. |
**case_id** | **mixed** | Persistent unik nøgle for den Ejerskabshændelse behandling eller Person/Virksomhedshændelse behandling, som objektet senest er ændret ved. |
**sales_date** | **mixed** | Dato for ejerens afståelse af ejendommen | [optional]
**purchase_price_total** | **mixed** | Det samlede beløb, som den eller de ejerskiftede ejendomme er blevet købt for. | [optional]
**purchase_price_cash** | **mixed** | Den pris i rede penge, der skal betales ved køb af en fast ejendom. | [optional]
**purchase_agreement_date** | **mixed** | Dato for underskrift af købsaftale (kaldes også for slutseddel). | [optional]
**currency** | [**\OpenAPI\Client\Model\CurrencyEnum**](CurrencyEnum.md) |  | [optional]
**contract_sum** | **mixed** | Angiver beløbet for en entreprise. | [optional]
**livestock_value** | **mixed** | Værdi af husdyr som indgår i handlen. | [optional]
**movables_value** | **mixed** | Aktiver, der overtages udenfor købesummen. | [optional]
**payment_obligation_date** | **mixed** | Dato for ny ejers overtagelse af betalingsforpligtigelser | [optional]
**deed_text** | **mixed** | Fri tekst, der kan følge med anmeldelsen | [optional]
**buildings_included** | [**\OpenAPI\Client\Model\BuildingsIncludedEnum**](BuildingsIncludedEnum.md) |  | [optional]
**owner_changes** | **mixed** |  |
**overview** | [**\OpenAPI\Client\Model\LatestTradeResponse**](LatestTradeResponse.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
