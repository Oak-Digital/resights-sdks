# OpenAPI\Client\TinglysningEjendomApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getHistoricClaimsByUuid()**](TinglysningEjendomApi.md#getHistoricClaimsByUuid) | **GET** /api/v2/tinglysning/tingbogsattest/historic/{uuid} | Get Historic Claims By Uuid |
| [**getOgsaaLystPaa()**](TinglysningEjendomApi.md#getOgsaaLystPaa) | **GET** /api/v2/tinglysning/ogsaalystpaa | Get Ogsaa Lyst Paa |
| [**getTingbogsattestByUuid()**](TinglysningEjendomApi.md#getTingbogsattestByUuid) | **GET** /api/v2/tinglysning/tingbogsattest/{uuid} | Get Tingbogsattest By Uuid |
| [**searchTinglysningByAddress()**](TinglysningEjendomApi.md#searchTinglysningByAddress) | **GET** /api/v2/tinglysning/property/search/address | Search Tinglysning By Address |
| [**searchTinglysningByAddressLimited()**](TinglysningEjendomApi.md#searchTinglysningByAddressLimited) | **GET** /api/v2/tinglysning/property/search/address-limited | Search Tinglysning By Address Limited |
| [**searchTinglysningByBfeNumber()**](TinglysningEjendomApi.md#searchTinglysningByBfeNumber) | **GET** /api/v2/tinglysning/property/search/bfe-number/{bfe_number} | Search Tinglysning By Bfe Number |
| [**searchTinglysningByCadastre()**](TinglysningEjendomApi.md#searchTinglysningByCadastre) | **GET** /api/v2/tinglysning/property/search/cadastre/{land_lot}/{cadastre_number} | Search Tinglysning By Cadastre |
| [**searchTinglysningByMunicipality()**](TinglysningEjendomApi.md#searchTinglysningByMunicipality) | **GET** /api/v2/tinglysning/property/search/esr-number/{municipality_code}/{property_number} | Search Tinglysning By Municipality |
| [**searchTinglysningByUmatrikuleretAreal()**](TinglysningEjendomApi.md#searchTinglysningByUmatrikuleretAreal) | **GET** /api/v2/tinglysning/property/search/uma/{uma} | Search Tinglysning By Umatrikuleret Areal |


## `getHistoricClaimsByUuid()`

```php
getHistoricClaimsByUuid($uuid): mixed
```

Get Historic Claims By Uuid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TinglysningEjendomApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 11e4a131-2ed0-4c81-9cff-1ce8fd722552; // mixed

try {
    $result = $apiInstance->getHistoricClaimsByUuid($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TinglysningEjendomApi->getHistoricClaimsByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | [**mixed**](../Model/.md)|  | |

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

## `getOgsaaLystPaa()`

```php
getOgsaaLystPaa($document_uuid, $tinglysning_uuid): \OpenAPI\Client\Model\OgsaaLystPaa
```

Get Ogsaa Lyst Paa

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TinglysningEjendomApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_uuid = 960992e0-36fc-4886-907d-a8822315e483; // mixed
$tinglysning_uuid = 1c4b38dd-1977-4935-8dad-bdeea6dc01b8; // mixed

try {
    $result = $apiInstance->getOgsaaLystPaa($document_uuid, $tinglysning_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TinglysningEjendomApi->getOgsaaLystPaa: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document_uuid** | [**mixed**](../Model/.md)|  | |
| **tinglysning_uuid** | [**mixed**](../Model/.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\OgsaaLystPaa**](../Model/OgsaaLystPaa.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTingbogsattestByUuid()`

```php
getTingbogsattestByUuid($uuid): \OpenAPI\Client\Model\TingbogsattestModel
```

Get Tingbogsattest By Uuid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TinglysningEjendomApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 1c4b38dd-1977-4935-8dad-bdeea6dc01b8; // mixed

try {
    $result = $apiInstance->getTingbogsattestByUuid($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TinglysningEjendomApi->getTingbogsattestByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | [**mixed**](../Model/.md)|  | |

### Return type

[**\OpenAPI\Client\Model\TingbogsattestModel**](../Model/TingbogsattestModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchTinglysningByAddress()`

```php
searchTinglysningByAddress($street_name, $house_number, $zip_code, $floor, $door): mixed
```

Search Tinglysning By Address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TinglysningEjendomApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$street_name = Vesterbrogade; // mixed | Vejnavn
$house_number = 77; // mixed | Husnummer
$zip_code = 1620; // mixed | Postnummer
$floor = NULL; // mixed | Etage
$door = NULL; // mixed | Dør

try {
    $result = $apiInstance->searchTinglysningByAddress($street_name, $house_number, $zip_code, $floor, $door);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TinglysningEjendomApi->searchTinglysningByAddress: ', $e->getMessage(), PHP_EOL;
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

## `searchTinglysningByAddressLimited()`

```php
searchTinglysningByAddressLimited($zip_code, $street_name, $house_number, $floor, $door, $max_results): mixed
```

Search Tinglysning By Address Limited

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TinglysningEjendomApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zip_code = 1620; // mixed | Postnummer
$street_name = Vesterbrogade; // mixed | Vejnavn
$house_number = NULL; // mixed | Husnummer
$floor = NULL; // mixed | Etage
$door = NULL; // mixed | Dør
$max_results = 2000; // mixed | Maks antal resultater

try {
    $result = $apiInstance->searchTinglysningByAddressLimited($zip_code, $street_name, $house_number, $floor, $door, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TinglysningEjendomApi->searchTinglysningByAddressLimited: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zip_code** | [**mixed**](../Model/.md)| Postnummer | |
| **street_name** | [**mixed**](../Model/.md)| Vejnavn | |
| **house_number** | [**mixed**](../Model/.md)| Husnummer | [optional] |
| **floor** | [**mixed**](../Model/.md)| Etage | [optional] |
| **door** | [**mixed**](../Model/.md)| Dør | [optional] |
| **max_results** | [**mixed**](../Model/.md)| Maks antal resultater | [optional] |

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

## `searchTinglysningByBfeNumber()`

```php
searchTinglysningByBfeNumber($bfe_number): mixed
```

Search Tinglysning By Bfe Number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TinglysningEjendomApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bfe_number = 123456; // mixed | Hovednoteringsnummer (BFE-nummer)

try {
    $result = $apiInstance->searchTinglysningByBfeNumber($bfe_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TinglysningEjendomApi->searchTinglysningByBfeNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bfe_number** | [**mixed**](../Model/.md)| Hovednoteringsnummer (BFE-nummer) | |

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

## `searchTinglysningByCadastre()`

```php
searchTinglysningByCadastre($land_lot, $cadastre_number): mixed
```

Search Tinglysning By Cadastre

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TinglysningEjendomApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$land_lot = 2000164; // mixed | Ejerlav
$cadastre_number = 211; // mixed

try {
    $result = $apiInstance->searchTinglysningByCadastre($land_lot, $cadastre_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TinglysningEjendomApi->searchTinglysningByCadastre: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **land_lot** | [**mixed**](../Model/.md)| Ejerlav | |
| **cadastre_number** | [**mixed**](../Model/.md)|  | |

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

## `searchTinglysningByMunicipality()`

```php
searchTinglysningByMunicipality($municipality_code, $property_number): mixed
```

Search Tinglysning By Municipality

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TinglysningEjendomApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$municipality_code = 101; // mixed | Kommunekode
$property_number = 886263; // mixed | Ejendomsnummer

try {
    $result = $apiInstance->searchTinglysningByMunicipality($municipality_code, $property_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TinglysningEjendomApi->searchTinglysningByMunicipality: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **municipality_code** | [**mixed**](../Model/.md)| Kommunekode | |
| **property_number** | [**mixed**](../Model/.md)| Ejendomsnummer | |

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

## `searchTinglysningByUmatrikuleretAreal()`

```php
searchTinglysningByUmatrikuleretAreal($uma): mixed
```

Search Tinglysning By Umatrikuleret Areal

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TinglysningEjendomApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uma = 1UMA0005chr; // mixed | Umatrikuleret areal

try {
    $result = $apiInstance->searchTinglysningByUmatrikuleretAreal($uma);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TinglysningEjendomApi->searchTinglysningByUmatrikuleretAreal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uma** | [**mixed**](../Model/.md)| Umatrikuleret areal | |

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
