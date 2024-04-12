# # EjerpantebrevFastEjendomModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**beloeb** | **mixed** | Hovedstolen for et lån. |
**valuta** | **mixed** | ISO 4217 valutakode. | [optional]
**vilkaar_opskrivning** | [**\OpenAPI\Client\Model\VilkaarOpskrivningModel**](VilkaarOpskrivningModel.md) |  | [optional]
**vilkaar_rente** | [**\OpenAPI\Client\Model\HaeftelseVilkaarRenteModel**](HaeftelseVilkaarRenteModel.md) |  |
**vilkaar_opsigelse_samling** | **mixed** | HaeftelseVilkaarOpsigelseSamling | [optional]
**oprykningsret_indikator** | **mixed** | True angiver at haeftelsen er med oprykningsret. False angiver at automatisk oprykningsret er fravalgt. |
**saerlig_bestemmelse_samling** | **mixed** | Samling af saerlige bestemmelser og individuelle vilkaar som anvendes i haeftelser | [optional]
**anden_tekst_samling** | **mixed** | Samling af anden tekst som anvendes i haeftelser | [optional]
**klausul_rekta_indikator** | **mixed** | Angiver om hæftelsen har eller ikke har rektaklausul. True angiver at haeftelsen har rektaklausul. False angiver at haeftelsen ikke har rektaklausul. |
**retsforfoelgningsforbud_indikator** | **mixed** | Angiver om der er forbud mod retsforfølgning i forbindelse med hæftelsen. Resulterer i teksten Dette pantebrev kan ikke gøres til genstand for individuel retsforfølgning. |
**fuldmagt_anmeldt_samling** | **mixed** | Samling af anmeldte fuldmagter. | [optional]
**pantebrev_formular_lovpligtig_kode** | [**\OpenAPI\Client\Model\HaeftelsePantebrevFormularLovpligtigKodeEnum**](HaeftelsePantebrevFormularLovpligtigKodeEnum.md) |  | [optional]
**underpant_indikator** | **mixed** | Hvis true, indgår underpantbeløb med samme værdi som hæftelsesbeløb. Hvis false indgår ikke underpant. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
