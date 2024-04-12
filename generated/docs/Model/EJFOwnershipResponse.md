# # EJFOwnershipResponse

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
**bfe_number** | **mixed** | Bestemt fast ejendomsnummer |
**ownership_code** | [**\OpenAPI\Client\Model\OwnershipCodeEnum**](OwnershipCodeEnum.md) |  | [optional]
**owned_before_01071998** | **mixed** | Markering af om ejerskabet falder ind under bestemmelsen om ejendomme ejet siden 01.07.1998 |
**actual_share** | **mixed** |  | [optional]
**actual_share_numerator** | **mixed** | Den andel af ejendommen, som det offentlige regner ejeren som ejer af, f.eks. i forbindelse med beregning af ejendomsskat. |
**actual_share_denominator** | **mixed** | Den andel af ejendommen, som det offentlige regner ejeren som ejer af, f.eks. i forbindelse med beregning af ejendomsskat. |
**registered_share** | **mixed** |  | [optional]
**registered_share_numerator** | **mixed** | Den andel af ejendommen som ejeren har tinglyst adkomst til | [optional]
**registered_share_denominator** | **mixed** | Den andel af ejendommen som ejeren har tinglyst adkomst til | [optional]
**primary_contact** | **mixed** | Angiver om ejer er den som offenlige myndigheder skal kontakte vedrørende ejendommen. |
**limitation** | **mixed** | Markering af, om ejeren ifølge tinglysning, har begrænset dispositionsret til ejendommen | [optional]
**person** | [**\OpenAPI\Client\Model\EJFPerson**](EJFPerson.md) |  | [optional]
**company** | [**\OpenAPI\Client\Model\EJFCompany**](EJFCompany.md) |  | [optional]
**other** | [**\OpenAPI\Client\Model\EJFPersonCompanyInfo**](EJFPersonCompanyInfo.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
