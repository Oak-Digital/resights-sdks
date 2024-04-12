# OpenAPI\Client\TinglysningVirksomhedApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**searchCompanyDocuments()**](TinglysningVirksomhedApi.md#searchCompanyDocuments) | **GET** /api/v2/tinglysning/companies/documents/{cvr_number} | Search Company Documents |
| [**searchCompanyRegistrations()**](TinglysningVirksomhedApi.md#searchCompanyRegistrations) | **GET** /api/v2/tinglysning/companies/registrations/{cvr_number} | Search Company Registrations |


## `searchCompanyDocuments()`

```php
searchCompanyDocuments($cvr_number, $book, $document_type, $role, $date_from, $date_to, $page, $per_page): mixed
```

Search Company Documents

Her kan du fremsøge en liste over samtlige dokumenter for fast ejendom hvor i en given virksomhed er part.  Indeholder listen mange resultater, vil listen være fordelt på flere sider.   Ønskes søgningen begrænset udfyld et eller flere søgekritier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TinglysningVirksomhedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cvr_number = 27356982; // mixed | CVR-nummer
$book = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\BookEnum(); // \OpenAPI\Client\Model\BookEnum
$document_type = new \OpenAPI\Client\Model\DokTypeEnum(); // DokTypeEnum
$role = new \OpenAPI\Client\Model\VirksomhedRolleEnum(); // VirksomhedRolleEnum
$date_from = NULL; // mixed
$date_to = NULL; // mixed
$page = 1; // mixed | Side
$per_page = NULL; // mixed

try {
    $result = $apiInstance->searchCompanyDocuments($cvr_number, $book, $document_type, $role, $date_from, $date_to, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TinglysningVirksomhedApi->searchCompanyDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cvr_number** | [**mixed**](../Model/.md)| CVR-nummer | |
| **book** | [**\OpenAPI\Client\Model\BookEnum**](../Model/.md)|  | [optional] |
| **document_type** | [**DokTypeEnum**](../Model/.md)|  | [optional] |
| **role** | [**VirksomhedRolleEnum**](../Model/.md)|  | [optional] |
| **date_from** | [**mixed**](../Model/.md)|  | [optional] |
| **date_to** | [**mixed**](../Model/.md)|  | [optional] |
| **page** | [**mixed**](../Model/.md)| Side | [optional] |
| **per_page** | [**mixed**](../Model/.md)|  | [optional] |

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

## `searchCompanyRegistrations()`

```php
searchCompanyRegistrations($cvr_number): \OpenAPI\Client\Model\VirksomhedSoegningRegistreringerModel
```

Search Company Registrations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TinglysningVirksomhedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cvr_number = 35243267; // mixed | CVR-nummer

try {
    $result = $apiInstance->searchCompanyRegistrations($cvr_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TinglysningVirksomhedApi->searchCompanyRegistrations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cvr_number** | [**mixed**](../Model/.md)| CVR-nummer | |

### Return type

[**\OpenAPI\Client\Model\VirksomhedSoegningRegistreringerModel**](../Model/VirksomhedSoegningRegistreringerModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
