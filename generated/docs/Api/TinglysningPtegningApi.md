# OpenAPI\Client\TinglysningPtegningApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPaategningerByAliasId()**](TinglysningPtegningApi.md#getPaategningerByAliasId) | **GET** /api/v2/tinglysning/paategning/aliasid/{alias_id} | Get Paategninger By Alias Id |
| [**getPaategningerByUuid()**](TinglysningPtegningApi.md#getPaategningerByUuid) | **GET** /api/v2/tinglysning/paategning/uuid/{uuid} | Get Paategninger By Uuid |


## `getPaategningerByAliasId()`

```php
getPaategningerByAliasId($alias_id, $cancelled): mixed
```

Get Paategninger By Alias Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TinglysningPtegningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$alias_id = 20190828-1011079348; // mixed | DokumentAliasIdentifikator
$cancelled = NULL; // mixed

try {
    $result = $apiInstance->getPaategningerByAliasId($alias_id, $cancelled);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TinglysningPtegningApi->getPaategningerByAliasId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **alias_id** | [**mixed**](../Model/.md)| DokumentAliasIdentifikator | |
| **cancelled** | [**mixed**](../Model/.md)|  | [optional] |

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

## `getPaategningerByUuid()`

```php
getPaategningerByUuid($uuid, $cancelled): mixed
```

Get Paategninger By Uuid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TinglysningPtegningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = f5a777f5-5832-4a92-bf17-ae940a525231; // mixed
$cancelled = NULL; // mixed

try {
    $result = $apiInstance->getPaategningerByUuid($uuid, $cancelled);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TinglysningPtegningApi->getPaategningerByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | [**mixed**](../Model/.md)|  | |
| **cancelled** | [**mixed**](../Model/.md)|  | [optional] |

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
