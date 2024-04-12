# # MatrikelStrukturModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ejerlav_navn** | **mixed** | Den tekstmæssige betegnelse af et ejerlav. Ejerlavsbetegnelsen er ikke entydig. | [optional]
**ejerlav_kode** | **mixed** | En på landsbasis entydig identifikation af et ejerlav. | [optional]
**matrikelnummer** | **mixed** | Entydig identifikation af en flade/parcel (matrikel) inden for et ejerlav. Ikke entydig på landsplan uden LandsejerlavsKoden | [optional]
**faelleslod** | [**\OpenAPI\Client\Model\BroekModel**](BroekModel.md) |  | [optional]
**delareal** | [**\OpenAPI\Client\Model\DelarealModel**](DelarealModel.md) |  | [optional]
**faelles_ejendom_id** | **mixed** | Også kaldet e-ref. UUID der identificere en ejendom på tværs af alle ejendomsregistre som fx tinglysning, kms, skat mv. | [optional]
**areal** | **mixed** | Indeholder grundarealets størrelse angivet for matrikel. Informationen er en berigelse, der sket under prøvelsen. Informationen stammer fra Tinglysningsretten. |
**dato_for_godkendelse** | **mixed** | Indeholder matriklens approbationsdato, dvs. dato for godkendelse. |
**vejareal** | **mixed** | Det areal af et jordstykke (matrikel), der udgøres af vej. Værdien angives som heltal i kvadratmeter. | [optional]
**retskreds** | **mixed** | Den af de tidligere 82 retskredse, som ejendommen tilhørte. | [optional]
**notering_tekst_samling** | **mixed** | Samling af noteringer på matriklen | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
