# Storm\PowerDnsClient\SearchApi

All URIs are relative to /api/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**searchData()**](SearchApi.md#searchData) | **GET** /servers/{server_id}/search-data | Search the data inside PowerDNS


## `searchData()`

```php
searchData($serverId, $q, $max, $objectType): \Storm\PowerDnsClient\Model\SearchResult[]
```

Search the data inside PowerDNS

Search the data inside PowerDNS for search_term and return at most max_results. This includes zones, records and comments. The * character can be used in search_term as a wildcard character and the ? character can be used as a wildcard for a single character.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Storm\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Storm\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Storm\PowerDnsClient\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serverId = 'serverId_example'; // string | The id of the server to retrieve
$q = 'q_example'; // string | The string to search for
$max = 56; // int | Maximum number of entries to return
$objectType = 'objectType_example'; // string | Type of data to search for, one of “all”, “zone”, “record”, “comment”

try {
    $result = $apiInstance->searchData($serverId, $q, $max, $objectType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverId** | **string**| The id of the server to retrieve |
 **q** | **string**| The string to search for |
 **max** | **int**| Maximum number of entries to return |
 **objectType** | **string**| Type of data to search for, one of “all”, “zone”, “record”, “comment” | [optional]

### Return type

[**\Storm\PowerDnsClient\Model\SearchResult[]**](../Model/SearchResult.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
