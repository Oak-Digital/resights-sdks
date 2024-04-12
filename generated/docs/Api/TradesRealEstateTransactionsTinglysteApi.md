# OpenAPI\Client\TradesRealEstateTransactionsTinglysteApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPortfolioTrades()**](TradesRealEstateTransactionsTinglysteApi.md#getPortfolioTrades) | **GET** /api/v2/trades/portfolio/{type}/{id} | Get Portfolio Trades |
| [**getTradeById()**](TradesRealEstateTransactionsTinglysteApi.md#getTradeById) | **GET** /api/v2/trades/{id} | Get Trade By Id |
| [**getTrades()**](TradesRealEstateTransactionsTinglysteApi.md#getTrades) | **GET** /api/v2/trades | Get Trades |
| [**getTradesAdvanced()**](TradesRealEstateTransactionsTinglysteApi.md#getTradesAdvanced) | **POST** /api/v2/trades | Get Trades Advanced |


## `getPortfolioTrades()`

```php
getPortfolioTrades($id, $type, $offset, $limit, $include_company_trades, $include_ejf_trades): \OpenAPI\Client\Model\GenericPageResponseModelPortfolioTradeResponse
```

Get Portfolio Trades

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TradesRealEstateTransactionsTinglysteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 4000324968; // mixed | Either UUID of an EJF-person, unit number of a CVR member, or CVR number of a company
$type = NULL; // mixed | Type of the id
$offset = NULL; // mixed
$limit = NULL; // mixed
$include_company_trades = NULL; // mixed
$include_ejf_trades = NULL; // mixed

try {
    $result = $apiInstance->getPortfolioTrades($id, $type, $offset, $limit, $include_company_trades, $include_ejf_trades);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradesRealEstateTransactionsTinglysteApi->getPortfolioTrades: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**mixed**](../Model/.md)| Either UUID of an EJF-person, unit number of a CVR member, or CVR number of a company | |
| **type** | [**mixed**](../Model/.md)| Type of the id | |
| **offset** | [**mixed**](../Model/.md)|  | [optional] |
| **limit** | [**mixed**](../Model/.md)|  | [optional] |
| **include_company_trades** | [**mixed**](../Model/.md)|  | [optional] |
| **include_ejf_trades** | [**mixed**](../Model/.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenericPageResponseModelPortfolioTradeResponse**](../Model/GenericPageResponseModelPortfolioTradeResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTradeById()`

```php
getTradeById($id, $includes, $excludes): \OpenAPI\Client\Model\EJFTradeResponse
```

Get Trade By Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TradesRealEstateTransactionsTinglysteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 7be17e8f-f949-fc42-b7fe-ee36c72e2255; // mixed | UUID of a trade
$includes = NULL; // mixed
$excludes = NULL; // mixed

try {
    $result = $apiInstance->getTradeById($id, $includes, $excludes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradesRealEstateTransactionsTinglysteApi->getTradeById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**mixed**](../Model/.md)| UUID of a trade | |
| **includes** | [**mixed**](../Model/.md)|  | [optional] |
| **excludes** | [**mixed**](../Model/.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EJFTradeResponse**](../Model/EJFTradeResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTrades()`

```php
getTrades($id, $ejf_id, $bfe_number, $cvr_number, $page, $size, $offset, $sort, $order, $includes, $excludes): \OpenAPI\Client\Model\ESResponseModelEJFTradeResponse
```

Get Trades

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TradesRealEstateTransactionsTinglysteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed
$ejf_id = NULL; // mixed
$bfe_number = NULL; // mixed
$cvr_number = NULL; // mixed
$page = NULL; // mixed | Page id for pagination
$size = NULL; // mixed
$offset = NULL; // mixed
$sort = NULL; // mixed
$order = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ResightsApiModelsResponseSortOrder(); // \OpenAPI\Client\Model\ResightsApiModelsResponseSortOrder
$includes = NULL; // mixed
$excludes = NULL; // mixed

try {
    $result = $apiInstance->getTrades($id, $ejf_id, $bfe_number, $cvr_number, $page, $size, $offset, $sort, $order, $includes, $excludes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradesRealEstateTransactionsTinglysteApi->getTrades: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**mixed**](../Model/.md)|  | [optional] |
| **ejf_id** | [**mixed**](../Model/.md)|  | [optional] |
| **bfe_number** | [**mixed**](../Model/.md)|  | [optional] |
| **cvr_number** | [**mixed**](../Model/.md)|  | [optional] |
| **page** | [**mixed**](../Model/.md)| Page id for pagination | [optional] |
| **size** | [**mixed**](../Model/.md)|  | [optional] |
| **offset** | [**mixed**](../Model/.md)|  | [optional] |
| **sort** | [**mixed**](../Model/.md)|  | [optional] |
| **order** | [**\OpenAPI\Client\Model\ResightsApiModelsResponseSortOrder**](../Model/.md)|  | [optional] |
| **includes** | [**mixed**](../Model/.md)|  | [optional] |
| **excludes** | [**mixed**](../Model/.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ESResponseModelEJFTradeResponse**](../Model/ESResponseModelEJFTradeResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTradesAdvanced()`

```php
getTradesAdvanced($size, $offset, $request_body): \OpenAPI\Client\Model\ESResponseModelEJFTradeResponse
```

Get Trades Advanced

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TradesRealEstateTransactionsTinglysteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$size = NULL; // mixed
$offset = NULL; // mixed
$request_body = {"source":{"excludes":["owner_changes"]},"query":[{"field":"overview.purchase_price_total_dkk","value":{"gte":10000000}}],"sort":{"field":"registration_from","order":"desc"}}; // array<string,mixed>

try {
    $result = $apiInstance->getTradesAdvanced($size, $offset, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradesRealEstateTransactionsTinglysteApi->getTradesAdvanced: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **size** | [**mixed**](../Model/.md)|  | [optional] |
| **offset** | [**mixed**](../Model/.md)|  | [optional] |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ESResponseModelEJFTradeResponse**](../Model/ESResponseModelEJFTradeResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
