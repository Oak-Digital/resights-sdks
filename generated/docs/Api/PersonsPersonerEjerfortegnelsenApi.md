# OpenAPI\Client\PersonsPersonerEjerfortegnelsenApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getEjfOtherById()**](PersonsPersonerEjerfortegnelsenApi.md#getEjfOtherById) | **GET** /api/v2/ejf/others/{id} | Get Ejf Other By Id |
| [**getEjfOthers()**](PersonsPersonerEjerfortegnelsenApi.md#getEjfOthers) | **GET** /api/v2/ejf/others | Get Ejf Others |
| [**getEjfOthersAdvanced()**](PersonsPersonerEjerfortegnelsenApi.md#getEjfOthersAdvanced) | **POST** /api/v2/ejf/others | Get Ejf Others Advanced |
| [**getEjfPersonById()**](PersonsPersonerEjerfortegnelsenApi.md#getEjfPersonById) | **GET** /api/v2/ejf/persons/{id} | Get Ejf Person By Id |
| [**getEjfPersonPortfolioById()**](PersonsPersonerEjerfortegnelsenApi.md#getEjfPersonPortfolioById) | **GET** /api/v2/ejf/persons/{id}/portfolio | Get Ejf Person Portfolio By Id |
| [**getEjfPersons()**](PersonsPersonerEjerfortegnelsenApi.md#getEjfPersons) | **GET** /api/v2/ejf/persons | Get Ejf Persons |
| [**getEjfPersonsAdvanced()**](PersonsPersonerEjerfortegnelsenApi.md#getEjfPersonsAdvanced) | **POST** /api/v2/ejf/persons | Get Ejf Persons Advanced |


## `getEjfOtherById()`

```php
getEjfOtherById($id, $includes, $excludes): \OpenAPI\Client\Model\EJFOwnerOtherResponse
```

Get Ejf Other By Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PersonsPersonerEjerfortegnelsenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 9b42ea99-2956-0344-9a6b-ea1f0c2b69bd; // mixed | UUID of an EJF other
$includes = NULL; // mixed
$excludes = NULL; // mixed

try {
    $result = $apiInstance->getEjfOtherById($id, $includes, $excludes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonsPersonerEjerfortegnelsenApi->getEjfOtherById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**mixed**](../Model/.md)| UUID of an EJF other | |
| **includes** | [**mixed**](../Model/.md)|  | [optional] |
| **excludes** | [**mixed**](../Model/.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EJFOwnerOtherResponse**](../Model/EJFOwnerOtherResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEjfOthers()`

```php
getEjfOthers($id, $name, $page, $size, $offset, $sort, $order, $includes, $excludes): \OpenAPI\Client\Model\ESResponseModelEJFOwnerOtherResponse
```

Get Ejf Others

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PersonsPersonerEjerfortegnelsenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed
$name = NULL; // mixed
$page = NULL; // mixed | Page id for pagination
$size = NULL; // mixed
$offset = NULL; // mixed
$sort = NULL; // mixed
$order = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ResightsApiModelsResponseSortOrder(); // \OpenAPI\Client\Model\ResightsApiModelsResponseSortOrder
$includes = NULL; // mixed
$excludes = NULL; // mixed

try {
    $result = $apiInstance->getEjfOthers($id, $name, $page, $size, $offset, $sort, $order, $includes, $excludes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonsPersonerEjerfortegnelsenApi->getEjfOthers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**mixed**](../Model/.md)|  | [optional] |
| **name** | [**mixed**](../Model/.md)|  | [optional] |
| **page** | [**mixed**](../Model/.md)| Page id for pagination | [optional] |
| **size** | [**mixed**](../Model/.md)|  | [optional] |
| **offset** | [**mixed**](../Model/.md)|  | [optional] |
| **sort** | [**mixed**](../Model/.md)|  | [optional] |
| **order** | [**\OpenAPI\Client\Model\ResightsApiModelsResponseSortOrder**](../Model/.md)|  | [optional] |
| **includes** | [**mixed**](../Model/.md)|  | [optional] |
| **excludes** | [**mixed**](../Model/.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ESResponseModelEJFOwnerOtherResponse**](../Model/ESResponseModelEJFOwnerOtherResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEjfOthersAdvanced()`

```php
getEjfOthersAdvanced($size, $offset, $request_body): \OpenAPI\Client\Model\ESResponseModelEJFOwnerOtherResponse
```

Get Ejf Others Advanced

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PersonsPersonerEjerfortegnelsenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$size = NULL; // mixed
$offset = NULL; // mixed
$request_body = NULL; // array<string,mixed>

try {
    $result = $apiInstance->getEjfOthersAdvanced($size, $offset, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonsPersonerEjerfortegnelsenApi->getEjfOthersAdvanced: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **size** | [**mixed**](../Model/.md)|  | [optional] |
| **offset** | [**mixed**](../Model/.md)|  | [optional] |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ESResponseModelEJFOwnerOtherResponse**](../Model/ESResponseModelEJFOwnerOtherResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEjfPersonById()`

```php
getEjfPersonById($id, $includes, $excludes): \OpenAPI\Client\Model\EJFOwnerPersonResponse
```

Get Ejf Person By Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PersonsPersonerEjerfortegnelsenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = bc322bd7-2f42-48af-84d7-3dc78d7e6323; // mixed | UUID of an EJF Person
$includes = NULL; // mixed
$excludes = NULL; // mixed

try {
    $result = $apiInstance->getEjfPersonById($id, $includes, $excludes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonsPersonerEjerfortegnelsenApi->getEjfPersonById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**mixed**](../Model/.md)| UUID of an EJF Person | |
| **includes** | [**mixed**](../Model/.md)|  | [optional] |
| **excludes** | [**mixed**](../Model/.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EJFOwnerPersonResponse**](../Model/EJFOwnerPersonResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEjfPersonPortfolioById()`

```php
getEjfPersonPortfolioById($id): \OpenAPI\Client\Model\PortfolioAggs
```

Get Ejf Person Portfolio By Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PersonsPersonerEjerfortegnelsenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 67f0e13c-9042-4a5f-8f74-d324f4f54e6c; // mixed | Either unit number of a CVR member or an EJF id

try {
    $result = $apiInstance->getEjfPersonPortfolioById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonsPersonerEjerfortegnelsenApi->getEjfPersonPortfolioById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**mixed**](../Model/.md)| Either unit number of a CVR member or an EJF id | |

### Return type

[**\OpenAPI\Client\Model\PortfolioAggs**](../Model/PortfolioAggs.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEjfPersons()`

```php
getEjfPersons($id, $unit_number, $name, $x, $y, $distance, $page, $size, $offset, $sort, $order, $includes, $excludes): \OpenAPI\Client\Model\ESResponseModelEJFOwnerPersonResponse
```

Get Ejf Persons

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PersonsPersonerEjerfortegnelsenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed
$unit_number = NULL; // mixed
$name = NULL; // mixed
$x = NULL; // mixed | Longitude. Example: 12.5494
$y = NULL; // mixed | Latitute. Example: 55.6722
$distance = 100m; // mixed | Distance from x, y
$page = NULL; // mixed | Page id for pagination
$size = NULL; // mixed
$offset = NULL; // mixed
$sort = NULL; // mixed
$order = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ResightsApiModelsResponseSortOrder(); // \OpenAPI\Client\Model\ResightsApiModelsResponseSortOrder
$includes = NULL; // mixed
$excludes = NULL; // mixed

try {
    $result = $apiInstance->getEjfPersons($id, $unit_number, $name, $x, $y, $distance, $page, $size, $offset, $sort, $order, $includes, $excludes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonsPersonerEjerfortegnelsenApi->getEjfPersons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**mixed**](../Model/.md)|  | [optional] |
| **unit_number** | [**mixed**](../Model/.md)|  | [optional] |
| **name** | [**mixed**](../Model/.md)|  | [optional] |
| **x** | [**mixed**](../Model/.md)| Longitude. Example: 12.5494 | [optional] |
| **y** | [**mixed**](../Model/.md)| Latitute. Example: 55.6722 | [optional] |
| **distance** | [**mixed**](../Model/.md)| Distance from x, y | [optional] |
| **page** | [**mixed**](../Model/.md)| Page id for pagination | [optional] |
| **size** | [**mixed**](../Model/.md)|  | [optional] |
| **offset** | [**mixed**](../Model/.md)|  | [optional] |
| **sort** | [**mixed**](../Model/.md)|  | [optional] |
| **order** | [**\OpenAPI\Client\Model\ResightsApiModelsResponseSortOrder**](../Model/.md)|  | [optional] |
| **includes** | [**mixed**](../Model/.md)|  | [optional] |
| **excludes** | [**mixed**](../Model/.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ESResponseModelEJFOwnerPersonResponse**](../Model/ESResponseModelEJFOwnerPersonResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEjfPersonsAdvanced()`

```php
getEjfPersonsAdvanced($size, $offset, $request_body): \OpenAPI\Client\Model\ESResponseModelEJFOwnerPersonResponse
```

Get Ejf Persons Advanced

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PersonsPersonerEjerfortegnelsenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$size = NULL; // mixed
$offset = NULL; // mixed
$request_body = NULL; // array<string,mixed>

try {
    $result = $apiInstance->getEjfPersonsAdvanced($size, $offset, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonsPersonerEjerfortegnelsenApi->getEjfPersonsAdvanced: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **size** | [**mixed**](../Model/.md)|  | [optional] |
| **offset** | [**mixed**](../Model/.md)|  | [optional] |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ESResponseModelEJFOwnerPersonResponse**](../Model/ESResponseModelEJFOwnerPersonResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
