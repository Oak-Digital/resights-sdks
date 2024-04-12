# OpenAPI\Client\GISGeospatialInformationSystemsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**convertGisFileToGeojson()**](GISGeospatialInformationSystemsApi.md#convertGisFileToGeojson) | **POST** /api/v2/gis/convert | Convert Gis File To Geojson |
| [**exportLayers()**](GISGeospatialInformationSystemsApi.md#exportLayers) | **POST** /api/v2/gis/export/{xmin}/{ymin}/{xmax}/{ymax} | Export Layers |
| [**geoserviceProxy()**](GISGeospatialInformationSystemsApi.md#geoserviceProxy) | **GET** /api/v2/gis/proxy | Geoservice Proxy |
| [**getGeodanmarkBuildings()**](GISGeospatialInformationSystemsApi.md#getGeodanmarkBuildings) | **GET** /api/v2/gis/geodanmark/buildings | Get Geodanmark Buildings |
| [**getGeojsonLayer()**](GISGeospatialInformationSystemsApi.md#getGeojsonLayer) | **GET** /api/v2/gis/geojson | Get Geojson Layer |
| [**getVectorLayer()**](GISGeospatialInformationSystemsApi.md#getVectorLayer) | **GET** /api/v2/gis/mvt/{layer}/{z}/{x}/{y}.pbf | Get Vector Layer |


## `convertGisFileToGeojson()`

```php
convertGisFileToGeojson($file)
```

Convert Gis File To Geojson

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GISGeospatialInformationSystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file = NULL; // mixed

try {
    $apiInstance->convertGisFileToGeojson($file);
} catch (Exception $e) {
    echo 'Exception when calling GISGeospatialInformationSystemsApi->convertGisFileToGeojson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | [**mixed**](../Model/mixed.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportLayers()`

```php
exportLayers($xmin, $ymin, $xmax, $ymax, $body, $extension, $polylines, $crs, $dimensions)
```

Export Layers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GISGeospatialInformationSystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$xmin = 12.567029; // mixed
$ymin = 55.674437; // mixed
$xmax = 12.573386; // mixed
$ymax = 55.677263; // mixed
$body = ["gdk.bygning","mat.matrikelskel_gaeldende","dhm.hoejdekurver_025","dhm.hoejdekurver_050","dhm.hoejdekurver_250","label.cadastre_number","label.names","label.property_value","label.constructed_share_br18"]; // mixed
$extension = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\GisFormat(); // \OpenAPI\Client\Model\GisFormat
$polylines = NULL; // mixed
$crs = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\CoordinateReferenceSystem(); // \OpenAPI\Client\Model\CoordinateReferenceSystem
$dimensions = NULL; // mixed

try {
    $apiInstance->exportLayers($xmin, $ymin, $xmax, $ymax, $body, $extension, $polylines, $crs, $dimensions);
} catch (Exception $e) {
    echo 'Exception when calling GISGeospatialInformationSystemsApi->exportLayers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xmin** | [**mixed**](../Model/.md)|  | |
| **ymin** | [**mixed**](../Model/.md)|  | |
| **xmax** | [**mixed**](../Model/.md)|  | |
| **ymax** | [**mixed**](../Model/.md)|  | |
| **body** | **mixed**|  | |
| **extension** | [**\OpenAPI\Client\Model\GisFormat**](../Model/.md)|  | [optional] |
| **polylines** | [**mixed**](../Model/.md)|  | [optional] |
| **crs** | [**\OpenAPI\Client\Model\CoordinateReferenceSystem**](../Model/.md)|  | [optional] |
| **dimensions** | [**mixed**](../Model/.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `geoserviceProxy()`

```php
geoserviceProxy($path, $source)
```

Geoservice Proxy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GISGeospatialInformationSystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = NULL; // mixed
$source = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ProxyPathEnum(); // \OpenAPI\Client\Model\ProxyPathEnum

try {
    $apiInstance->geoserviceProxy($path, $source);
} catch (Exception $e) {
    echo 'Exception when calling GISGeospatialInformationSystemsApi->geoserviceProxy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **path** | [**mixed**](../Model/.md)|  | |
| **source** | [**\OpenAPI\Client\Model\ProxyPathEnum**](../Model/.md)|  | [optional] |

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

## `getGeodanmarkBuildings()`

```php
getGeodanmarkBuildings($id, $bbr_id, $bfe_number, $size): \OpenAPI\Client\Model\GeoJSONFeatureCollectionBuildingMapGeoJSON
```

Get Geodanmark Buildings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GISGeospatialInformationSystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed
$bbr_id = NULL; // mixed
$bfe_number = NULL; // mixed
$size = NULL; // mixed

try {
    $result = $apiInstance->getGeodanmarkBuildings($id, $bbr_id, $bfe_number, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GISGeospatialInformationSystemsApi->getGeodanmarkBuildings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**mixed**](../Model/.md)|  | [optional] |
| **bbr_id** | [**mixed**](../Model/.md)|  | [optional] |
| **bfe_number** | [**mixed**](../Model/.md)|  | [optional] |
| **size** | [**mixed**](../Model/.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GeoJSONFeatureCollectionBuildingMapGeoJSON**](../Model/GeoJSONFeatureCollectionBuildingMapGeoJSON.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGeojsonLayer()`

```php
getGeojsonLayer($layer, $wkt, $polygon, $point, $x, $y, $limit, $offset, $crs, $address_id, $access_address_id, $land_id, $bfe_number): \OpenAPI\Client\Model\GeoJSONLayerResponse
```

Get Geojson Layer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GISGeospatialInformationSystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$layer = lbst.markblokke_2022; // GisLayers
$wkt = POLYGON ((51.0 3.0, 51.3 3.61, 51.3 3.0, 51.0 3.0)); // mixed
$polygon = [[[51.0,3.0],[51.3,3.61],[51.0,3.0]]]; // mixed
$point = [51.0,3.0]; // mixed
$x = 51.0; // mixed
$y = 3.0; // mixed
$limit = 10; // mixed
$offset = 0; // mixed
$crs = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\CoordinateReferenceSystem(); // \OpenAPI\Client\Model\CoordinateReferenceSystem
$address_id = 0a3f50af-186b-32b8-e044-0003ba298018; // mixed
$access_address_id = 0a3f507b-55f9-32b8-e044-0003ba298018; // mixed
$land_id = NULL; // mixed
$bfe_number = NULL; // mixed

try {
    $result = $apiInstance->getGeojsonLayer($layer, $wkt, $polygon, $point, $x, $y, $limit, $offset, $crs, $address_id, $access_address_id, $land_id, $bfe_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GISGeospatialInformationSystemsApi->getGeojsonLayer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **layer** | [**GisLayers**](../Model/.md)|  | |
| **wkt** | [**mixed**](../Model/.md)|  | [optional] |
| **polygon** | [**mixed**](../Model/.md)|  | [optional] |
| **point** | [**mixed**](../Model/.md)|  | [optional] |
| **x** | [**mixed**](../Model/.md)|  | [optional] |
| **y** | [**mixed**](../Model/.md)|  | [optional] |
| **limit** | [**mixed**](../Model/.md)|  | [optional] |
| **offset** | [**mixed**](../Model/.md)|  | [optional] |
| **crs** | [**\OpenAPI\Client\Model\CoordinateReferenceSystem**](../Model/.md)|  | [optional] |
| **address_id** | [**mixed**](../Model/.md)|  | [optional] |
| **access_address_id** | [**mixed**](../Model/.md)|  | [optional] |
| **land_id** | [**mixed**](../Model/.md)|  | [optional] |
| **bfe_number** | [**mixed**](../Model/.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GeoJSONLayerResponse**](../Model/GeoJSONLayerResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVectorLayer()`

```php
getVectorLayer($layer, $z, $x, $y)
```

Get Vector Layer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GISGeospatialInformationSystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$layer = lbst.markblokke_2022; // GisLayers
$z = 16; // mixed
$x = 35054; // mixed
$y = 20514; // mixed

try {
    $apiInstance->getVectorLayer($layer, $z, $x, $y);
} catch (Exception $e) {
    echo 'Exception when calling GISGeospatialInformationSystemsApi->getVectorLayer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **layer** | [**GisLayers**](../Model/.md)|  | |
| **z** | [**mixed**](../Model/.md)|  | |
| **x** | [**mixed**](../Model/.md)|  | |
| **y** | [**mixed**](../Model/.md)|  | |

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
