# # Cryptokey

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | set to \&quot;Cryptokey\&quot; | [optional]
**id** | **int** | The internal identifier, read only | [optional]
**keytype** | **string** |  | [optional]
**active** | **bool** | Whether or not the key is in active use | [optional]
**published** | **bool** | Whether or not the DNSKEY record is published in the zone | [optional]
**dnskey** | **string** | The DNSKEY record for this key | [optional]
**ds** | **string[]** | An array of DS records for this key | [optional]
**cds** | **string[]** | An array of DS records for this key, filtered by CDS publication settings | [optional]
**privatekey** | **string** | The private key in ISC format | [optional]
**algorithm** | **string** | The name of the algorithm of the key, should be a mnemonic | [optional]
**bits** | **int** | The size of the key | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
