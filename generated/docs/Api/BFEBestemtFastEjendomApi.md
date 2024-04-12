# OpenAPI\Client\BFEBestemtFastEjendomApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getProperties()**](BFEBestemtFastEjendomApi.md#getProperties) | **GET** /api/v2/properties | Get Properties |
| [**getPropertiesAdvanced()**](BFEBestemtFastEjendomApi.md#getPropertiesAdvanced) | **POST** /api/v2/properties | Get Properties Advanced |
| [**getPropertyByBfeNumber()**](BFEBestemtFastEjendomApi.md#getPropertyByBfeNumber) | **GET** /api/v2/properties/{bfe_number} | Get Property By Bfe Number |
| [**getPropertyDetailsBbr()**](BFEBestemtFastEjendomApi.md#getPropertyDetailsBbr) | **GET** /api/v2/properties/{bfe_number}/bbr | Get Property Details |
| [**getPropertyDetailsEbr()**](BFEBestemtFastEjendomApi.md#getPropertyDetailsEbr) | **GET** /api/v2/properties/{bfe_number}/ebr | Get Property Details |
| [**getPropertyDetailsOverview()**](BFEBestemtFastEjendomApi.md#getPropertyDetailsOverview) | **GET** /api/v2/properties/{bfe_number}/overview | Get Property Details |
| [**getPropertyDetailsOwners()**](BFEBestemtFastEjendomApi.md#getPropertyDetailsOwners) | **GET** /api/v2/properties/{bfe_number}/owners | Get Property Details |
| [**getPropertyDetailsTax()**](BFEBestemtFastEjendomApi.md#getPropertyDetailsTax) | **GET** /api/v2/properties/{bfe_number}/tax | Get Property Details |
| [**getPropertyIndicators()**](BFEBestemtFastEjendomApi.md#getPropertyIndicators) | **GET** /api/v2/properties/{bfe_number}/indicators | Get Property Indicators |
| [**getPropertyTrades()**](BFEBestemtFastEjendomApi.md#getPropertyTrades) | **GET** /api/v2/properties/{bfe_number}/trades | Get Property Trades |
| [**getPropertyTradesLatest()**](BFEBestemtFastEjendomApi.md#getPropertyTradesLatest) | **GET** /api/v2/properties/{bfe_number}/trades/latest | Get Property Trades |
| [**getPropertyValuationLatest()**](BFEBestemtFastEjendomApi.md#getPropertyValuationLatest) | **GET** /api/v2/properties/{bfe_number}/valuations/latest | Get Property Valuation Latest |
| [**getPropertyValuationNew()**](BFEBestemtFastEjendomApi.md#getPropertyValuationNew) | **GET** /api/v2/properties/{bfe_number}/valuations/new | Get Property Valuation New |
| [**getPropertyValuations()**](BFEBestemtFastEjendomApi.md#getPropertyValuations) | **GET** /api/v2/properties/{bfe_number}/valuations | Get Property Valuations |


## `getProperties()`

```php
getProperties($bfe_number, $sfe_number, $esr_number, $municipality_code, $property_number, $land_lot_code, $cadastre_number, $address, $x, $y, $distance, $page, $size, $offset, $sort, $order, $includes, $excludes): \OpenAPI\Client\Model\ESResponseModelBFENumberPropertyResponse
```

Get Properties

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BFEBestemtFastEjendomApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bfe_number = NULL; // mixed
$sfe_number = NULL; // mixed
$esr_number = NULL; // mixed
$municipality_code = NULL; // mixed
$property_number = NULL; // mixed
$land_lot_code = NULL; // mixed
$cadastre_number = NULL; // mixed
$address = NULL; // mixed
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
    $result = $apiInstance->getProperties($bfe_number, $sfe_number, $esr_number, $municipality_code, $property_number, $land_lot_code, $cadastre_number, $address, $x, $y, $distance, $page, $size, $offset, $sort, $order, $includes, $excludes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BFEBestemtFastEjendomApi->getProperties: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bfe_number** | [**mixed**](../Model/.md)|  | [optional] |
| **sfe_number** | [**mixed**](../Model/.md)|  | [optional] |
| **esr_number** | [**mixed**](../Model/.md)|  | [optional] |
| **municipality_code** | [**mixed**](../Model/.md)|  | [optional] |
| **property_number** | [**mixed**](../Model/.md)|  | [optional] |
| **land_lot_code** | [**mixed**](../Model/.md)|  | [optional] |
| **cadastre_number** | [**mixed**](../Model/.md)|  | [optional] |
| **address** | [**mixed**](../Model/.md)|  | [optional] |
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

[**\OpenAPI\Client\Model\ESResponseModelBFENumberPropertyResponse**](../Model/ESResponseModelBFENumberPropertyResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPropertiesAdvanced()`

```php
getPropertiesAdvanced($size, $offset, $request_body): \OpenAPI\Client\Model\ESResponseModelBFENumberPropertyResponse
```

Get Properties Advanced

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BFEBestemtFastEjendomApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$size = NULL; // mixed
$offset = NULL; // mixed
$request_body = {"source":["overview"],"page":"WyIxMC4gZmVicnVhciB2ZWogMiwgNjA3MCBjaHJpc3RpYW5zZmVsZCIsMC4xODkxMjg5NSw1NzY2OTc0XQ==","query":[{"field":"overview.type","value":"SFE"}],"sort":{"field":"overview.address.name","order":"asc"}}; // array<string,mixed>

try {
    $result = $apiInstance->getPropertiesAdvanced($size, $offset, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BFEBestemtFastEjendomApi->getPropertiesAdvanced: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **size** | [**mixed**](../Model/.md)|  | [optional] |
| **offset** | [**mixed**](../Model/.md)|  | [optional] |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ESResponseModelBFENumberPropertyResponse**](../Model/ESResponseModelBFENumberPropertyResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPropertyByBfeNumber()`

```php
getPropertyByBfeNumber($bfe_number, $includes, $excludes): \OpenAPI\Client\Model\BFENumberPropertyResponse
```

Get Property By Bfe Number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BFEBestemtFastEjendomApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bfe_number = 6023864; // mixed | BFE-number of a property
$includes = NULL; // mixed
$excludes = NULL; // mixed

try {
    $result = $apiInstance->getPropertyByBfeNumber($bfe_number, $includes, $excludes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BFEBestemtFastEjendomApi->getPropertyByBfeNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bfe_number** | [**mixed**](../Model/.md)| BFE-number of a property | |
| **includes** | [**mixed**](../Model/.md)|  | [optional] |
| **excludes** | [**mixed**](../Model/.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BFENumberPropertyResponse**](../Model/BFENumberPropertyResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPropertyDetailsBbr()`

```php
getPropertyDetailsBbr($bfe_number, $includes, $excludes): \OpenAPI\Client\Model\BBRResponse
```

Get Property Details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BFEBestemtFastEjendomApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bfe_number = 6023864; // mixed | BFE-number of a property
$includes = NULL; // mixed
$excludes = NULL; // mixed

try {
    $result = $apiInstance->getPropertyDetailsBbr($bfe_number, $includes, $excludes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BFEBestemtFastEjendomApi->getPropertyDetailsBbr: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bfe_number** | [**mixed**](../Model/.md)| BFE-number of a property | |
| **includes** | [**mixed**](../Model/.md)|  | [optional] |
| **excludes** | [**mixed**](../Model/.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BBRResponse**](../Model/BBRResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPropertyDetailsEbr()`

```php
getPropertyDetailsEbr($bfe_number, $includes, $excludes): \OpenAPI\Client\Model\EBRPropertyLocationResponse
```

Get Property Details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BFEBestemtFastEjendomApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bfe_number = 6023864; // mixed | BFE-number of a property
$includes = NULL; // mixed
$excludes = NULL; // mixed

try {
    $result = $apiInstance->getPropertyDetailsEbr($bfe_number, $includes, $excludes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BFEBestemtFastEjendomApi->getPropertyDetailsEbr: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bfe_number** | [**mixed**](../Model/.md)| BFE-number of a property | |
| **includes** | [**mixed**](../Model/.md)|  | [optional] |
| **excludes** | [**mixed**](../Model/.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EBRPropertyLocationResponse**](../Model/EBRPropertyLocationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPropertyDetailsOverview()`

```php
getPropertyDetailsOverview($bfe_number, $includes, $excludes): \OpenAPI\Client\Model\BFENumberOverview
```

Get Property Details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BFEBestemtFastEjendomApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bfe_number = 6023864; // mixed | BFE-number of a property
$includes = NULL; // mixed
$excludes = NULL; // mixed

try {
    $result = $apiInstance->getPropertyDetailsOverview($bfe_number, $includes, $excludes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BFEBestemtFastEjendomApi->getPropertyDetailsOverview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bfe_number** | [**mixed**](../Model/.md)| BFE-number of a property | |
| **includes** | [**mixed**](../Model/.md)|  | [optional] |
| **excludes** | [**mixed**](../Model/.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BFENumberOverview**](../Model/BFENumberOverview.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPropertyDetailsOwners()`

```php
getPropertyDetailsOwners($bfe_number, $includes, $excludes): mixed
```

Get Property Details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BFEBestemtFastEjendomApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bfe_number = 6023864; // mixed | BFE-number of a property
$includes = NULL; // mixed
$excludes = NULL; // mixed

try {
    $result = $apiInstance->getPropertyDetailsOwners($bfe_number, $includes, $excludes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BFEBestemtFastEjendomApi->getPropertyDetailsOwners: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bfe_number** | [**mixed**](../Model/.md)| BFE-number of a property | |
| **includes** | [**mixed**](../Model/.md)|  | [optional] |
| **excludes** | [**mixed**](../Model/.md)|  | [optional] |

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

## `getPropertyDetailsTax()`

```php
getPropertyDetailsTax($bfe_number, $includes, $excludes): \OpenAPI\Client\Model\SKATTaxResponse
```

Get Property Details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BFEBestemtFastEjendomApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bfe_number = 6023864; // mixed | BFE-number of a property
$includes = NULL; // mixed
$excludes = NULL; // mixed

try {
    $result = $apiInstance->getPropertyDetailsTax($bfe_number, $includes, $excludes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BFEBestemtFastEjendomApi->getPropertyDetailsTax: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bfe_number** | [**mixed**](../Model/.md)| BFE-number of a property | |
| **includes** | [**mixed**](../Model/.md)|  | [optional] |
| **excludes** | [**mixed**](../Model/.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SKATTaxResponse**](../Model/SKATTaxResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPropertyIndicators()`

```php
getPropertyIndicators($bfe_number): mixed
```

Get Property Indicators

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BFEBestemtFastEjendomApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bfe_number = 9556238; // mixed | BFE-number of a property

try {
    $result = $apiInstance->getPropertyIndicators($bfe_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BFEBestemtFastEjendomApi->getPropertyIndicators: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bfe_number** | [**mixed**](../Model/.md)| BFE-number of a property | |

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

## `getPropertyTrades()`

```php
getPropertyTrades($bfe_number): mixed
```

Get Property Trades

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BFEBestemtFastEjendomApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bfe_number = 6023864; // mixed | BFE-number of a property

try {
    $result = $apiInstance->getPropertyTrades($bfe_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BFEBestemtFastEjendomApi->getPropertyTrades: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bfe_number** | [**mixed**](../Model/.md)| BFE-number of a property | |

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

## `getPropertyTradesLatest()`

```php
getPropertyTradesLatest($bfe_number): \OpenAPI\Client\Model\EJFTradeResponse
```

Get Property Trades

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BFEBestemtFastEjendomApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bfe_number = 6023864; // mixed | BFE-number of a property

try {
    $result = $apiInstance->getPropertyTradesLatest($bfe_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BFEBestemtFastEjendomApi->getPropertyTradesLatest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bfe_number** | [**mixed**](../Model/.md)| BFE-number of a property | |

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

## `getPropertyValuationLatest()`

```php
getPropertyValuationLatest($bfe_number): \OpenAPI\Client\Model\VURValuationResponse
```

Get Property Valuation Latest

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BFEBestemtFastEjendomApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bfe_number = 9556238; // mixed | BFE-number of a property

try {
    $result = $apiInstance->getPropertyValuationLatest($bfe_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BFEBestemtFastEjendomApi->getPropertyValuationLatest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bfe_number** | [**mixed**](../Model/.md)| BFE-number of a property | |

### Return type

[**\OpenAPI\Client\Model\VURValuationResponse**](../Model/VURValuationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPropertyValuationNew()`

```php
getPropertyValuationNew($bfe_number): mixed
```

Get Property Valuation New

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BFEBestemtFastEjendomApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bfe_number = 6003459; // mixed | BFE-number of a property

try {
    $result = $apiInstance->getPropertyValuationNew($bfe_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BFEBestemtFastEjendomApi->getPropertyValuationNew: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bfe_number** | [**mixed**](../Model/.md)| BFE-number of a property | |

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

## `getPropertyValuations()`

```php
getPropertyValuations($bfe_number): mixed
```

Get Property Valuations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BFEBestemtFastEjendomApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bfe_number = 9556238; // mixed | BFE-number of a property

try {
    $result = $apiInstance->getPropertyValuations($bfe_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BFEBestemtFastEjendomApi->getPropertyValuations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bfe_number** | [**mixed**](../Model/.md)| BFE-number of a property | |

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
