# Storm\PowerDnsClient\AutoprimaryApi

All URIs are relative to /api/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAutoprimary()**](AutoprimaryApi.md#createAutoprimary) | **POST** /servers/{server_id}/autoprimaries | Add an autoprimary
[**deleteAutoprimary()**](AutoprimaryApi.md#deleteAutoprimary) | **DELETE** /servers/{server_id}/autoprimaries/{ip}/{nameserver} | Delete the autoprimary entry
[**getAutoprimaries()**](AutoprimaryApi.md#getAutoprimaries) | **GET** /servers/{server_id}/autoprimaries | Get a list of autoprimaries


## `createAutoprimary()`

```php
createAutoprimary($serverId, $autoprimary)
```

Add an autoprimary

This methods add a new autoprimary server.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Storm\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Storm\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Storm\PowerDnsClient\Api\AutoprimaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serverId = 'serverId_example'; // string | The id of the server to manage the list of autoprimaries on
$autoprimary = new \Storm\PowerDnsClient\Model\Autoprimary(); // \Storm\PowerDnsClient\Model\Autoprimary | autoprimary entry to add

try {
    $apiInstance->createAutoprimary($serverId, $autoprimary);
} catch (Exception $e) {
    echo 'Exception when calling AutoprimaryApi->createAutoprimary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverId** | **string**| The id of the server to manage the list of autoprimaries on |
 **autoprimary** | [**\Storm\PowerDnsClient\Model\Autoprimary**](../Model/Autoprimary.md)| autoprimary entry to add |

### Return type

void (empty response body)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAutoprimary()`

```php
deleteAutoprimary($serverId, $ip, $nameserver)
```

Delete the autoprimary entry

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Storm\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Storm\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Storm\PowerDnsClient\Api\AutoprimaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serverId = 'serverId_example'; // string | The id of the server to delete the autoprimary from
$ip = 'ip_example'; // string | IP address of autoprimary
$nameserver = 'nameserver_example'; // string | DNS name of the autoprimary

try {
    $apiInstance->deleteAutoprimary($serverId, $ip, $nameserver);
} catch (Exception $e) {
    echo 'Exception when calling AutoprimaryApi->deleteAutoprimary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverId** | **string**| The id of the server to delete the autoprimary from |
 **ip** | **string**| IP address of autoprimary |
 **nameserver** | **string**| DNS name of the autoprimary |

### Return type

void (empty response body)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAutoprimaries()`

```php
getAutoprimaries($serverId): \Storm\PowerDnsClient\Model\Autoprimary
```

Get a list of autoprimaries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Storm\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Storm\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Storm\PowerDnsClient\Api\AutoprimaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serverId = 'serverId_example'; // string | The id of the server to manage the list of autoprimaries on

try {
    $result = $apiInstance->getAutoprimaries($serverId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoprimaryApi->getAutoprimaries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverId** | **string**| The id of the server to manage the list of autoprimaries on |

### Return type

[**\Storm\PowerDnsClient\Model\Autoprimary**](../Model/Autoprimary.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
