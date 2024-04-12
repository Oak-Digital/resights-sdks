# # VURValuationResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **mixed** | Nøgle der entydig identificerer en ejendomsvurdering. |
**updated_at** | **mixed** | Timestamp for hvornår en vurdering, en eventuel vurderingsændring, årsregulering eller §4/4A vurdering er opdateret enten maskinelt ved en batch-kørsel eller i forbindelse med sagsbehandling. |
**bfe_numbers** | **mixed** | Liste af BFE-numre som er omfattet af vurderingen. | [optional]
**year** | **mixed** | Det år vurderingen gælder for. |
**number_valued_apartments** | **mixed** | Antal medvurderede lejligheder i den vurderede ejendom |
**usage_code** | **mixed** | Benyttelseskode angiver ejendommens benyttelse, som den er blevet fastlagt i forbindelse med en vurdering. | [optional]
**coverage_charge_difference_value** | **mixed** | Dækningsafgiftspligtig forskelsværdi for erhvervsejendomme eller dækningsafgiftspligtig forskelsværdi for offentlige ejendomme, der er fritaget for grundskyld. |
**coverage_charge_duty_code** | **mixed** | Kode, der angiver om ejendommen er helt eller delvis dækningsafgiftspligtig. | [optional]
**coverage_charge_duty_code_type** | **mixed** | Koden angiver typen af dækningsafgiftspligten, enten afhængig af ejertype (offentlig) eller af ejendomstypen (erhvervsmæssig). | [optional]
**property_value** | **mixed** | Den ved en vurdering ansatte ejendomsværdi (i hele kroner). |
**land_value** | **mixed** | Den ved vurdering ansatte grundværdi (i hele kroner). |
**legal_category_code** | **mixed** | Kode der angiver den juridiske kategori, som ejendommen er tildelt ved denne ejendomsvurdering. | [optional]
**legal_category_text** | **mixed** | Tekst, der beskriver den juridiske kategori, som ejendommen er tildelt ved denne ejendomsvurdering | [optional]
**legal_subcategory_code** | **mixed** | Kode der angiver den juridiske underkategori, som ejendommen er blevet tildelt ved denne ejendomsvurdering | [optional]
**legal_subcategory_text** | **mixed** | Tekst der beskriver den juridiske underkategori, som er blevet tildelt ved denne vurdering. | [optional]
**vur_mark** | **mixed** | Angiver kilde-system og type for vurderingen | [optional]
**area_valued** | **mixed** | Vurderet grundareal. Ejendommens samlede vurderede areal i m2 (incl. Vejareal). |
**valuation_area_code** | **mixed** | Underinddeling af en kommune, som benyttes ved vurdering. |
**change_date** | **mixed** | Dato for seneste gældende vurdering. |
**change_code** | **mixed** | Årsagen til ændringen af ejendomsvurderingen. Kode, der angiver type af vurdering eller myndighed, der har afgjort en vurdering. | [optional]
**valuation_property** | [**\OpenAPI\Client\Model\VURValuationProperty**](VURValuationProperty.md) |  | [optional]
**mother_property** | [**\OpenAPI\Client\Model\VURValuationProperty**](VURValuationProperty.md) |  | [optional]
**valued_under** | [**\OpenAPI\Client\Model\VURValuationProperty**](VURValuationProperty.md) |  | [optional]
**land_value_specifications** | **mixed** |  |
**distributions** | **mixed** |  |
**exemptions** | **mixed** |  |
**ceiling** | [**\OpenAPI\Client\Model\VURCeilingResponse**](VURCeilingResponse.md) |  | [optional]
**deduction_for_improvement_overall** | [**\OpenAPI\Client\Model\VURDeductionForImprovementOverallResponse**](VURDeductionForImprovementOverallResponse.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
