# OpenAPI\Client\TinglysningAktueltTinglystDokumentATDApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAtdByAliasId()**](TinglysningAktueltTinglystDokumentATDApi.md#getAtdByAliasId) | **GET** /api/v2/tinglysning/atd/aliasid/{alias_id} | Get Atd By Alias Id |
| [**getAtdByUuid()**](TinglysningAktueltTinglystDokumentATDApi.md#getAtdByUuid) | **GET** /api/v2/tinglysning/atd/uuid/{uuid} | Get Atd By Uuid |


## `getAtdByAliasId()`

```php
getAtdByAliasId($alias_id): \OpenAPI\Client\Model\ATDModel
```

Get Atd By Alias Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TinglysningAktueltTinglystDokumentATDApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$alias_id = 20130617-1004619548; // mixed | DokumentAliasIdentifikator

try {
    $result = $apiInstance->getAtdByAliasId($alias_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TinglysningAktueltTinglystDokumentATDApi->getAtdByAliasId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **alias_id** | [**mixed**](../Model/.md)| DokumentAliasIdentifikator | |

### Return type

[**\OpenAPI\Client\Model\ATDModel**](../Model/ATDModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAtdByUuid()`

```php
getAtdByUuid($uuid): \OpenAPI\Client\Model\ATDModel
```

Get Atd By Uuid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TinglysningAktueltTinglystDokumentATDApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = f5a777f5-5832-4a92-bf17-ae940a525231; // mixed

try {
    $result = $apiInstance->getAtdByUuid($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TinglysningAktueltTinglystDokumentATDApi->getAtdByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | [**mixed**](../Model/.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ATDModel**](../Model/ATDModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
