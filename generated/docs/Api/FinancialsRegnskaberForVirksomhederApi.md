# OpenAPI\Client\FinancialsRegnskaberForVirksomhederApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getFinancials()**](FinancialsRegnskaberForVirksomhederApi.md#getFinancials) | **GET** /api/v2/cvr/financials | Get Financials |
| [**getFinancialsAdvanced()**](FinancialsRegnskaberForVirksomhederApi.md#getFinancialsAdvanced) | **POST** /api/v2/cvr/financials | Get Financials Advanced |
| [**getFinancialsById()**](FinancialsRegnskaberForVirksomhederApi.md#getFinancialsById) | **GET** /api/v2/cvr/financials/{id} | Get Financials By Id |


## `getFinancials()`

```php
getFinancials($id, $cvr_number, $mne_number, $auditor_cvr_number, $page, $size, $offset, $sort, $order, $includes, $excludes): \OpenAPI\Client\Model\ESResponseModelAnnualReportSimple
```

Get Financials

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FinancialsRegnskaberForVirksomhederApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed
$cvr_number = NULL; // mixed
$mne_number = NULL; // mixed
$auditor_cvr_number = NULL; // mixed
$page = NULL; // mixed | Page id for pagination
$size = NULL; // mixed
$offset = NULL; // mixed
$sort = NULL; // mixed
$order = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ResightsApiModelsResponseSortOrder(); // \OpenAPI\Client\Model\ResightsApiModelsResponseSortOrder
$includes = NULL; // mixed
$excludes = NULL; // mixed

try {
    $result = $apiInstance->getFinancials($id, $cvr_number, $mne_number, $auditor_cvr_number, $page, $size, $offset, $sort, $order, $includes, $excludes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinancialsRegnskaberForVirksomhederApi->getFinancials: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**mixed**](../Model/.md)|  | [optional] |
| **cvr_number** | [**mixed**](../Model/.md)|  | [optional] |
| **mne_number** | [**mixed**](../Model/.md)|  | [optional] |
| **auditor_cvr_number** | [**mixed**](../Model/.md)|  | [optional] |
| **page** | [**mixed**](../Model/.md)| Page id for pagination | [optional] |
| **size** | [**mixed**](../Model/.md)|  | [optional] |
| **offset** | [**mixed**](../Model/.md)|  | [optional] |
| **sort** | [**mixed**](../Model/.md)|  | [optional] |
| **order** | [**\OpenAPI\Client\Model\ResightsApiModelsResponseSortOrder**](../Model/.md)|  | [optional] |
| **includes** | [**mixed**](../Model/.md)|  | [optional] |
| **excludes** | [**mixed**](../Model/.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ESResponseModelAnnualReportSimple**](../Model/ESResponseModelAnnualReportSimple.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFinancialsAdvanced()`

```php
getFinancialsAdvanced($size, $offset, $request_body): \OpenAPI\Client\Model\ESResponseModelAnnualReportSimple
```

Get Financials Advanced

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FinancialsRegnskaberForVirksomhederApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$size = NULL; // mixed
$offset = NULL; // mixed
$request_body = {"source":{"includes":["figures"]},"query":[{"field":"cvr_number","value":"41527080"}],"sort":{"field":"accounting_period_end","order":"desc"}}; // array<string,mixed>

try {
    $result = $apiInstance->getFinancialsAdvanced($size, $offset, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinancialsRegnskaberForVirksomhederApi->getFinancialsAdvanced: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **size** | [**mixed**](../Model/.md)|  | [optional] |
| **offset** | [**mixed**](../Model/.md)|  | [optional] |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ESResponseModelAnnualReportSimple**](../Model/ESResponseModelAnnualReportSimple.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFinancialsById()`

```php
getFinancialsById($id, $includes, $excludes): \OpenAPI\Client\Model\AnnualReportSimple
```

Get Financials By Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FinancialsRegnskaberForVirksomhederApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 32067108; // mixed | UUID of a trade
$includes = NULL; // mixed
$excludes = NULL; // mixed

try {
    $result = $apiInstance->getFinancialsById($id, $includes, $excludes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinancialsRegnskaberForVirksomhederApi->getFinancialsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**mixed**](../Model/.md)| UUID of a trade | |
| **includes** | [**mixed**](../Model/.md)|  | [optional] |
| **excludes** | [**mixed**](../Model/.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AnnualReportSimple**](../Model/AnnualReportSimple.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
