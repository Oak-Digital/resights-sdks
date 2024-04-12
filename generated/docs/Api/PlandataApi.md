# OpenAPI\Client\PlandataApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPlandata()**](PlandataApi.md#getPlandata) | **GET** /api/v2/plandata | Get Plandata |


## `getPlandata()`

```php
getPlandata($land_id, $bfe_number): mixed
```

Get Plandata

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PlandataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$land_id = NULL; // mixed | LandID of a cadastre
$bfe_number = NULL; // mixed | BFE-number of a property

try {
    $result = $apiInstance->getPlandata($land_id, $bfe_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlandataApi->getPlandata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **land_id** | [**mixed**](../Model/.md)| LandID of a cadastre | [optional] |
| **bfe_number** | [**mixed**](../Model/.md)| BFE-number of a property | [optional] |

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
