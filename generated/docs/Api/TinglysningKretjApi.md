# OpenAPI\Client\TinglysningKretjApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getBilbogsattestByUuid()**](TinglysningKretjApi.md#getBilbogsattestByUuid) | **GET** /api/v2/tinglysning/bilbogsattest/{uuid} | Get Bilbogsattest By Uuid |
| [**searchVehicleByCvrNumber()**](TinglysningKretjApi.md#searchVehicleByCvrNumber) | **GET** /api/v2/tinglysning/vehicle/search/cvr-number/{cvr_number} | Search Vehicle By Cvr Number |
| [**searchVehicleById()**](TinglysningKretjApi.md#searchVehicleById) | **GET** /api/v2/tinglysning/vehicle/search/id/{id} | Search Vehicle By Id |
| [**searchVehicleByPerson()**](TinglysningKretjApi.md#searchVehicleByPerson) | **GET** /api/v2/tinglysning/vehicle/search/person | Search Vehicle By Person |


## `getBilbogsattestByUuid()`

```php
getBilbogsattestByUuid($uuid): \OpenAPI\Client\Model\BilbogsattestModel
```

Get Bilbogsattest By Uuid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TinglysningKretjApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 09c85611-36e1-4fa4-a87d-534d7b0ab83b; // mixed

try {
    $result = $apiInstance->getBilbogsattestByUuid($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TinglysningKretjApi->getBilbogsattestByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | [**mixed**](../Model/.md)|  | |

### Return type

[**\OpenAPI\Client\Model\BilbogsattestModel**](../Model/BilbogsattestModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchVehicleByCvrNumber()`

```php
searchVehicleByCvrNumber($cvr_number): mixed
```

Search Vehicle By Cvr Number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TinglysningKretjApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cvr_number = 35649980; // mixed

try {
    $result = $apiInstance->searchVehicleByCvrNumber($cvr_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TinglysningKretjApi->searchVehicleByCvrNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cvr_number** | [**mixed**](../Model/.md)|  | |

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

## `searchVehicleById()`

```php
searchVehicleById($id): mixed
```

Search Vehicle By Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TinglysningKretjApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = SJNTAAJ12U1001640; // mixed | Stelnummer

try {
    $result = $apiInstance->searchVehicleById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TinglysningKretjApi->searchVehicleById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**mixed**](../Model/.md)| Stelnummer | |

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

## `searchVehicleByPerson()`

```php
searchVehicleByPerson($birth_date, $name): mixed
```

Search Vehicle By Person

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TinglysningKretjApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$birth_date = 20.08.68; // mixed
$name = Jan Ryehauge; // mixed

try {
    $result = $apiInstance->searchVehicleByPerson($birth_date, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TinglysningKretjApi->searchVehicleByPerson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **birth_date** | [**mixed**](../Model/.md)|  | |
| **name** | [**mixed**](../Model/.md)|  | |

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
