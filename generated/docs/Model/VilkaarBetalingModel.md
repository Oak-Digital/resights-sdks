# # VilkaarBetalingModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**betaling_termin_samling** | **mixed** | Angiver terminsperioder og tilhørende forfaldstidspunkter. Skal altid anføres når der er aftalt betalinger af ydelser eller rente på hæftelsen. Er optional i forbindelse med stående lån uden rente. | [optional]
**foerste_betaling_dato** | **mixed** | Dato for betaling af første ydelse. Ikke nødvendig at opgive for realkreditpantebreve. | [optional]
**betaling_termin_foerste** | [**\OpenAPI\Client\Model\BetalingTerminModel**](BetalingTerminModel.md) |  | [optional]
**betaling_termin_sidste** | [**\OpenAPI\Client\Model\BetalingTerminModel**](BetalingTerminModel.md) |  | [optional]
**bidrag** | [**\OpenAPI\Client\Model\HaeftelseBidragModel**](HaeftelseBidragModel.md) |  | [optional]
**betalinger_aarligt_antal** | **mixed** | HaeftelseBetalingerAarligtAntal | [optional]
**morarente** | [**\OpenAPI\Client\Model\MorarenteModel**](MorarenteModel.md) |  | [optional]
**tilbagebetalingsmaade_kode** | [**\OpenAPI\Client\Model\TilbagebetalingsmaadeKodeEnum**](TilbagebetalingsmaadeKodeEnum.md) |  |
**ydelse_aarligt_samlet** | [**\OpenAPI\Client\Model\BeloebModel**](BeloebModel.md) |  | [optional]
**ydelsestype** | [**\OpenAPI\Client\Model\YdelsestypeModel**](YdelsestypeModel.md) |  | [optional]
**afdragsfrihed** | [**\OpenAPI\Client\Model\AfdragsfrihedModel**](AfdragsfrihedModel.md) |  | [optional]
**vilkaar_samling** | **mixed** | HaeftelseVilkaarSamling | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
