<?php
/**
 * PutTransportDetailsRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Fulfillment Inbound
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
 *
 * OpenAPI spec version: v0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.36
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\FulfillmentInboundV0;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;

/**
 * PutTransportDetailsRequest Class Doc Comment
 *
 * @category Class
 * @description The request schema for a putTransportDetails operation.
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PutTransportDetailsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PutTransportDetailsRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'isPartnered' => 'bool',
'shipmentType' => '\SellingPartnerApi\Model\FulfillmentInboundV0\ShipmentType',
'transportDetails' => '\SellingPartnerApi\Model\FulfillmentInboundV0\TransportDetailInput'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'isPartnered' => null,
'shipmentType' => null,
'transportDetails' => null    ];

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
        'isPartnered' => 'IsPartnered',
'shipmentType' => 'ShipmentType',
'transportDetails' => 'TransportDetails'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'isPartnered' => 'setIsPartnered',
'shipmentType' => 'setShipmentType',
'transportDetails' => 'setTransportDetails'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'isPartnered' => 'getIsPartnered',
'shipmentType' => 'getShipmentType',
'transportDetails' => 'getTransportDetails'    ];

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
        $this->container['isPartnered'] = isset($data['isPartnered']) ? $data['isPartnered'] : null;
        $this->container['shipmentType'] = isset($data['shipmentType']) ? $data['shipmentType'] : null;
        $this->container['transportDetails'] = isset($data['transportDetails']) ? $data['transportDetails'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['isPartnered'] === null) {
            $invalidProperties[] = "'isPartnered' can't be null";
        }
        if ($this->container['shipmentType'] === null) {
            $invalidProperties[] = "'shipmentType' can't be null";
        }
        if ($this->container['transportDetails'] === null) {
            $invalidProperties[] = "'transportDetails' can't be null";
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
     * Gets isPartnered
     *
     * @return bool
     */
    public function getIsPartnered()
    {
        return $this->container['isPartnered'];
    }

    /**
     * Sets isPartnered
     *
     * @param bool $isPartnered Indicates whether a putTransportDetails request is for an Amazon-partnered carrier.
     *
     * @return $this
     */
    public function setIsPartnered($isPartnered)
    {
        $this->container['isPartnered'] = $isPartnered;

        return $this;
    }

    /**
     * Gets shipmentType
     *
     * @return \SellingPartnerApi\Model\FulfillmentInboundV0\ShipmentType
     */
    public function getShipmentType()
    {
        return $this->container['shipmentType'];
    }

    /**
     * Sets shipmentType
     *
     * @param \SellingPartnerApi\Model\FulfillmentInboundV0\ShipmentType $shipmentType shipmentType
     *
     * @return $this
     */
    public function setShipmentType($shipmentType)
    {
        $this->container['shipmentType'] = $shipmentType;

        return $this;
    }

    /**
     * Gets transportDetails
     *
     * @return \SellingPartnerApi\Model\FulfillmentInboundV0\TransportDetailInput
     */
    public function getTransportDetails()
    {
        return $this->container['transportDetails'];
    }

    /**
     * Sets transportDetails
     *
     * @param \SellingPartnerApi\Model\FulfillmentInboundV0\TransportDetailInput $transportDetails transportDetails
     *
     * @return $this
     */
    public function setTransportDetails($transportDetails)
    {
        $this->container['transportDetails'] = $transportDetails;

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
