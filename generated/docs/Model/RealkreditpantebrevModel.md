# # RealkreditpantebrevModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**beloeb** | **mixed** | Hovedstolen for et lån. |
**valuta** | **mixed** | ISO 4217 valutakode. | [optional]
**refinansiering** | [**\OpenAPI\Client\Model\RefinansieringModel**](RefinansieringModel.md) |  | [optional]
**indeksregulering_indikator** | **mixed** | Angiver om hovedstol og restgaeld paa en haeftelse er indeksreguleret og svarer til saerlige laanevilkaar for indeksregulering. |
**laan** | **mixed** | Lån indeholdt i pantebrev |
**kreditorbetegnelse_tekst** | [**\OpenAPI\Client\Model\TekstGruppeNestedModel**](TekstGruppeNestedModel.md) |  | [optional]
**loebetid** | [**\OpenAPI\Client\Model\LoebetidModel**](LoebetidModel.md) |  | [optional]
**vilkaar_rente** | [**\OpenAPI\Client\Model\HaeftelseVilkaarRenteModel**](HaeftelseVilkaarRenteModel.md) |  | [optional]
**vilkaar_betaling** | [**\OpenAPI\Client\Model\VilkaarBetalingModel**](VilkaarBetalingModel.md) |  | [optional]
**vilkaar_opsigelse** | [**\OpenAPI\Client\Model\VilkaarOpsigelseModel**](VilkaarOpsigelseModel.md) |  | [optional]
**oprykningsret_indikator** | **mixed** | True angiver at haeftelsen er med oprykningsret. False angiver at automatisk oprykningsret er fravalgt. |
**saerlig_bestemmelse_samling** | **mixed** | Samling af saerlige bestemmelser og individuelle vilkaar som anvendes i haeftelser | [optional]
**anden_tekst_samling** | **mixed** | Samling af anden tekst som anvendes i haeftelser | [optional]
**personligt_gaeldsansvar_samling** | **mixed** | PersonligtGaeldsansvarSamling | [optional]
**klausul_rekta_indikator** | **mixed** | Angiver om hæftelsen har eller ikke har rektaklausul. True angiver at haeftelsen har rektaklausul. False angiver at haeftelsen ikke har rektaklausul. |
**retsforfoelgningsforbud_indikator** | **mixed** | Angiver om der er forbud mod retsforfølgning i forbindelse med hæftelsen. Resulterer i teksten Dette pantebrev kan ikke gøres til genstand for individuel retsforfølgning. |
**saerlig_lovgivning** | [**\OpenAPI\Client\Model\SaerligLovgivningModel**](SaerligLovgivningModel.md) |  | [optional]
**pantebrev_formular_lovpligtig_kode** | [**\OpenAPI\Client\Model\HaeftelsePantebrevFormularLovpligtigKodeEnum**](HaeftelsePantebrevFormularLovpligtigKodeEnum.md) |  | [optional]
**fuldmagt_anmeldt_samling** | **mixed** | Samling af anmeldte fuldmagter. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
