# OpenAPI\Client\CVRDetCentraleVirksomhedsregisterApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**expandNetwork()**](CVRDetCentraleVirksomhedsregisterApi.md#expandNetwork) | **GET** /api/v2/cvr/{id}/expand-network | Expand Network |
| [**getCompanyFinancials()**](CVRDetCentraleVirksomhedsregisterApi.md#getCompanyFinancials) | **GET** /api/v2/cvr/companies/{cvr_number}/financials | Get Company Financials |
| [**getCompanyFinancialsLatest()**](CVRDetCentraleVirksomhedsregisterApi.md#getCompanyFinancialsLatest) | **GET** /api/v2/cvr/companies/{cvr_number}/financials/latest | Get Company Financials Latest |
| [**getCompanyTimeline()**](CVRDetCentraleVirksomhedsregisterApi.md#getCompanyTimeline) | **GET** /api/v2/cvr/companies/{cvr_number}/timeline | Get Company Timeline |
| [**getConnectionsBetweenPair()**](CVRDetCentraleVirksomhedsregisterApi.md#getConnectionsBetweenPair) | **GET** /api/v2/cvr/network/pair | Get Connections Between Pair |
| [**getCvrCompanies()**](CVRDetCentraleVirksomhedsregisterApi.md#getCvrCompanies) | **GET** /api/v2/cvr/companies | Get Cvr Companies |
| [**getCvrCompaniesAdvanced()**](CVRDetCentraleVirksomhedsregisterApi.md#getCvrCompaniesAdvanced) | **POST** /api/v2/cvr/companies | Get Cvr Companies Advanced |
| [**getCvrCompany()**](CVRDetCentraleVirksomhedsregisterApi.md#getCvrCompany) | **GET** /api/v2/cvr/companies/{cvr_number} | Get Cvr Company |
| [**getCvrMember()**](CVRDetCentraleVirksomhedsregisterApi.md#getCvrMember) | **GET** /api/v2/cvr/members/{unit_number} | Get Cvr Member |
| [**getCvrMembers()**](CVRDetCentraleVirksomhedsregisterApi.md#getCvrMembers) | **GET** /api/v2/cvr/members | Get Cvr Members |
| [**getCvrMembersAdvanced()**](CVRDetCentraleVirksomhedsregisterApi.md#getCvrMembersAdvanced) | **POST** /api/v2/cvr/members | Get Cvr Members Advanced |
| [**getCvrNetwork()**](CVRDetCentraleVirksomhedsregisterApi.md#getCvrNetwork) | **GET** /api/v2/cvr/{id}/network | Get Cvr Network |
| [**getCvrPUnit()**](CVRDetCentraleVirksomhedsregisterApi.md#getCvrPUnit) | **GET** /api/v2/cvr/p-units/{p_number} | Get Cvr P Unit |
| [**getCvrPUnits()**](CVRDetCentraleVirksomhedsregisterApi.md#getCvrPUnits) | **GET** /api/v2/cvr/p-units | Get Cvr P Units |
| [**getCvrPUnitsAdvanced()**](CVRDetCentraleVirksomhedsregisterApi.md#getCvrPUnitsAdvanced) | **POST** /api/v2/cvr/p-units | Get Cvr P Units Advanced |
| [**getMemberTimeline()**](CVRDetCentraleVirksomhedsregisterApi.md#getMemberTimeline) | **GET** /api/v2/cvr/members/{cvr_number}/timeline | Get Member Timeline |
| [**getPartnersInCrime()**](CVRDetCentraleVirksomhedsregisterApi.md#getPartnersInCrime) | **GET** /api/v2/cvr/{id}/partners-in-crime | Get Partners In Crime |


## `expandNetwork()`

```php
expandNetwork($id, $node_label, $relationship_types, $target_date, $depth_up, $depth_down): \OpenAPI\Client\Model\CVRNetworkResponse
```

Expand Network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CVRDetCentraleVirksomhedsregisterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 41527080; // mixed | ID of the node to expand
$node_label = COMPANY; // \OpenAPI\Client\Model\GraphNodeEnum | Label of the node to expand
$relationship_types = ["LEGAL_OWNERSHIP","DERIVED_LEGAL_OWNERSHIP"]; // mixed | Relationship types to traverse
$target_date = NULL; // mixed
$depth_up = NULL; // mixed
$depth_down = NULL; // mixed

try {
    $result = $apiInstance->expandNetwork($id, $node_label, $relationship_types, $target_date, $depth_up, $depth_down);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CVRDetCentraleVirksomhedsregisterApi->expandNetwork: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**mixed**](../Model/.md)| ID of the node to expand | |
| **node_label** | [**\OpenAPI\Client\Model\GraphNodeEnum**](../Model/.md)| Label of the node to expand | |
| **relationship_types** | [**mixed**](../Model/.md)| Relationship types to traverse | |
| **target_date** | [**mixed**](../Model/.md)|  | [optional] |
| **depth_up** | [**mixed**](../Model/.md)|  | [optional] |
| **depth_down** | [**mixed**](../Model/.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CVRNetworkResponse**](../Model/CVRNetworkResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCompanyFinancials()`

```php
getCompanyFinancials($cvr_number, $size, $includes, $excludes): mixed
```

Get Company Financials

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CVRDetCentraleVirksomhedsregisterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cvr_number = 41527080; // mixed | CVR-number of a company
$size = NULL; // mixed
$includes = NULL; // mixed
$excludes = NULL; // mixed

try {
    $result = $apiInstance->getCompanyFinancials($cvr_number, $size, $includes, $excludes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CVRDetCentraleVirksomhedsregisterApi->getCompanyFinancials: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cvr_number** | [**mixed**](../Model/.md)| CVR-number of a company | |
| **size** | [**mixed**](../Model/.md)|  | [optional] |
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

## `getCompanyFinancialsLatest()`

```php
getCompanyFinancialsLatest($cvr_number, $includes, $excludes): \OpenAPI\Client\Model\AnnualReportSimple
```

Get Company Financials Latest

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CVRDetCentraleVirksomhedsregisterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cvr_number = 41527080; // mixed | CVR-number of a company
$includes = NULL; // mixed
$excludes = NULL; // mixed

try {
    $result = $apiInstance->getCompanyFinancialsLatest($cvr_number, $includes, $excludes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CVRDetCentraleVirksomhedsregisterApi->getCompanyFinancialsLatest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cvr_number** | [**mixed**](../Model/.md)| CVR-number of a company | |
| **includes** | [**mixed**](../Model/.md)|  | [optional] |
| **excludes** | [**mixed**](../Model/.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AnnualReportSimple**](../Model/AnnualReportSimple.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCompanyTimeline()`

```php
getCompanyTimeline($cvr_number): mixed
```

Get Company Timeline

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CVRDetCentraleVirksomhedsregisterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cvr_number = 41527080; // mixed | CVR-number of a company

try {
    $result = $apiInstance->getCompanyTimeline($cvr_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CVRDetCentraleVirksomhedsregisterApi->getCompanyTimeline: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cvr_number** | [**mixed**](../Model/.md)| CVR-number of a company | |

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

## `getConnectionsBetweenPair()`

```php
getConnectionsBetweenPair($id_from, $type_from, $id_to, $type_to, $relationship_types, $find_all_paths, $max_depth): \OpenAPI\Client\Model\CVRNetworkResponse
```

Get Connections Between Pair

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CVRDetCentraleVirksomhedsregisterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_from = 4008511070; // mixed | Id of first node
$type_from = MEMBER; // \OpenAPI\Client\Model\GraphNodeEnum | Type of first node
$id_to = 4000734180; // mixed | Id of second node
$type_to = MEMBER; // \OpenAPI\Client\Model\GraphNodeEnum | Type of second node
$relationship_types = ["LEGAL_OWNERSHIP"]; // mixed | Relationship types to traverse
$find_all_paths = NULL; // mixed | Whether to find all paths (including historical connections) or just the shortest currently active paths
$max_depth = NULL; // mixed | Maximum depth to traverse

try {
    $result = $apiInstance->getConnectionsBetweenPair($id_from, $type_from, $id_to, $type_to, $relationship_types, $find_all_paths, $max_depth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CVRDetCentraleVirksomhedsregisterApi->getConnectionsBetweenPair: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id_from** | [**mixed**](../Model/.md)| Id of first node | |
| **type_from** | [**\OpenAPI\Client\Model\GraphNodeEnum**](../Model/.md)| Type of first node | |
| **id_to** | [**mixed**](../Model/.md)| Id of second node | |
| **type_to** | [**\OpenAPI\Client\Model\GraphNodeEnum**](../Model/.md)| Type of second node | |
| **relationship_types** | [**mixed**](../Model/.md)| Relationship types to traverse | |
| **find_all_paths** | [**mixed**](../Model/.md)| Whether to find all paths (including historical connections) or just the shortest currently active paths | [optional] |
| **max_depth** | [**mixed**](../Model/.md)| Maximum depth to traverse | [optional] |

### Return type

[**\OpenAPI\Client\Model\CVRNetworkResponse**](../Model/CVRNetworkResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCvrCompanies()`

```php
getCvrCompanies($name, $cvr_number, $address, $status, $member, $industry, $x, $y, $distance, $page, $size, $offset, $sort, $order, $includes, $excludes): \OpenAPI\Client\Model\ESResponseModelCVRCompany
```

Get Cvr Companies

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CVRDetCentraleVirksomhedsregisterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = NULL; // mixed
$cvr_number = NULL; // mixed
$address = NULL; // mixed
$status = NULL; // mixed
$member = NULL; // mixed
$industry = NULL; // mixed
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
    $result = $apiInstance->getCvrCompanies($name, $cvr_number, $address, $status, $member, $industry, $x, $y, $distance, $page, $size, $offset, $sort, $order, $includes, $excludes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CVRDetCentraleVirksomhedsregisterApi->getCvrCompanies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | [**mixed**](../Model/.md)|  | [optional] |
| **cvr_number** | [**mixed**](../Model/.md)|  | [optional] |
| **address** | [**mixed**](../Model/.md)|  | [optional] |
| **status** | [**mixed**](../Model/.md)|  | [optional] |
| **member** | [**mixed**](../Model/.md)|  | [optional] |
| **industry** | [**mixed**](../Model/.md)|  | [optional] |
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

[**\OpenAPI\Client\Model\ESResponseModelCVRCompany**](../Model/ESResponseModelCVRCompany.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCvrCompaniesAdvanced()`

```php
getCvrCompaniesAdvanced($size, $offset, $request_body): \OpenAPI\Client\Model\ESResponseModelCVRCompany
```

Get Cvr Companies Advanced

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CVRDetCentraleVirksomhedsregisterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$size = NULL; // mixed
$offset = NULL; // mixed
$request_body = {"source":["cvr_number","name","foundation_date","industry_*"],"page":"WyJBQ01FIEEvUyIsMTIsMV0=","query":[{"field":"company_type_code","value":80},{"field":"status","value":"NORMAL"}],"sort":{"field":"name.keyword","order":"asc"}}; // array<string,mixed>

try {
    $result = $apiInstance->getCvrCompaniesAdvanced($size, $offset, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CVRDetCentraleVirksomhedsregisterApi->getCvrCompaniesAdvanced: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **size** | [**mixed**](../Model/.md)|  | [optional] |
| **offset** | [**mixed**](../Model/.md)|  | [optional] |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ESResponseModelCVRCompany**](../Model/ESResponseModelCVRCompany.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCvrCompany()`

```php
getCvrCompany($cvr_number, $includes, $excludes): \OpenAPI\Client\Model\CVRCompany
```

Get Cvr Company

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CVRDetCentraleVirksomhedsregisterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cvr_number = 41527080; // mixed | CVR-number of a company
$includes = NULL; // mixed
$excludes = NULL; // mixed

try {
    $result = $apiInstance->getCvrCompany($cvr_number, $includes, $excludes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CVRDetCentraleVirksomhedsregisterApi->getCvrCompany: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cvr_number** | [**mixed**](../Model/.md)| CVR-number of a company | |
| **includes** | [**mixed**](../Model/.md)|  | [optional] |
| **excludes** | [**mixed**](../Model/.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CVRCompany**](../Model/CVRCompany.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCvrMember()`

```php
getCvrMember($unit_number, $includes, $excludes): \OpenAPI\Client\Model\ResightsModelsTablesCvrMemberMemberCVRMember
```

Get Cvr Member

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CVRDetCentraleVirksomhedsregisterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$unit_number = 4008511070; // mixed | Unit-number of a member
$includes = NULL; // mixed
$excludes = NULL; // mixed

try {
    $result = $apiInstance->getCvrMember($unit_number, $includes, $excludes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CVRDetCentraleVirksomhedsregisterApi->getCvrMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **unit_number** | [**mixed**](../Model/.md)| Unit-number of a member | |
| **includes** | [**mixed**](../Model/.md)|  | [optional] |
| **excludes** | [**mixed**](../Model/.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ResightsModelsTablesCvrMemberMemberCVRMember**](../Model/ResightsModelsTablesCvrMemberMemberCVRMember.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCvrMembers()`

```php
getCvrMembers($name, $unit_number, $address, $type, $company, $x, $y, $distance, $size, $offset, $sort, $order, $includes, $excludes, $page): \OpenAPI\Client\Model\ESResponseModelCVRMember
```

Get Cvr Members

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CVRDetCentraleVirksomhedsregisterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = NULL; // mixed
$unit_number = NULL; // mixed
$address = NULL; // mixed
$type = NULL; // mixed
$company = NULL; // mixed
$x = NULL; // mixed | Longitude. Example: 12.5494
$y = NULL; // mixed | Latitute. Example: 55.6722
$distance = 100m; // mixed | Distance from x, y
$size = NULL; // mixed
$offset = NULL; // mixed
$sort = NULL; // mixed
$order = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ResightsApiModelsResponseSortOrder(); // \OpenAPI\Client\Model\ResightsApiModelsResponseSortOrder
$includes = NULL; // mixed
$excludes = NULL; // mixed
$page = NULL; // mixed | Page id for pagination

try {
    $result = $apiInstance->getCvrMembers($name, $unit_number, $address, $type, $company, $x, $y, $distance, $size, $offset, $sort, $order, $includes, $excludes, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CVRDetCentraleVirksomhedsregisterApi->getCvrMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | [**mixed**](../Model/.md)|  | [optional] |
| **unit_number** | [**mixed**](../Model/.md)|  | [optional] |
| **address** | [**mixed**](../Model/.md)|  | [optional] |
| **type** | [**mixed**](../Model/.md)|  | [optional] |
| **company** | [**mixed**](../Model/.md)|  | [optional] |
| **x** | [**mixed**](../Model/.md)| Longitude. Example: 12.5494 | [optional] |
| **y** | [**mixed**](../Model/.md)| Latitute. Example: 55.6722 | [optional] |
| **distance** | [**mixed**](../Model/.md)| Distance from x, y | [optional] |
| **size** | [**mixed**](../Model/.md)|  | [optional] |
| **offset** | [**mixed**](../Model/.md)|  | [optional] |
| **sort** | [**mixed**](../Model/.md)|  | [optional] |
| **order** | [**\OpenAPI\Client\Model\ResightsApiModelsResponseSortOrder**](../Model/.md)|  | [optional] |
| **includes** | [**mixed**](../Model/.md)|  | [optional] |
| **excludes** | [**mixed**](../Model/.md)|  | [optional] |
| **page** | [**mixed**](../Model/.md)| Page id for pagination | [optional] |

### Return type

[**\OpenAPI\Client\Model\ESResponseModelCVRMember**](../Model/ESResponseModelCVRMember.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCvrMembersAdvanced()`

```php
getCvrMembersAdvanced($size, $offset, $request_body): \OpenAPI\Client\Model\ESResponseModelCVRMember
```

Get Cvr Members Advanced

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CVRDetCentraleVirksomhedsregisterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$size = NULL; // mixed
$offset = NULL; // mixed
$request_body = {"source":["unit_number","name","address"],"query":[{"field":"address.municipality_code","value":101},{"field":"last_imported","value":{"gte":"2023-12-23"}}],"sort":{"field":"name.keyword","order":"asc"}}; // array<string,mixed>

try {
    $result = $apiInstance->getCvrMembersAdvanced($size, $offset, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CVRDetCentraleVirksomhedsregisterApi->getCvrMembersAdvanced: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **size** | [**mixed**](../Model/.md)|  | [optional] |
| **offset** | [**mixed**](../Model/.md)|  | [optional] |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ESResponseModelCVRMember**](../Model/ESResponseModelCVRMember.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCvrNetwork()`

```php
getCvrNetwork($id, $depth_up, $depth_down, $include_properties, $include_ownership_degrees, $include_inactive): \OpenAPI\Client\Model\CVROwnershipNetworkResponse
```

Get Cvr Network

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CVRDetCentraleVirksomhedsregisterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 41527080; // mixed | Either CVR-number of a company, unit number of a person/other member or an EJF id
$depth_up = NULL; // mixed
$depth_down = NULL; // mixed
$include_properties = NULL; // mixed
$include_ownership_degrees = NULL; // mixed
$include_inactive = NULL; // mixed

try {
    $result = $apiInstance->getCvrNetwork($id, $depth_up, $depth_down, $include_properties, $include_ownership_degrees, $include_inactive);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CVRDetCentraleVirksomhedsregisterApi->getCvrNetwork: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**mixed**](../Model/.md)| Either CVR-number of a company, unit number of a person/other member or an EJF id | |
| **depth_up** | [**mixed**](../Model/.md)|  | [optional] |
| **depth_down** | [**mixed**](../Model/.md)|  | [optional] |
| **include_properties** | [**mixed**](../Model/.md)|  | [optional] |
| **include_ownership_degrees** | [**mixed**](../Model/.md)|  | [optional] |
| **include_inactive** | [**mixed**](../Model/.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CVROwnershipNetworkResponse**](../Model/CVROwnershipNetworkResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCvrPUnit()`

```php
getCvrPUnit($p_number, $includes, $excludes): \OpenAPI\Client\Model\CVRPUnit
```

Get Cvr P Unit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CVRDetCentraleVirksomhedsregisterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$p_number = 4008514110; // mixed | P-number of a p-unit
$includes = NULL; // mixed
$excludes = NULL; // mixed

try {
    $result = $apiInstance->getCvrPUnit($p_number, $includes, $excludes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CVRDetCentraleVirksomhedsregisterApi->getCvrPUnit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **p_number** | [**mixed**](../Model/.md)| P-number of a p-unit | |
| **includes** | [**mixed**](../Model/.md)|  | [optional] |
| **excludes** | [**mixed**](../Model/.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CVRPUnit**](../Model/CVRPUnit.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCvrPUnits()`

```php
getCvrPUnits($name, $p_number, $cvr_number, $address, $status, $x, $y, $distance, $page, $size, $offset, $sort, $order, $includes, $excludes): \OpenAPI\Client\Model\ESResponseModelCVRPUnit
```

Get Cvr P Units

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CVRDetCentraleVirksomhedsregisterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = NULL; // mixed
$p_number = NULL; // mixed
$cvr_number = NULL; // mixed
$address = NULL; // mixed
$status = NULL; // mixed
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
    $result = $apiInstance->getCvrPUnits($name, $p_number, $cvr_number, $address, $status, $x, $y, $distance, $page, $size, $offset, $sort, $order, $includes, $excludes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CVRDetCentraleVirksomhedsregisterApi->getCvrPUnits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | [**mixed**](../Model/.md)|  | [optional] |
| **p_number** | [**mixed**](../Model/.md)|  | [optional] |
| **cvr_number** | [**mixed**](../Model/.md)|  | [optional] |
| **address** | [**mixed**](../Model/.md)|  | [optional] |
| **status** | [**mixed**](../Model/.md)|  | [optional] |
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

[**\OpenAPI\Client\Model\ESResponseModelCVRPUnit**](../Model/ESResponseModelCVRPUnit.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCvrPUnitsAdvanced()`

```php
getCvrPUnitsAdvanced($size, $offset, $request_body): \OpenAPI\Client\Model\ESResponseModelCVRPUnit
```

Get Cvr P Units Advanced

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CVRDetCentraleVirksomhedsregisterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$size = NULL; // mixed
$offset = NULL; // mixed
$request_body = {"source":["unit_number","cvr_number","name","foundation_date","industry_*"],"page":"WyJBQ01FIEEvUyIsMTIsMV0=","query":[{"field":"address.municipality_code","value":101},{"field":"status","value":"AKTIV"}],"sort":{"field":"name.keyword","order":"asc"}}; // array<string,mixed>

try {
    $result = $apiInstance->getCvrPUnitsAdvanced($size, $offset, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CVRDetCentraleVirksomhedsregisterApi->getCvrPUnitsAdvanced: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **size** | [**mixed**](../Model/.md)|  | [optional] |
| **offset** | [**mixed**](../Model/.md)|  | [optional] |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ESResponseModelCVRPUnit**](../Model/ESResponseModelCVRPUnit.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMemberTimeline()`

```php
getMemberTimeline($cvr_number): mixed
```

Get Member Timeline

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CVRDetCentraleVirksomhedsregisterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cvr_number = 4008511070; // mixed | Unit-number of a member

try {
    $result = $apiInstance->getMemberTimeline($cvr_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CVRDetCentraleVirksomhedsregisterApi->getMemberTimeline: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cvr_number** | [**mixed**](../Model/.md)| Unit-number of a member | |

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

## `getPartnersInCrime()`

```php
getPartnersInCrime($id, $relationship_types): \OpenAPI\Client\Model\CVRNetworkResponse
```

Get Partners In Crime

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CVRDetCentraleVirksomhedsregisterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 4000734180; // mixed | Unit number of a person/other member in CVR
$relationship_types = ["LEGAL_OWNERSHIP","CEO","DIRECTOR","BOARD_MEMBER","STAKEHOLDER","REAL_OWNERSHIP"]; // mixed | Relationship types to traverse

try {
    $result = $apiInstance->getPartnersInCrime($id, $relationship_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CVRDetCentraleVirksomhedsregisterApi->getPartnersInCrime: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**mixed**](../Model/.md)| Unit number of a person/other member in CVR | |
| **relationship_types** | [**mixed**](../Model/.md)| Relationship types to traverse | |

### Return type

[**\OpenAPI\Client\Model\CVRNetworkResponse**](../Model/CVRNetworkResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
