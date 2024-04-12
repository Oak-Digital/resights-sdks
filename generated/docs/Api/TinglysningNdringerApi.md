# OpenAPI\Client\TinglysningNdringerApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getChangesFromToAndelsbolig()**](TinglysningNdringerApi.md#getChangesFromToAndelsbolig) | **GET** /api/v2/tinglysning/changes/andelsbolig | Get Changes From To Andelsbolig |
| [**getChangesFromToPersonCompany()**](TinglysningNdringerApi.md#getChangesFromToPersonCompany) | **GET** /api/v2/tinglysning/changes/person-company | Get Changes From To Person Company |
| [**getChangesFromToProperties()**](TinglysningNdringerApi.md#getChangesFromToProperties) | **GET** /api/v2/tinglysning/changes/properties | Get Changes From To Properties |
| [**getChangesFromToVehicles()**](TinglysningNdringerApi.md#getChangesFromToVehicles) | **GET** /api/v2/tinglysning/changes/vehicles | Get Changes From To Vehicles |
| [**getChangesLatest()**](TinglysningNdringerApi.md#getChangesLatest) | **GET** /api/v2/tinglysning/changes/latest | Get Changes Latest |


## `getChangesFromToAndelsbolig()`

```php
getChangesFromToAndelsbolig($date_from, $date_to, $page): mixed
```

Get Changes From To Andelsbolig

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TinglysningNdringerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$date_from = 2023-12-29; // mixed | Dato fra
$date_to = 2023-12-30; // mixed | Dato til
$page = 1; // mixed | Side

try {
    $result = $apiInstance->getChangesFromToAndelsbolig($date_from, $date_to, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TinglysningNdringerApi->getChangesFromToAndelsbolig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **date_from** | [**mixed**](../Model/.md)| Dato fra | |
| **date_to** | [**mixed**](../Model/.md)| Dato til | |
| **page** | [**mixed**](../Model/.md)| Side | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChangesFromToPersonCompany()`

```php
getChangesFromToPersonCompany($date_from, $date_to, $page): mixed
```

Get Changes From To Person Company

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TinglysningNdringerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$date_from = 2023-12-29; // mixed | Dato fra
$date_to = 2023-12-30; // mixed | Dato til
$page = 1; // mixed | Side

try {
    $result = $apiInstance->getChangesFromToPersonCompany($date_from, $date_to, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TinglysningNdringerApi->getChangesFromToPersonCompany: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **date_from** | [**mixed**](../Model/.md)| Dato fra | |
| **date_to** | [**mixed**](../Model/.md)| Dato til | |
| **page** | [**mixed**](../Model/.md)| Side | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChangesFromToProperties()`

```php
getChangesFromToProperties($date_from, $date_to, $page): mixed
```

Get Changes From To Properties

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TinglysningNdringerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$date_from = 2023-12-29; // mixed | Dato fra
$date_to = 2023-12-30; // mixed | Dato til
$page = 1; // mixed | Side

try {
    $result = $apiInstance->getChangesFromToProperties($date_from, $date_to, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TinglysningNdringerApi->getChangesFromToProperties: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **date_from** | [**mixed**](../Model/.md)| Dato fra | |
| **date_to** | [**mixed**](../Model/.md)| Dato til | |
| **page** | [**mixed**](../Model/.md)| Side | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChangesFromToVehicles()`

```php
getChangesFromToVehicles($date_from, $date_to, $page): mixed
```

Get Changes From To Vehicles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TinglysningNdringerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$date_from = 2023-12-29; // mixed | Dato fra
$date_to = 2023-12-30; // mixed | Dato til
$page = 1; // mixed | Side

try {
    $result = $apiInstance->getChangesFromToVehicles($date_from, $date_to, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TinglysningNdringerApi->getChangesFromToVehicles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **date_from** | [**mixed**](../Model/.md)| Dato fra | |
| **date_to** | [**mixed**](../Model/.md)| Dato til | |
| **page** | [**mixed**](../Model/.md)| Side | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChangesLatest()`

```php
getChangesLatest($land_lot, $cadastre_number): \OpenAPI\Client\Model\TinglysningChangeLatestResponse
```

Get Changes Latest

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TinglysningNdringerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$land_lot = 2000174; // mixed | Vejnavn
$cadastre_number = 52b; // mixed | Matrikelnummer

try {
    $result = $apiInstance->getChangesLatest($land_lot, $cadastre_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TinglysningNdringerApi->getChangesLatest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **land_lot** | [**mixed**](../Model/.md)| Vejnavn | |
| **cadastre_number** | [**mixed**](../Model/.md)| Matrikelnummer | |

### Return type

[**\OpenAPI\Client\Model\TinglysningChangeLatestResponse**](../Model/TinglysningChangeLatestResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
