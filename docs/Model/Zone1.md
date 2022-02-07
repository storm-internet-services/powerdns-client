# # Zone1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Opaque zone id (string), assigned by the server, should not be interpreted by the application. Guaranteed to be safe for embedding in URLs. | [optional]
**name** | **string** | Name of the zone (e.g. “example.com.”) MUST have a trailing dot | [optional]
**type** | **string** | Set to “Zone” | [optional]
**url** | **string** | API endpoint for this zone | [optional]
**kind** | **string** | Zone kind, one of “Native”, “Master”, “Slave” | [optional]
**rrsets** | [**\Storm\PowerDnsClient\Model\RRSet[]**](RRSet.md) | RRSets in this zone (for zones/{zone_id} endpoint only; omitted during GET on the .../zones list endpoint) | [optional]
**serial** | **int** | The SOA serial number | [optional]
**notifiedSerial** | **int** | The SOA serial notifications have been sent out for | [optional]
**editedSerial** | **int** | The SOA serial as seen in query responses. Calculated using the SOA-EDIT metadata, default-soa-edit and default-soa-edit-signed settings | [optional]
**masters** | **string[]** | List of IP addresses configured as a master for this zone (“Slave” type zones only) | [optional]
**dnssec** | **bool** | Whether or not this zone is DNSSEC signed (inferred from presigned being true XOR presence of at least one cryptokey with active being true) | [optional]
**nsec3param** | **string** | The NSEC3PARAM record | [optional]
**nsec3narrow** | **bool** | Whether or not the zone uses NSEC3 narrow | [optional]
**presigned** | **bool** | Whether or not the zone is pre-signed | [optional]
**soaEdit** | **string** | The SOA-EDIT metadata item | [optional]
**soaEditApi** | **string** | The SOA-EDIT-API metadata item | [optional]
**apiRectify** | **bool** | Whether or not the zone will be rectified on data changes via the API | [optional]
**zone** | **string** | MAY contain a BIND-style zone file when creating a zone | [optional]
**account** | **string** | MAY be set. Its value is defined by local policy | [optional]
**nameservers** | **string[]** | MAY be sent in client bodies during creation, and MUST NOT be sent by the server. Simple list of strings of nameserver names, including the trailing dot. Not required for slave zones. | [optional]
**masterTsigKeyIds** | **string[]** | The id of the TSIG keys used for master operation in this zone | [optional]
**slaveTsigKeyIds** | **string[]** | The id of the TSIG keys used for slave operation in this zone | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
