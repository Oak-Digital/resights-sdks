# OpenAPI\Client\EMOEnergimrkeordningenApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getEnergyLabelByBfeNumber()**](EMOEnergimrkeordningenApi.md#getEnergyLabelByBfeNumber) | **GET** /api/v2/emo/energy | Get Energy Label By Bfe Number |
| [**getEnergyLabelById()**](EMOEnergimrkeordningenApi.md#getEnergyLabelById) | **GET** /api/v2/emo/energy/{id} | Get Energy Label By Id |


## `getEnergyLabelByBfeNumber()`

```php
getEnergyLabelByBfeNumber($size, $offset, $id, $bfe_number, $label, $status): mixed
```

Get Energy Label By Bfe Number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EMOEnergimrkeordningenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$size = NULL; // mixed
$offset = NULL; // mixed
$id = NULL; // mixed | Energy label ID
$bfe_number = 727745; // mixed | BFE-nummer
$label = A; // mixed | Energy label
$status = EXPIRED; // mixed | Energy label status

try {
    $result = $apiInstance->getEnergyLabelByBfeNumber($size, $offset, $id, $bfe_number, $label, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EMOEnergimrkeordningenApi->getEnergyLabelByBfeNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **size** | [**mixed**](../Model/.md)|  | [optional] |
| **offset** | [**mixed**](../Model/.md)|  | [optional] |
| **id** | [**mixed**](../Model/.md)| Energy label ID | [optional] |
| **bfe_number** | [**mixed**](../Model/.md)| BFE-nummer | [optional] |
| **label** | [**mixed**](../Model/.md)| Energy label | [optional] |
| **status** | [**mixed**](../Model/.md)| Energy label status | [optional] |

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

## `getEnergyLabelById()`

```php
getEnergyLabelById($id): \OpenAPI\Client\Model\EnergyLabelResponse
```

Get Energy Label By Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\EMOEnergimrkeordningenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 310003688; // mixed | EnergimærkeID

try {
    $result = $apiInstance->getEnergyLabelById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EMOEnergimrkeordningenApi->getEnergyLabelById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**mixed**](../Model/.md)| EnergimærkeID | |

### Return type

[**\OpenAPI\Client\Model\EnergyLabelResponse**](../Model/EnergyLabelResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
