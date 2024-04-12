# OpenAPI\Client\GIGrundejernesInvesteringsfondApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getGiDocuments()**](GIGrundejernesInvesteringsfondApi.md#getGiDocuments) | **GET** /api/v2/gi/{bfe_number} | Get Gi Documents |


## `getGiDocuments()`

```php
getGiDocuments($bfe_number): \OpenAPI\Client\Model\GrundejernesInvesteringsfondResponse
```

Get Gi Documents

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GIGrundejernesInvesteringsfondApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bfe_number = 6023864; // mixed

try {
    $result = $apiInstance->getGiDocuments($bfe_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GIGrundejernesInvesteringsfondApi->getGiDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bfe_number** | [**mixed**](../Model/.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GrundejernesInvesteringsfondResponse**](../Model/GrundejernesInvesteringsfondResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
