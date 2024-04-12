# # TransactionResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **mixed** | Transaction ID from either EJF or internal ID |
**type** | [**\OpenAPI\Client\Model\TransactionTypeEnum**](TransactionTypeEnum.md) |  |
**trade_type** | [**\OpenAPI\Client\Model\TransactionTradeTypeEnum**](TransactionTradeTypeEnum.md) |  |
**title** | **mixed** | Transaction title which is taken either automatically based on the address or from manually reported field |
**trade_date** | **mixed** | We need to make research how to calculate this in the best way |
**trade_method** | [**\OpenAPI\Client\Model\AcquisitionMethodEnum**](AcquisitionMethodEnum.md) |  | [optional]
**asset_type** | [**\OpenAPI\Client\Model\TransactionAssetTypeEnum**](TransactionAssetTypeEnum.md) |  |
**asset_stage** | [**\OpenAPI\Client\Model\TransactionAssetStageEnum**](TransactionAssetStageEnum.md) |  |
**buyers** | **mixed** |  |
**sellers** | **mixed** |  |
**municipality_code** | **mixed** |  | [optional]
**municipality_codes** | **mixed** |  |
**zip_code** | **mixed** |  | [optional]
**zip_codes** | **mixed** |  |
**street_code** | **mixed** |  | [optional]
**street_codes** | **mixed** |  |
**price** | [**\OpenAPI\Client\Model\TransactionMeasurePriceResponse**](TransactionMeasurePriceResponse.md) |  |
**area** | [**\OpenAPI\Client\Model\TransactionMeasureResponse**](TransactionMeasureResponse.md) |  | [optional]
**sqm_price** | [**\OpenAPI\Client\Model\TransactionMeasureSqmResponse**](TransactionMeasureSqmResponse.md) |  | [optional]
**cap_rate** | [**\OpenAPI\Client\Model\TransactionMeasureCapRateResponse**](TransactionMeasureCapRateResponse.md) |  | [optional]
**enriched** | **mixed** | Whether this transaction has been enriched by Resights |
**centroid** | **mixed** |  | [optional]
**comment** | **mixed** |  | [optional]
**advisors** | **mixed** |  |
**properties** | **mixed** |  |
**sources** | **mixed** |  |
**economy** | [**\OpenAPI\Client\Model\TransactionProspectusESModel**](TransactionProspectusESModel.md) |  | [optional]
**stats** | [**\OpenAPI\Client\Model\TransactionStatsResponse**](TransactionStatsResponse.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
