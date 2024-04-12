# # RolleModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **mixed** | Hvis der er flere referencer, skal de de alle være for samme juridiske person! Er primært relevant hvis to forskellige personer i rollesamlingen har præcis samme fødselsdag, i det opslag i e-akt på tidligere dokumenter - fx DokumentHentRevisionsspor ikke må inkludere de fire sidste cifre... |
**navn** | **mixed** | Kan være udeladt i opslag, hvis personen har navnebeskyttelse | [optional]
**adresse** | [**\OpenAPI\Client\Model\RolleAdresseModel**](RolleAdresseModel.md) |  | [optional]
**drift_form_virksomhed_form_type_tekst** | **mixed** | Her angives kort tekst der beskriver virksomhedsform fra CVR. | [optional]
**drift_form_kode** | **mixed** | Her angives virksomhedsformkoden fra CVR. | [optional]
**ejendom_koeber_andel_efter_salg** | [**\OpenAPI\Client\Model\BroekModel**](BroekModel.md) |  | [optional]
**ejendom_saelger_andel_efter_salg** | [**\OpenAPI\Client\Model\BroekModel**](BroekModel.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
