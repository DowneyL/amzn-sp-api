<?php
/**
 * FixedSlotCapacity
 *
 * PHP version 5
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Services
 *
 * With the Services API, you can build applications that help service providers get and modify their service orders and manage their resources.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.36
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\Services;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;

/**
 * FixedSlotCapacity Class Doc Comment
 *
 * @category Class
 * @description Response schema for the &#x60;getFixedSlotCapacity&#x60; operation.
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FixedSlotCapacity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FixedSlotCapacity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'resourceId' => 'string',
'slotDuration' => 'float',
'capacities' => '\SellingPartnerApi\Model\Services\FixedSlot[]',
'nextPageToken' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'resourceId' => null,
'slotDuration' => 'int32',
'capacities' => null,
'nextPageToken' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'resourceId' => 'resourceId',
'slotDuration' => 'slotDuration',
'capacities' => 'capacities',
'nextPageToken' => 'nextPageToken'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'resourceId' => 'setResourceId',
'slotDuration' => 'setSlotDuration',
'capacities' => 'setCapacities',
'nextPageToken' => 'setNextPageToken'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'resourceId' => 'getResourceId',
'slotDuration' => 'getSlotDuration',
'capacities' => 'getCapacities',
'nextPageToken' => 'getNextPageToken'    ];

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
        return self::$swaggerModelName;
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
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['slotDuration'] = isset($data['slotDuration']) ? $data['slotDuration'] : null;
        $this->container['capacities'] = isset($data['capacities']) ? $data['capacities'] : null;
        $this->container['nextPageToken'] = isset($data['nextPageToken']) ? $data['nextPageToken'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets resourceId
     *
     * @return string
     */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
     * Sets resourceId
     *
     * @param string $resourceId Resource Identifier.
     *
     * @return $this
     */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;

        return $this;
    }

    /**
     * Gets slotDuration
     *
     * @return float
     */
    public function getSlotDuration()
    {
        return $this->container['slotDuration'];
    }

    /**
     * Sets slotDuration
     *
     * @param float $slotDuration The duration of each slot which is returned. This value will be a multiple of 5 and fall in the following range: 5 <= `slotDuration` <= 360.
     *
     * @return $this
     */
    public function setSlotDuration($slotDuration)
    {
        $this->container['slotDuration'] = $slotDuration;

        return $this;
    }

    /**
     * Gets capacities
     *
     * @return \SellingPartnerApi\Model\Services\FixedSlot[]
     */
    public function getCapacities()
    {
        return $this->container['capacities'];
    }

    /**
     * Sets capacities
     *
     * @param \SellingPartnerApi\Model\Services\FixedSlot[] $capacities Array of capacity slots in fixed slot format.
     *
     * @return $this
     */
    public function setCapacities($capacities)
    {
        $this->container['capacities'] = $capacities;

        return $this;
    }

    /**
     * Gets nextPageToken
     *
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->container['nextPageToken'];
    }

    /**
     * Sets nextPageToken
     *
     * @param string $nextPageToken Next page token, if there are more pages.
     *
     * @return $this
     */
    public function setNextPageToken($nextPageToken)
    {
        $this->container['nextPageToken'] = $nextPageToken;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange] 
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange] 
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange] 
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
    #[\ReturnTypeWillChange] 
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
