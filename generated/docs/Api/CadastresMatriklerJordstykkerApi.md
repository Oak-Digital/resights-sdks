# OpenAPI\Client\CadastresMatriklerJordstykkerApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCadastreById()**](CadastresMatriklerJordstykkerApi.md#getCadastreById) | **GET** /api/v2/cadastres/{id} | Get Cadastre By Id |
| [**getCadastres()**](CadastresMatriklerJordstykkerApi.md#getCadastres) | **GET** /api/v2/cadastres | Get Cadastres |
| [**getCadastresAdvanced()**](CadastresMatriklerJordstykkerApi.md#getCadastresAdvanced) | **POST** /api/v2/cadastres | Get Cadastres Advanced |


## `getCadastreById()`

```php
getCadastreById($id, $includes, $excludes): \OpenAPI\Client\Model\CadastreMapGeoJSON
```

Get Cadastre By Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CadastresMatriklerJordstykkerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 112187; // mixed | Jordstykke ID
$includes = NULL; // mixed
$excludes = NULL; // mixed

try {
    $result = $apiInstance->getCadastreById($id, $includes, $excludes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastresMatriklerJordstykkerApi->getCadastreById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**mixed**](../Model/.md)| Jordstykke ID | |
| **includes** | [**mixed**](../Model/.md)|  | [optional] |
| **excludes** | [**mixed**](../Model/.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CadastreMapGeoJSON**](../Model/CadastreMapGeoJSON.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCadastres()`

```php
getCadastres($id, $sfe_number, $land_lot_code, $cadastre_number, $x, $y, $page, $size, $offset, $sort, $order, $includes, $excludes): \OpenAPI\Client\Model\GeoJSONFeatureCollectionCadastreMapGeoJSON
```

Get Cadastres

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CadastresMatriklerJordstykkerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed
$sfe_number = NULL; // mixed
$land_lot_code = NULL; // mixed
$cadastre_number = NULL; // mixed
$x = NULL; // mixed | Longitude. Example: 12.5494
$y = NULL; // mixed | Latitute. Example: 55.6722
$page = NULL; // mixed | Page id for pagination
$size = NULL; // mixed
$offset = NULL; // mixed
$sort = NULL; // mixed
$order = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ResightsApiModelsResponseSortOrder(); // \OpenAPI\Client\Model\ResightsApiModelsResponseSortOrder
$includes = NULL; // mixed
$excludes = NULL; // mixed

try {
    $result = $apiInstance->getCadastres($id, $sfe_number, $land_lot_code, $cadastre_number, $x, $y, $page, $size, $offset, $sort, $order, $includes, $excludes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastresMatriklerJordstykkerApi->getCadastres: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**mixed**](../Model/.md)|  | [optional] |
| **sfe_number** | [**mixed**](../Model/.md)|  | [optional] |
| **land_lot_code** | [**mixed**](../Model/.md)|  | [optional] |
| **cadastre_number** | [**mixed**](../Model/.md)|  | [optional] |
| **x** | [**mixed**](../Model/.md)| Longitude. Example: 12.5494 | [optional] |
| **y** | [**mixed**](../Model/.md)| Latitute. Example: 55.6722 | [optional] |
| **page** | [**mixed**](../Model/.md)| Page id for pagination | [optional] |
| **size** | [**mixed**](../Model/.md)|  | [optional] |
| **offset** | [**mixed**](../Model/.md)|  | [optional] |
| **sort** | [**mixed**](../Model/.md)|  | [optional] |
| **order** | [**\OpenAPI\Client\Model\ResightsApiModelsResponseSortOrder**](../Model/.md)|  | [optional] |
| **includes** | [**mixed**](../Model/.md)|  | [optional] |
| **excludes** | [**mixed**](../Model/.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GeoJSONFeatureCollectionCadastreMapGeoJSON**](../Model/GeoJSONFeatureCollectionCadastreMapGeoJSON.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCadastresAdvanced()`

```php
getCadastresAdvanced($size, $offset, $request_body): \OpenAPI\Client\Model\GeoJSONFeatureCollectionCadastreMapGeoJSON
```

Get Cadastres Advanced

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CadastresMatriklerJordstykkerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$size = NULL; // mixed
$offset = NULL; // mixed
$request_body = {"query":[{"field":"bbox","value":{"top_left":{"lat":55.6674,"lon":12.5479},"bottom_right":{"lat":55.6656,"lon":12.552}}}]}; // array<string,mixed>

try {
    $result = $apiInstance->getCadastresAdvanced($size, $offset, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CadastresMatriklerJordstykkerApi->getCadastresAdvanced: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **size** | [**mixed**](../Model/.md)|  | [optional] |
| **offset** | [**mixed**](../Model/.md)|  | [optional] |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GeoJSONFeatureCollectionCadastreMapGeoJSON**](../Model/GeoJSONFeatureCollectionCadastreMapGeoJSON.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
