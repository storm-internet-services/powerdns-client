# Storm\PowerDnsClient\ZonecryptokeyApi

All URIs are relative to /api/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCryptokey()**](ZonecryptokeyApi.md#createCryptokey) | **POST** /servers/{server_id}/zones/{zone_id}/cryptokeys | Creates a Cryptokey
[**deleteCryptokey()**](ZonecryptokeyApi.md#deleteCryptokey) | **DELETE** /servers/{server_id}/zones/{zone_id}/cryptokeys/{cryptokey_id} | This method deletes a key specified by cryptokey_id.
[**getCryptokey()**](ZonecryptokeyApi.md#getCryptokey) | **GET** /servers/{server_id}/zones/{zone_id}/cryptokeys/{cryptokey_id} | Returns all data about the CryptoKey, including the privatekey.
[**listCryptokeys()**](ZonecryptokeyApi.md#listCryptokeys) | **GET** /servers/{server_id}/zones/{zone_id}/cryptokeys | Get all CryptoKeys for a zone, except the privatekey
[**modifyCryptokey()**](ZonecryptokeyApi.md#modifyCryptokey) | **PUT** /servers/{server_id}/zones/{zone_id}/cryptokeys/{cryptokey_id} | This method (de)activates a key from zone_name specified by cryptokey_id


## `createCryptokey()`

```php
createCryptokey($serverId, $zoneId, $cryptokey): \Storm\PowerDnsClient\Model\Cryptokey
```

Creates a Cryptokey

This method adds a new key to a zone. The key can either be generated or imported by supplying the content parameter. if content, bits and algo are null, a key will be generated based on the default-ksk-algorithm and default-ksk-size settings for a KSK and the default-zsk-algorithm and default-zsk-size options for a ZSK.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Storm\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Storm\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Storm\PowerDnsClient\Api\ZonecryptokeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serverId = 'serverId_example'; // string | The id of the server to retrieve
$zoneId = 'zoneId_example'; // string
$cryptokey = new \Storm\PowerDnsClient\Model\Cryptokey(); // \Storm\PowerDnsClient\Model\Cryptokey | Add a Cryptokey

try {
    $result = $apiInstance->createCryptokey($serverId, $zoneId, $cryptokey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonecryptokeyApi->createCryptokey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverId** | **string**| The id of the server to retrieve |
 **zoneId** | **string**|  |
 **cryptokey** | [**\Storm\PowerDnsClient\Model\Cryptokey**](../Model/Cryptokey.md)| Add a Cryptokey |

### Return type

[**\Storm\PowerDnsClient\Model\Cryptokey**](../Model/Cryptokey.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCryptokey()`

```php
deleteCryptokey($serverId, $zoneId, $cryptokeyId)
```

This method deletes a key specified by cryptokey_id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Storm\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Storm\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Storm\PowerDnsClient\Api\ZonecryptokeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serverId = 'serverId_example'; // string | The id of the server to retrieve
$zoneId = 'zoneId_example'; // string | The id of the zone to retrieve
$cryptokeyId = 'cryptokeyId_example'; // string | The id value of the Cryptokey

try {
    $apiInstance->deleteCryptokey($serverId, $zoneId, $cryptokeyId);
} catch (Exception $e) {
    echo 'Exception when calling ZonecryptokeyApi->deleteCryptokey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverId** | **string**| The id of the server to retrieve |
 **zoneId** | **string**| The id of the zone to retrieve |
 **cryptokeyId** | **string**| The id value of the Cryptokey |

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

## `getCryptokey()`

```php
getCryptokey($serverId, $zoneId, $cryptokeyId): \Storm\PowerDnsClient\Model\Cryptokey
```

Returns all data about the CryptoKey, including the privatekey.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Storm\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Storm\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Storm\PowerDnsClient\Api\ZonecryptokeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serverId = 'serverId_example'; // string | The id of the server to retrieve
$zoneId = 'zoneId_example'; // string | The id of the zone to retrieve
$cryptokeyId = 'cryptokeyId_example'; // string | The id value of the CryptoKey

try {
    $result = $apiInstance->getCryptokey($serverId, $zoneId, $cryptokeyId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonecryptokeyApi->getCryptokey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverId** | **string**| The id of the server to retrieve |
 **zoneId** | **string**| The id of the zone to retrieve |
 **cryptokeyId** | **string**| The id value of the CryptoKey |

### Return type

[**\Storm\PowerDnsClient\Model\Cryptokey**](../Model/Cryptokey.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCryptokeys()`

```php
listCryptokeys($serverId, $zoneId): \Storm\PowerDnsClient\Model\Cryptokey[]
```

Get all CryptoKeys for a zone, except the privatekey

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Storm\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Storm\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Storm\PowerDnsClient\Api\ZonecryptokeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serverId = 'serverId_example'; // string | The id of the server to retrieve
$zoneId = 'zoneId_example'; // string | The id of the zone to retrieve

try {
    $result = $apiInstance->listCryptokeys($serverId, $zoneId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonecryptokeyApi->listCryptokeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverId** | **string**| The id of the server to retrieve |
 **zoneId** | **string**| The id of the zone to retrieve |

### Return type

[**\Storm\PowerDnsClient\Model\Cryptokey[]**](../Model/Cryptokey.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modifyCryptokey()`

```php
modifyCryptokey($serverId, $zoneId, $cryptokeyId, $cryptokey)
```

This method (de)activates a key from zone_name specified by cryptokey_id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = Storm\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Storm\PowerDnsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new Storm\PowerDnsClient\Api\ZonecryptokeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serverId = 'serverId_example'; // string | The id of the server to retrieve
$zoneId = 'zoneId_example'; // string
$cryptokeyId = 'cryptokeyId_example'; // string | Cryptokey to manipulate
$cryptokey = new \Storm\PowerDnsClient\Model\Cryptokey(); // \Storm\PowerDnsClient\Model\Cryptokey | the Cryptokey

try {
    $apiInstance->modifyCryptokey($serverId, $zoneId, $cryptokeyId, $cryptokey);
} catch (Exception $e) {
    echo 'Exception when calling ZonecryptokeyApi->modifyCryptokey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serverId** | **string**| The id of the server to retrieve |
 **zoneId** | **string**|  |
 **cryptokeyId** | **string**| Cryptokey to manipulate |
 **cryptokey** | [**\Storm\PowerDnsClient\Model\Cryptokey**](../Model/Cryptokey.md)| the Cryptokey |

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
