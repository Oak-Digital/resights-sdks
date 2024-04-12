# OpenAPI\Client\TinglysningAndelsboligApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAndelsboligattestByUuid()**](TinglysningAndelsboligApi.md#getAndelsboligattestByUuid) | **GET** /api/v2/tinglysning/andelsbolig/attest/{uuid} | Get Andelsboligattest By Uuid |
| [**searchAndelsboligByAddress()**](TinglysningAndelsboligApi.md#searchAndelsboligByAddress) | **GET** /api/v2/tinglysning/andelsbolig/search/address | Search Andelsbolig By Address |
| [**searchAndelsboligByCvrNumber()**](TinglysningAndelsboligApi.md#searchAndelsboligByCvrNumber) | **GET** /api/v2/tinglysning/andelsbolig/search/cvr-number/{cvr_number} | Search Andelsbolig By Cvr Number |
| [**searchAndelsboligByMunicipality()**](TinglysningAndelsboligApi.md#searchAndelsboligByMunicipality) | **GET** /api/v2/tinglysning/andelsbolig/search/municipality | Search Andelsbolig By Municipality |
| [**searchAndelsboligByPerson()**](TinglysningAndelsboligApi.md#searchAndelsboligByPerson) | **GET** /api/v2/tinglysning/andelsbolig/search/person | Search Andelsbolig By Person |
| [**searchAndelsboligByZipCode()**](TinglysningAndelsboligApi.md#searchAndelsboligByZipCode) | **GET** /api/v2/tinglysning/andelsbolig/search/zip_code | Search Andelsbolig By Zip Code |


## `getAndelsboligattestByUuid()`

```php
getAndelsboligattestByUuid($uuid): \OpenAPI\Client\Model\AndelsboligattestModel
```

Get Andelsboligattest By Uuid

Svar understøtter endnu ikke MeddelelseSamling

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TinglysningAndelsboligApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 8b55a0fb-6f57-4e71-8923-9939e3c32567; // mixed | UUID på attest

try {
    $result = $apiInstance->getAndelsboligattestByUuid($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TinglysningAndelsboligApi->getAndelsboligattestByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | [**mixed**](../Model/.md)| UUID på attest | |

### Return type

[**\OpenAPI\Client\Model\AndelsboligattestModel**](../Model/AndelsboligattestModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchAndelsboligByAddress()`

```php
searchAndelsboligByAddress($street_name, $house_number, $zip_code, $floor, $door): mixed
```

Search Andelsbolig By Address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TinglysningAndelsboligApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$street_name = H.C. Ørsteds Vej; // mixed | Vejnavn
$house_number = 34; // mixed | Husnummer
$zip_code = 1879; // mixed | Postnummer
$floor = 3; // mixed | Etage
$door = th; // mixed | Dør

try {
    $result = $apiInstance->searchAndelsboligByAddress($street_name, $house_number, $zip_code, $floor, $door);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TinglysningAndelsboligApi->searchAndelsboligByAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **street_name** | [**mixed**](../Model/.md)| Vejnavn | |
| **house_number** | [**mixed**](../Model/.md)| Husnummer | |
| **zip_code** | [**mixed**](../Model/.md)| Postnummer | |
| **floor** | [**mixed**](../Model/.md)| Etage | [optional] |
| **door** | [**mixed**](../Model/.md)| Dør | [optional] |

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

## `searchAndelsboligByCvrNumber()`

```php
searchAndelsboligByCvrNumber($cvr_number): mixed
```

Search Andelsbolig By Cvr Number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TinglysningAndelsboligApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cvr_number = 18119838; // mixed | CVR-nummer

try {
    $result = $apiInstance->searchAndelsboligByCvrNumber($cvr_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TinglysningAndelsboligApi->searchAndelsboligByCvrNumber: ', $e->getMessage(), PHP_EOL;
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

## `searchAndelsboligByMunicipality()`

```php
searchAndelsboligByMunicipality($municipality_code, $street_code, $house_number, $floor, $door): mixed
```

Search Andelsbolig By Municipality

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TinglysningAndelsboligApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$municipality_code = 101; // mixed | Kommunekode
$street_code = 8204; // mixed | Vejkode
$house_number = 63; // mixed | Husnummer
$floor = NULL; // mixed | Etage
$door = NULL; // mixed | Dør

try {
    $result = $apiInstance->searchAndelsboligByMunicipality($municipality_code, $street_code, $house_number, $floor, $door);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TinglysningAndelsboligApi->searchAndelsboligByMunicipality: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **municipality_code** | [**mixed**](../Model/.md)| Kommunekode | |
| **street_code** | [**mixed**](../Model/.md)| Vejkode | |
| **house_number** | [**mixed**](../Model/.md)| Husnummer | |
| **floor** | [**mixed**](../Model/.md)| Etage | [optional] |
| **door** | [**mixed**](../Model/.md)| Dør | [optional] |

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

## `searchAndelsboligByPerson()`

```php
searchAndelsboligByPerson($birth_date, $name): mixed
```

Search Andelsbolig By Person

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TinglysningAndelsboligApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$birth_date = 18.05.1953; // mixed | Fødselsdato
$name = Morten Ejsing; // mixed | Navn

try {
    $result = $apiInstance->searchAndelsboligByPerson($birth_date, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TinglysningAndelsboligApi->searchAndelsboligByPerson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **birth_date** | [**mixed**](../Model/.md)| Fødselsdato | |
| **name** | [**mixed**](../Model/.md)| Navn | |

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

## `searchAndelsboligByZipCode()`

```php
searchAndelsboligByZipCode($zip_code, $street_name, $house_number, $floor, $door): mixed
```

Search Andelsbolig By Zip Code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TinglysningAndelsboligApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zip_code = 1620; // mixed | Kommunekode
$street_name = Vesterbrogade; // mixed | Vejnavn
$house_number = 63; // mixed | Husnummer
$floor = NULL; // mixed | Etage
$door = NULL; // mixed | Dør

try {
    $result = $apiInstance->searchAndelsboligByZipCode($zip_code, $street_name, $house_number, $floor, $door);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TinglysningAndelsboligApi->searchAndelsboligByZipCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zip_code** | [**mixed**](../Model/.md)| Kommunekode | |
| **street_name** | [**mixed**](../Model/.md)| Vejnavn | |
| **house_number** | [**mixed**](../Model/.md)| Husnummer | |
| **floor** | [**mixed**](../Model/.md)| Etage | [optional] |
| **door** | [**mixed**](../Model/.md)| Dør | [optional] |

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
