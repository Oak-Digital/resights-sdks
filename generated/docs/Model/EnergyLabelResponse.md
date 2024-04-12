# # EnergyLabelResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**energy_label_id** | **mixed** | Energimærkningsnummer |
**id** | **mixed** | Identitetsstreng på ”entitet” (energimærkning i søgeresultat) Vil være det samme som energimærkningsnummeret, men det kan evt. ændre sig. |
**energy_label** | **mixed** | Energimærket er et udtryk for bygningens energieffektivitet. Energieffektiviteten beskrives på en skala med mærkerne A2020, A2015, A2010, B, C, D, E, F og G. | [optional]
**energy_label_based_on** | **mixed** | Grundlag for energimærkning (fx CalculatedConsumption) |
**energy_label_type_usage** | **mixed** | Anvendelse (fx SingleFamily) |
**status** | **mixed** | Tekst på enum-værdien af status_code |
**status_code** | **mixed** | 0: UNSPECIFIED ERROR - Uspecificeret fejl 1: VALID - Energimærkning er gyldig 2: INCOMPATIBLE - Energimærkning er gyldig, men indberetningsformat et er ikke understøttet 3: EXPIRED - Fås normalt ikke, da udløbne energimærker frasorteres 4: CORRECTED - Der er indsendt en korrektion til energimærket 5: INVALID - Energimærket er ugyldigt 6: INCOMPLETE - Energimærket er ikke komplet |
**esr_number** | **mixed** | Kommunekode + ejendomsnummer. |
**muncipality_code** | **mixed** | Kommunekode i BBR-nummer |
**property_number** | **mixed** | Ejendomsnummer i BBR-nummer. Some property numbers are invalid. |
**building_number** | **mixed** | Bygningsnummer i BBR-nummer. Hvis energimærkning omfatter flere bygninger, så angivers alle bygningsnumre adskilt med komma. |
**usage_code** | **mixed** | Anvendelseskode (på indberetningstidspunktet) |
**construction_year** | **mixed** | Opførelsesår. Hvis energimærkning omfatter flere bygninger, så angives alle opføreslesår adskilt med komma |
**heat_supply** | **mixed** | Primær energikilde til opvarmning | [optional]
**link** | **mixed** | Hvis anvendelseskoden er 110, 120, eller 130, så angives link til den digitale energimærkningsordning på adressen. I øvrige tilfælde angives link til pdf-dokument på energimærkning. |
**has_pdf** | **mixed** | PDF rapport er tilgængelig |
**has_xml** | **mixed** | XML på indberetning er tilgængelig. |
**is_hidden** | **mixed** | ?? |
**is_mixed_usage** | **mixed** | true/false ved ikke hvad det betyder |
**schema_version** | **mixed** | Indberetningsformat på XML |
**submitter_company_id** | **mixed** | Id på firma. | [optional]
**submitter_company_name** | **mixed** | Navn på firma som energikonsulent er tilknyttet. |
**submitter_consultant_name** | **mixed** | Navn på energikonsulent | [optional]
**valid_from** | **mixed** | Gyldighedsdato fra (YYYY-MM-DD) |
**valid_to** | **mixed** | Gyldighedsdato til (YYYY-MM-DD) |
**street_name** | **mixed** | Vejnavn |
**house_number** | **mixed** | Husnummer | [optional]
**zip_name** | **mixed** | Bynavn | [optional]
**zip_code** | **mixed** | Postnummer | [optional]
**geom** | **mixed** | Angiver koordinatet for bygningen energimærket omhandler. | [optional]
**overview** | [**\OpenAPI\Client\Model\EnergyLabelOverviewResponse**](EnergyLabelOverviewResponse.md) |  | [optional]
**calculation** | [**\OpenAPI\Client\Model\EnergyLabelCalculation**](EnergyLabelCalculation.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
