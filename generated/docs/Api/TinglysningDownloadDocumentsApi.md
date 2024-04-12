# OpenAPI\Client\TinglysningDownloadDocumentsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**convertPdfIdToAktUuid()**](TinglysningDownloadDocumentsApi.md#convertPdfIdToAktUuid) | **GET** /api/v2/tinglysning/convert/{pdf_id} | Convert Pdf Id To Akt Uuid |
| [**downloadAktByUuid()**](TinglysningDownloadDocumentsApi.md#downloadAktByUuid) | **GET** /api/v2/tinglysning/download/akt/{uuid} | Download Akt By Uuid |
| [**downloadAnnexByUuid()**](TinglysningDownloadDocumentsApi.md#downloadAnnexByUuid) | **GET** /api/v2/tinglysning/download/annex/{uuid} | Download Annex By Uuid |
| [**downloadAtdByUuid()**](TinglysningDownloadDocumentsApi.md#downloadAtdByUuid) | **GET** /api/v2/tinglysning/download/atd/{uuid} | Download Atd By Uuid |
| [**downloadDokumentanmeldelseByUuid()**](TinglysningDownloadDocumentsApi.md#downloadDokumentanmeldelseByUuid) | **GET** /api/v2/tinglysning/download/dokumentanmeldelse/{document_uuid}/{report_uuid} | Download Dokumentanmeldelse By Uuid |
| [**downloadTingbogsattestByUuid()**](TinglysningDownloadDocumentsApi.md#downloadTingbogsattestByUuid) | **GET** /api/v2/tinglysning/download/tingbogsattest/{uuid} | Download Tingbogsattest By Uuid |


## `convertPdfIdToAktUuid()`

```php
convertPdfIdToAktUuid($pdf_id): \OpenAPI\Client\Model\SoegPdfIdModel
```

Convert Pdf Id To Akt Uuid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TinglysningDownloadDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pdf_id = 1_C-I_31; // mixed

try {
    $result = $apiInstance->convertPdfIdToAktUuid($pdf_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TinglysningDownloadDocumentsApi->convertPdfIdToAktUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pdf_id** | [**mixed**](../Model/.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SoegPdfIdModel**](../Model/SoegPdfIdModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadAktByUuid()`

```php
downloadAktByUuid($uuid, $filename, $entity)
```

Download Akt By Uuid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TinglysningDownloadDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = fcfff995-3dba-410b-89a6-74dac4cd1a16; // mixed
$filename = 1_C-I_30; // mixed
$entity = NULL; // mixed

try {
    $apiInstance->downloadAktByUuid($uuid, $filename, $entity);
} catch (Exception $e) {
    echo 'Exception when calling TinglysningDownloadDocumentsApi->downloadAktByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | [**mixed**](../Model/.md)|  | |
| **filename** | [**mixed**](../Model/.md)|  | |
| **entity** | [**mixed**](../Model/.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadAnnexByUuid()`

```php
downloadAnnexByUuid($uuid)
```

Download Annex By Uuid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TinglysningDownloadDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 4049fcb5-edad-4240-8875-5bd0caa81500; // mixed

try {
    $apiInstance->downloadAnnexByUuid($uuid);
} catch (Exception $e) {
    echo 'Exception when calling TinglysningDownloadDocumentsApi->downloadAnnexByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | [**mixed**](../Model/.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadAtdByUuid()`

```php
downloadAtdByUuid($uuid)
```

Download Atd By Uuid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TinglysningDownloadDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = f5a777f5-5832-4a92-bf17-ae940a525231; // mixed

try {
    $apiInstance->downloadAtdByUuid($uuid);
} catch (Exception $e) {
    echo 'Exception when calling TinglysningDownloadDocumentsApi->downloadAtdByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | [**mixed**](../Model/.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadDokumentanmeldelseByUuid()`

```php
downloadDokumentanmeldelseByUuid($document_uuid, $report_uuid)
```

Download Dokumentanmeldelse By Uuid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TinglysningDownloadDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_uuid = 07ab86f7-98e4-43d9-8b89-c3a6c1fdabff; // mixed
$report_uuid = dceb3c31-d21b-48a6-9d16-5fc57bd2ba7f; // mixed

try {
    $apiInstance->downloadDokumentanmeldelseByUuid($document_uuid, $report_uuid);
} catch (Exception $e) {
    echo 'Exception when calling TinglysningDownloadDocumentsApi->downloadDokumentanmeldelseByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document_uuid** | [**mixed**](../Model/.md)|  | |
| **report_uuid** | [**mixed**](../Model/.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadTingbogsattestByUuid()`

```php
downloadTingbogsattestByUuid($uuid)
```

Download Tingbogsattest By Uuid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TinglysningDownloadDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = eaf573d8-de10-4bcd-8af7-836bb9af1532; // mixed

try {
    $apiInstance->downloadTingbogsattestByUuid($uuid);
} catch (Exception $e) {
    echo 'Exception when calling TinglysningDownloadDocumentsApi->downloadTingbogsattestByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | [**mixed**](../Model/.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
