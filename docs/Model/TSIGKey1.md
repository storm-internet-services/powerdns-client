# # TSIGKey1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the key | [optional]
**id** | **string** | The ID for this key, used in the TSIGkey URL endpoint. | [optional] [readonly]
**algorithm** | **string** | The algorithm of the TSIG key | [optional]
**key** | **string** | The Base64 encoded secret key, empty when listing keys. MAY be empty when POSTing to have the server generate the key material | [optional]
**type** | **string** | Set to \&quot;TSIGKey\&quot; | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
