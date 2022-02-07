<?php
/**
 * Cryptokey
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
 * Cryptokey Class Doc Comment
 *
 * @category Class
 * @description Describes a DNSSEC cryptographic key
 * @package  Storm\PowerDnsClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Cryptokey implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Cryptokey';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'id' => 'int',
        'keytype' => 'string',
        'active' => 'bool',
        'published' => 'bool',
        'dnskey' => 'string',
        'ds' => 'string[]',
        'cds' => 'string[]',
        'privatekey' => 'string',
        'algorithm' => 'string',
        'bits' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'type' => null,
        'id' => null,
        'keytype' => null,
        'active' => null,
        'published' => null,
        'dnskey' => null,
        'ds' => null,
        'cds' => null,
        'privatekey' => null,
        'algorithm' => null,
        'bits' => null
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
        'type' => 'type',
        'id' => 'id',
        'keytype' => 'keytype',
        'active' => 'active',
        'published' => 'published',
        'dnskey' => 'dnskey',
        'ds' => 'ds',
        'cds' => 'cds',
        'privatekey' => 'privatekey',
        'algorithm' => 'algorithm',
        'bits' => 'bits'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'id' => 'setId',
        'keytype' => 'setKeytype',
        'active' => 'setActive',
        'published' => 'setPublished',
        'dnskey' => 'setDnskey',
        'ds' => 'setDs',
        'cds' => 'setCds',
        'privatekey' => 'setPrivatekey',
        'algorithm' => 'setAlgorithm',
        'bits' => 'setBits'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'id' => 'getId',
        'keytype' => 'getKeytype',
        'active' => 'getActive',
        'published' => 'getPublished',
        'dnskey' => 'getDnskey',
        'ds' => 'getDs',
        'cds' => 'getCds',
        'privatekey' => 'getPrivatekey',
        'algorithm' => 'getAlgorithm',
        'bits' => 'getBits'
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

    const KEYTYPE_KSK = 'ksk';
    const KEYTYPE_ZSK = 'zsk';
    const KEYTYPE_CSK = 'csk';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getKeytypeAllowableValues()
    {
        return [
            self::KEYTYPE_KSK,
            self::KEYTYPE_ZSK,
            self::KEYTYPE_CSK,
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
        $this->container['type'] = $data['type'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['keytype'] = $data['keytype'] ?? null;
        $this->container['active'] = $data['active'] ?? null;
        $this->container['published'] = $data['published'] ?? null;
        $this->container['dnskey'] = $data['dnskey'] ?? null;
        $this->container['ds'] = $data['ds'] ?? null;
        $this->container['cds'] = $data['cds'] ?? null;
        $this->container['privatekey'] = $data['privatekey'] ?? null;
        $this->container['algorithm'] = $data['algorithm'] ?? null;
        $this->container['bits'] = $data['bits'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getKeytypeAllowableValues();
        if (!is_null($this->container['keytype']) && !in_array($this->container['keytype'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'keytype', must be one of '%s'",
                $this->container['keytype'],
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
     * @param string|null $type set to \"Cryptokey\"
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id The internal identifier, read only
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets keytype
     *
     * @return string|null
     */
    public function getKeytype()
    {
        return $this->container['keytype'];
    }

    /**
     * Sets keytype
     *
     * @param string|null $keytype keytype
     *
     * @return self
     */
    public function setKeytype($keytype)
    {
        $allowedValues = $this->getKeytypeAllowableValues();
        if (!is_null($keytype) && !in_array($keytype, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'keytype', must be one of '%s'",
                    $keytype,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['keytype'] = $keytype;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active Whether or not the key is in active use
     *
     * @return self
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets published
     *
     * @return bool|null
     */
    public function getPublished()
    {
        return $this->container['published'];
    }

    /**
     * Sets published
     *
     * @param bool|null $published Whether or not the DNSKEY record is published in the zone
     *
     * @return self
     */
    public function setPublished($published)
    {
        $this->container['published'] = $published;

        return $this;
    }

    /**
     * Gets dnskey
     *
     * @return string|null
     */
    public function getDnskey()
    {
        return $this->container['dnskey'];
    }

    /**
     * Sets dnskey
     *
     * @param string|null $dnskey The DNSKEY record for this key
     *
     * @return self
     */
    public function setDnskey($dnskey)
    {
        $this->container['dnskey'] = $dnskey;

        return $this;
    }

    /**
     * Gets ds
     *
     * @return string[]|null
     */
    public function getDs()
    {
        return $this->container['ds'];
    }

    /**
     * Sets ds
     *
     * @param string[]|null $ds An array of DS records for this key
     *
     * @return self
     */
    public function setDs($ds)
    {
        $this->container['ds'] = $ds;

        return $this;
    }

    /**
     * Gets cds
     *
     * @return string[]|null
     */
    public function getCds()
    {
        return $this->container['cds'];
    }

    /**
     * Sets cds
     *
     * @param string[]|null $cds An array of DS records for this key, filtered by CDS publication settings
     *
     * @return self
     */
    public function setCds($cds)
    {
        $this->container['cds'] = $cds;

        return $this;
    }

    /**
     * Gets privatekey
     *
     * @return string|null
     */
    public function getPrivatekey()
    {
        return $this->container['privatekey'];
    }

    /**
     * Sets privatekey
     *
     * @param string|null $privatekey The private key in ISC format
     *
     * @return self
     */
    public function setPrivatekey($privatekey)
    {
        $this->container['privatekey'] = $privatekey;

        return $this;
    }

    /**
     * Gets algorithm
     *
     * @return string|null
     */
    public function getAlgorithm()
    {
        return $this->container['algorithm'];
    }

    /**
     * Sets algorithm
     *
     * @param string|null $algorithm The name of the algorithm of the key, should be a mnemonic
     *
     * @return self
     */
    public function setAlgorithm($algorithm)
    {
        $this->container['algorithm'] = $algorithm;

        return $this;
    }

    /**
     * Gets bits
     *
     * @return int|null
     */
    public function getBits()
    {
        return $this->container['bits'];
    }

    /**
     * Sets bits
     *
     * @param int|null $bits The size of the key
     *
     * @return self
     */
    public function setBits($bits)
    {
        $this->container['bits'] = $bits;

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


