# OpenAPI\Client\TinglysningPersonVirksomhedApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPersonCompanyByUuid()**](TinglysningPersonVirksomhedApi.md#getPersonCompanyByUuid) | **GET** /api/v2/tinglysning/person-company/{uuid} | Get Person Company By Uuid |
| [**searchCompanyByCvrNumber()**](TinglysningPersonVirksomhedApi.md#searchCompanyByCvrNumber) | **GET** /api/v2/tinglysning/company/search/cvr-number/{cvr_number} | Search Company By Cvr Number |
| [**searchPersonByCprNumber()**](TinglysningPersonVirksomhedApi.md#searchPersonByCprNumber) | **GET** /api/v2/tinglysning/person/search/cpr-number/{cpr_number} | Search Person By Cpr Number |
| [**searchPersonByName()**](TinglysningPersonVirksomhedApi.md#searchPersonByName) | **GET** /api/v2/tinglysning/person/search/name | Search Person By Name |


## `getPersonCompanyByUuid()`

```php
getPersonCompanyByUuid($uuid): \OpenAPI\Client\Model\PersonbogsattestModel
```

Get Person Company By Uuid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TinglysningPersonVirksomhedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 55cfb9da-d2c9-48c7-9f78-6e6cd317e7ba; // mixed

try {
    $result = $apiInstance->getPersonCompanyByUuid($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TinglysningPersonVirksomhedApi->getPersonCompanyByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | [**mixed**](../Model/.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PersonbogsattestModel**](../Model/PersonbogsattestModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchCompanyByCvrNumber()`

```php
searchCompanyByCvrNumber($cvr_number): mixed
```

Search Company By Cvr Number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TinglysningPersonVirksomhedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cvr_number = 19302342; // mixed | CVR-nummer

try {
    $result = $apiInstance->searchCompanyByCvrNumber($cvr_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TinglysningPersonVirksomhedApi->searchCompanyByCvrNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cvr_number** | [**mixed**](../Model/.md)| CVR-nummer | |

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

## `searchPersonByCprNumber()`

```php
searchPersonByCprNumber($cpr_number, $name): mixed
```

Search Person By Cpr Number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TinglysningPersonVirksomhedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cpr_number = NULL; // mixed
$name = NULL; // mixed

try {
    $result = $apiInstance->searchPersonByCprNumber($cpr_number, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TinglysningPersonVirksomhedApi->searchPersonByCprNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cpr_number** | [**mixed**](../Model/.md)|  | |
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

## `searchPersonByName()`

```php
searchPersonByName($name, $birth_date): mixed
```

Search Person By Name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TinglysningPersonVirksomhedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = Boet efter Michael Antitsch Mortensen; // mixed | Navn
$birth_date = 14.03.1972; // mixed | Fødselsdato

try {
    $result = $apiInstance->searchPersonByName($name, $birth_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TinglysningPersonVirksomhedApi->searchPersonByName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | [**mixed**](../Model/.md)| Navn | |
| **birth_date** | [**mixed**](../Model/.md)| Fødselsdato | |

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
