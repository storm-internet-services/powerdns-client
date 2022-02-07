<?php
/**
 * Zone
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Storm\PowerDnsClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * PowerDNS Authoritative HTTP API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 0.0.15
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Storm\PowerDnsClient\Model;

use \ArrayAccess;
use \Storm\PowerDnsClient\ObjectSerializer;

/**
 * Zone Class Doc Comment
 *
 * @category Class
 * @description This represents an authoritative DNS Zone.
 * @package  Storm\PowerDnsClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Zone implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Zone';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'type' => 'string',
        'url' => 'string',
        'kind' => 'string',
        'rrsets' => '\Storm\PowerDnsClient\Model\RRSet[]',
        'serial' => 'int',
        'notifiedSerial' => 'int',
        'editedSerial' => 'int',
        'masters' => 'string[]',
        'dnssec' => 'bool',
        'nsec3param' => 'string',
        'nsec3narrow' => 'bool',
        'presigned' => 'bool',
        'soaEdit' => 'string',
        'soaEditApi' => 'string',
        'apiRectify' => 'bool',
        'zone' => 'string',
        'account' => 'string',
        'nameservers' => 'string[]',
        'masterTsigKeyIds' => 'string[]',
        'slaveTsigKeyIds' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'type' => null,
        'url' => null,
        'kind' => null,
        'rrsets' => null,
        'serial' => null,
        'notifiedSerial' => null,
        'editedSerial' => null,
        'masters' => null,
        'dnssec' => null,
        'nsec3param' => null,
        'nsec3narrow' => null,
        'presigned' => null,
        'soaEdit' => null,
        'soaEditApi' => null,
        'apiRectify' => null,
        'zone' => null,
        'account' => null,
        'nameservers' => null,
        'masterTsigKeyIds' => null,
        'slaveTsigKeyIds' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'name' => 'name',
        'type' => 'type',
        'url' => 'url',
        'kind' => 'kind',
        'rrsets' => 'rrsets',
        'serial' => 'serial',
        'notifiedSerial' => 'notified_serial',
        'editedSerial' => 'edited_serial',
        'masters' => 'masters',
        'dnssec' => 'dnssec',
        'nsec3param' => 'nsec3param',
        'nsec3narrow' => 'nsec3narrow',
        'presigned' => 'presigned',
        'soaEdit' => 'soa_edit',
        'soaEditApi' => 'soa_edit_api',
        'apiRectify' => 'api_rectify',
        'zone' => 'zone',
        'account' => 'account',
        'nameservers' => 'nameservers',
        'masterTsigKeyIds' => 'master_tsig_key_ids',
        'slaveTsigKeyIds' => 'slave_tsig_key_ids'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'type' => 'setType',
        'url' => 'setUrl',
        'kind' => 'setKind',
        'rrsets' => 'setRrsets',
        'serial' => 'setSerial',
        'notifiedSerial' => 'setNotifiedSerial',
        'editedSerial' => 'setEditedSerial',
        'masters' => 'setMasters',
        'dnssec' => 'setDnssec',
        'nsec3param' => 'setNsec3param',
        'nsec3narrow' => 'setNsec3narrow',
        'presigned' => 'setPresigned',
        'soaEdit' => 'setSoaEdit',
        'soaEditApi' => 'setSoaEditApi',
        'apiRectify' => 'setApiRectify',
        'zone' => 'setZone',
        'account' => 'setAccount',
        'nameservers' => 'setNameservers',
        'masterTsigKeyIds' => 'setMasterTsigKeyIds',
        'slaveTsigKeyIds' => 'setSlaveTsigKeyIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'type' => 'getType',
        'url' => 'getUrl',
        'kind' => 'getKind',
        'rrsets' => 'getRrsets',
        'serial' => 'getSerial',
        'notifiedSerial' => 'getNotifiedSerial',
        'editedSerial' => 'getEditedSerial',
        'masters' => 'getMasters',
        'dnssec' => 'getDnssec',
        'nsec3param' => 'getNsec3param',
        'nsec3narrow' => 'getNsec3narrow',
        'presigned' => 'getPresigned',
        'soaEdit' => 'getSoaEdit',
        'soaEditApi' => 'getSoaEditApi',
        'apiRectify' => 'getApiRectify',
        'zone' => 'getZone',
        'account' => 'getAccount',
        'nameservers' => 'getNameservers',
        'masterTsigKeyIds' => 'getMasterTsigKeyIds',
        'slaveTsigKeyIds' => 'getSlaveTsigKeyIds'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const KIND_NATIVE = 'Native';
    const KIND_MASTER = 'Master';
    const KIND_SLAVE = 'Slave';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getKindAllowableValues()
    {
        return [
            self::KIND_NATIVE,
            self::KIND_MASTER,
            self::KIND_SLAVE,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = $data['id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
        $this->container['kind'] = $data['kind'] ?? null;
        $this->container['rrsets'] = $data['rrsets'] ?? null;
        $this->container['serial'] = $data['serial'] ?? null;
        $this->container['notifiedSerial'] = $data['notifiedSerial'] ?? null;
        $this->container['editedSerial'] = $data['editedSerial'] ?? null;
        $this->container['masters'] = $data['masters'] ?? null;
        $this->container['dnssec'] = $data['dnssec'] ?? null;
        $this->container['nsec3param'] = $data['nsec3param'] ?? null;
        $this->container['nsec3narrow'] = $data['nsec3narrow'] ?? null;
        $this->container['presigned'] = $data['presigned'] ?? null;
        $this->container['soaEdit'] = $data['soaEdit'] ?? null;
        $this->container['soaEditApi'] = $data['soaEditApi'] ?? null;
        $this->container['apiRectify'] = $data['apiRectify'] ?? null;
        $this->container['zone'] = $data['zone'] ?? null;
        $this->container['account'] = $data['account'] ?? null;
        $this->container['nameservers'] = $data['nameservers'] ?? null;
        $this->container['masterTsigKeyIds'] = $data['masterTsigKeyIds'] ?? null;
        $this->container['slaveTsigKeyIds'] = $data['slaveTsigKeyIds'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getKindAllowableValues();
        if (!is_null($this->container['kind']) && !in_array($this->container['kind'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'kind', must be one of '%s'",
                $this->container['kind'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Opaque zone id (string), assigned by the server, should not be interpreted by the application. Guaranteed to be safe for embedding in URLs.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Name of the zone (e.g. “example.com.”) MUST have a trailing dot
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Set to “Zone”
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url API endpoint for this zone
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets kind
     *
     * @return string|null
     */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
     * Sets kind
     *
     * @param string|null $kind Zone kind, one of “Native”, “Master”, “Slave”
     *
     * @return self
     */
    public function setKind($kind)
    {
        $allowedValues = $this->getKindAllowableValues();
        if (!is_null($kind) && !in_array($kind, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'kind', must be one of '%s'",
                    $kind,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['kind'] = $kind;

        return $this;
    }

    /**
     * Gets rrsets
     *
     * @return \Storm\PowerDnsClient\Model\RRSet[]|null
     */
    public function getRrsets()
    {
        return $this->container['rrsets'];
    }

    /**
     * Sets rrsets
     *
     * @param \Storm\PowerDnsClient\Model\RRSet[]|null $rrsets RRSets in this zone (for zones/{zone_id} endpoint only; omitted during GET on the .../zones list endpoint)
     *
     * @return self
     */
    public function setRrsets($rrsets)
    {
        $this->container['rrsets'] = $rrsets;

        return $this;
    }

    /**
     * Gets serial
     *
     * @return int|null
     */
    public function getSerial()
    {
        return $this->container['serial'];
    }

    /**
     * Sets serial
     *
     * @param int|null $serial The SOA serial number
     *
     * @return self
     */
    public function setSerial($serial)
    {
        $this->container['serial'] = $serial;

        return $this;
    }

    /**
     * Gets notifiedSerial
     *
     * @return int|null
     */
    public function getNotifiedSerial()
    {
        return $this->container['notifiedSerial'];
    }

    /**
     * Sets notifiedSerial
     *
     * @param int|null $notifiedSerial The SOA serial notifications have been sent out for
     *
     * @return self
     */
    public function setNotifiedSerial($notifiedSerial)
    {
        $this->container['notifiedSerial'] = $notifiedSerial;

        return $this;
    }

    /**
     * Gets editedSerial
     *
     * @return int|null
     */
    public function getEditedSerial()
    {
        return $this->container['editedSerial'];
    }

    /**
     * Sets editedSerial
     *
     * @param int|null $editedSerial The SOA serial as seen in query responses. Calculated using the SOA-EDIT metadata, default-soa-edit and default-soa-edit-signed settings
     *
     * @return self
     */
    public function setEditedSerial($editedSerial)
    {
        $this->container['editedSerial'] = $editedSerial;

        return $this;
    }

    /**
     * Gets masters
     *
     * @return string[]|null
     */
    public function getMasters()
    {
        return $this->container['masters'];
    }

    /**
     * Sets masters
     *
     * @param string[]|null $masters List of IP addresses configured as a master for this zone (“Slave” type zones only)
     *
     * @return self
     */
    public function setMasters($masters)
    {
        $this->container['masters'] = $masters;

        return $this;
    }

    /**
     * Gets dnssec
     *
     * @return bool|null
     */
    public function getDnssec()
    {
        return $this->container['dnssec'];
    }

    /**
     * Sets dnssec
     *
     * @param bool|null $dnssec Whether or not this zone is DNSSEC signed (inferred from presigned being true XOR presence of at least one cryptokey with active being true)
     *
     * @return self
     */
    public function setDnssec($dnssec)
    {
        $this->container['dnssec'] = $dnssec;

        return $this;
    }

    /**
     * Gets nsec3param
     *
     * @return string|null
     */
    public function getNsec3param()
    {
        return $this->container['nsec3param'];
    }

    /**
     * Sets nsec3param
     *
     * @param string|null $nsec3param The NSEC3PARAM record
     *
     * @return self
     */
    public function setNsec3param($nsec3param)
    {
        $this->container['nsec3param'] = $nsec3param;

        return $this;
    }

    /**
     * Gets nsec3narrow
     *
     * @return bool|null
     */
    public function getNsec3narrow()
    {
        return $this->container['nsec3narrow'];
    }

    /**
     * Sets nsec3narrow
     *
     * @param bool|null $nsec3narrow Whether or not the zone uses NSEC3 narrow
     *
     * @return self
     */
    public function setNsec3narrow($nsec3narrow)
    {
        $this->container['nsec3narrow'] = $nsec3narrow;

        return $this;
    }

    /**
     * Gets presigned
     *
     * @return bool|null
     */
    public function getPresigned()
    {
        return $this->container['presigned'];
    }

    /**
     * Sets presigned
     *
     * @param bool|null $presigned Whether or not the zone is pre-signed
     *
     * @return self
     */
    public function setPresigned($presigned)
    {
        $this->container['presigned'] = $presigned;

        return $this;
    }

    /**
     * Gets soaEdit
     *
     * @return string|null
     */
    public function getSoaEdit()
    {
        return $this->container['soaEdit'];
    }

    /**
     * Sets soaEdit
     *
     * @param string|null $soaEdit The SOA-EDIT metadata item
     *
     * @return self
     */
    public function setSoaEdit($soaEdit)
    {
        $this->container['soaEdit'] = $soaEdit;

        return $this;
    }

    /**
     * Gets soaEditApi
     *
     * @return string|null
     */
    public function getSoaEditApi()
    {
        return $this->container['soaEditApi'];
    }

    /**
     * Sets soaEditApi
     *
     * @param string|null $soaEditApi The SOA-EDIT-API metadata item
     *
     * @return self
     */
    public function setSoaEditApi($soaEditApi)
    {
        $this->container['soaEditApi'] = $soaEditApi;

        return $this;
    }

    /**
     * Gets apiRectify
     *
     * @return bool|null
     */
    public function getApiRectify()
    {
        return $this->container['apiRectify'];
    }

    /**
     * Sets apiRectify
     *
     * @param bool|null $apiRectify Whether or not the zone will be rectified on data changes via the API
     *
     * @return self
     */
    public function setApiRectify($apiRectify)
    {
        $this->container['apiRectify'] = $apiRectify;

        return $this;
    }

    /**
     * Gets zone
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->container['zone'];
    }

    /**
     * Sets zone
     *
     * @param string|null $zone MAY contain a BIND-style zone file when creating a zone
     *
     * @return self
     */
    public function setZone($zone)
    {
        $this->container['zone'] = $zone;

        return $this;
    }

    /**
     * Gets account
     *
     * @return string|null
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param string|null $account MAY be set. Its value is defined by local policy
     *
     * @return self
     */
    public function setAccount($account)
    {
        $this->container['account'] = $account;

        return $this;
    }

    /**
     * Gets nameservers
     *
     * @return string[]|null
     */
    public function getNameservers()
    {
        return $this->container['nameservers'];
    }

    /**
     * Sets nameservers
     *
     * @param string[]|null $nameservers MAY be sent in client bodies during creation, and MUST NOT be sent by the server. Simple list of strings of nameserver names, including the trailing dot. Not required for slave zones.
     *
     * @return self
     */
    public function setNameservers($nameservers)
    {
        $this->container['nameservers'] = $nameservers;

        return $this;
    }

    /**
     * Gets masterTsigKeyIds
     *
     * @return string[]|null
     */
    public function getMasterTsigKeyIds()
    {
        return $this->container['masterTsigKeyIds'];
    }

    /**
     * Sets masterTsigKeyIds
     *
     * @param string[]|null $masterTsigKeyIds The id of the TSIG keys used for master operation in this zone
     *
     * @return self
     */
    public function setMasterTsigKeyIds($masterTsigKeyIds)
    {
        $this->container['masterTsigKeyIds'] = $masterTsigKeyIds;

        return $this;
    }

    /**
     * Gets slaveTsigKeyIds
     *
     * @return string[]|null
     */
    public function getSlaveTsigKeyIds()
    {
        return $this->container['slaveTsigKeyIds'];
    }

    /**
     * Sets slaveTsigKeyIds
     *
     * @param string[]|null $slaveTsigKeyIds The id of the TSIG keys used for slave operation in this zone
     *
     * @return self
     */
    public function setSlaveTsigKeyIds($slaveTsigKeyIds)
    {
        $this->container['slaveTsigKeyIds'] = $slaveTsigKeyIds;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


