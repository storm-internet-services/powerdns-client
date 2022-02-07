# Storm\PowerDnsClient\TsigkeyApi

All URIs are relative to /api/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTSIGKey()**](TsigkeyApi.md#createTSIGKey) | **POST** /servers/{server_id}/tsigkeys | Add a TSIG key
[**deleteTSIGKey()**](TsigkeyApi.md#deleteTSIGKey) | **DELETE** /servers/{server_id}/tsigkeys/{tsigkey_id} | Delete the TSIGKey with tsigkey_id
[**getTSIGKey()**](TsigkeyApi.md#getTSIGKey) | **GET** /servers/{server_id}/tsigkeys/{tsigkey_id} | Get a specific TSIGKeys on the server, including the actual key
[**listTSIGKeys()**](TsigkeyApi.md#listTSIGKeys) | **GET** /servers/{server_id}/tsigkeys | Get all TSIGKeys on the server, except the actual key
[**putTSIGKey()**](TsigkeyApi.md#putTSIGKey) | **PUT** /servers/{server_id}/tsigkeys/{tsigkey_id} | 


## `createTSIGKey()`

```php
createTSIGKey($serverId, $tsigkey): object
```

Add a TSIG key

This methods add a new TSIGKey. The actual key can be generated by the server or be provided by the client

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Storm\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Storm\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Storm\PowerDnsClient\Api\TsigkeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serverId = 'serverId_example'; // string | The id of the server
$tsigkey = new \Storm\PowerDnsClient\Model\TSIGKey1(); // \Storm\PowerDnsClient\Model\TSIGKey1

try {
    $result = $apiInstance->createTSIGKey($serverId, $tsigkey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TsigkeyApi->createTSIGKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverId** | **string**| The id of the server |
 **tsigkey** | [**\Storm\PowerDnsClient\Model\TSIGKey1**](../Model/TSIGKey1.md)|  |

### Return type

**object**

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTSIGKey()`

```php
deleteTSIGKey($serverId, $tsigkeyId)
```

Delete the TSIGKey with tsigkey_id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Storm\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Storm\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Storm\PowerDnsClient\Api\TsigkeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serverId = 'serverId_example'; // string | The id of the server to retrieve the key from
$tsigkeyId = 'tsigkeyId_example'; // string | The id of the TSIGkey. Should match the \"id\" field in the TSIGKey object

try {
    $apiInstance->deleteTSIGKey($serverId, $tsigkeyId);
} catch (Exception $e) {
    echo 'Exception when calling TsigkeyApi->deleteTSIGKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverId** | **string**| The id of the server to retrieve the key from |
 **tsigkeyId** | **string**| The id of the TSIGkey. Should match the \&quot;id\&quot; field in the TSIGKey object |

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

## `getTSIGKey()`

```php
getTSIGKey($serverId, $tsigkeyId): object
```

Get a specific TSIGKeys on the server, including the actual key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Storm\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Storm\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Storm\PowerDnsClient\Api\TsigkeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serverId = 'serverId_example'; // string | The id of the server to retrieve the key from
$tsigkeyId = 'tsigkeyId_example'; // string | The id of the TSIGkey. Should match the \"id\" field in the TSIGKey object

try {
    $result = $apiInstance->getTSIGKey($serverId, $tsigkeyId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TsigkeyApi->getTSIGKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverId** | **string**| The id of the server to retrieve the key from |
 **tsigkeyId** | **string**| The id of the TSIGkey. Should match the \&quot;id\&quot; field in the TSIGKey object |

### Return type

**object**

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTSIGKeys()`

```php
listTSIGKeys($serverId): \Storm\PowerDnsClient\Model\TSIGKey[]
```

Get all TSIGKeys on the server, except the actual key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Storm\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Storm\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Storm\PowerDnsClient\Api\TsigkeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serverId = 'serverId_example'; // string | The id of the server

try {
    $result = $apiInstance->listTSIGKeys($serverId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TsigkeyApi->listTSIGKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverId** | **string**| The id of the server |

### Return type

[**\Storm\PowerDnsClient\Model\TSIGKey[]**](../Model/TSIGKey.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putTSIGKey()`

```php
putTSIGKey($serverId, $tsigkeyId, $tsigkey): object
```



The TSIGKey at tsigkey_id can be changed in multiple ways:  * Changing the Name, this will remove the key with tsigkey_id after adding.  * Changing the Algorithm  * Changing the Key  Only the relevant fields have to be provided in the request body.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Storm\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Storm\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Storm\PowerDnsClient\Api\TsigkeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serverId = 'serverId_example'; // string | The id of the server to retrieve the key from
$tsigkeyId = 'tsigkeyId_example'; // string | The id of the TSIGkey. Should match the \"id\" field in the TSIGKey object
$tsigkey = new \Storm\PowerDnsClient\Model\TSIGKey2(); // \Storm\PowerDnsClient\Model\TSIGKey2

try {
    $result = $apiInstance->putTSIGKey($serverId, $tsigkeyId, $tsigkey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TsigkeyApi->putTSIGKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverId** | **string**| The id of the server to retrieve the key from |
 **tsigkeyId** | **string**| The id of the TSIGkey. Should match the \&quot;id\&quot; field in the TSIGKey object |
 **tsigkey** | [**\Storm\PowerDnsClient\Model\TSIGKey2**](../Model/TSIGKey2.md)|  |

### Return type

**object**

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)