# # AnmelderRolleModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **mixed** | CprNummer eller CvrNummer eller Myndighedskode |
**type** | [**\OpenAPI\Client\Model\RolleTypeEnum**](RolleTypeEnum.md) |  | [optional]
**rolle_id** | **mixed** | CprNummer eller CvrNummer eller Myndighedskode | [optional]
**rolle_type** | [**\OpenAPI\Client\Model\AnmelderTypeEnum**](AnmelderTypeEnum.md) |  | [optional]
**navn** | **mixed** | Navn | [optional]
**stilling** | **mixed** | Stillingsbetegnelse | [optional]
**telefon** | **mixed** | Telefon | [optional]
**email** | **mixed** | Email | [optional]
**email_samling** | **mixed** | Samling af maksimalt 10 Email af referencer | [optional]
**adresse** | [**\OpenAPI\Client\Model\RolleAdresseModel**](RolleAdresseModel.md) |  | [optional]
**adresse_tekst** | **mixed** | Addressetekst | [optional]
**ejendom_paataleberettiget** | [**\OpenAPI\Client\Model\EjendomIdentifikatorModel**](EjendomIdentifikatorModel.md) |  | [optional]
**herskende_ejendom** | **mixed** | True betyder at den påtalende ejendom er herskende. False angiver at den påtalende ikke er herskende. | [optional]
**saelger_andel** | [**\OpenAPI\Client\Model\BroekModel**](BroekModel.md) |  | [optional]
**koeber_andel** | [**\OpenAPI\Client\Model\BroekModel**](BroekModel.md) |  | [optional]
**rolle_reference_samling** | **mixed** | Angiver en reference til en Rolle i anmeldelsen via id atributten på Rolle elementet. | [optional]
**underskrift_ikke_noedvendig_indikator** | **mixed** | True, betyder at rollen ikke skal signere og derved ikke vil fremgå i rollens underskriftsmappe. False, betyder at rollen skal signere og derved vil fremgå i rollens underskriftsmappe. | [optional]
**underskrift_ikke_noedvendig_begrundelse** | **mixed** | Begrundelse for, hvorfor der ikke skal skrives under. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
