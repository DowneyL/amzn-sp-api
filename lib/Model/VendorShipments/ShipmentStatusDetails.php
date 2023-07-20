<?php
/**
 * ShipmentStatusDetails
 *
 * PHP version 5
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Retail Procurement Shipments
 *
 * The Selling Partner API for Retail Procurement Shipments provides programmatic access to retail shipping data for vendors.
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

namespace SellingPartnerApi\Model\VendorShipments;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;

/**
 * ShipmentStatusDetails Class Doc Comment
 *
 * @category Class
 * @description Shipment Status details.
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShipmentStatusDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShipmentStatusDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shipmentStatus' => 'string',
'shipmentStatusDate' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'shipmentStatus' => null,
'shipmentStatusDate' => 'date-time'    ];

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
        'shipmentStatus' => 'shipmentStatus',
'shipmentStatusDate' => 'shipmentStatusDate'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipmentStatus' => 'setShipmentStatus',
'shipmentStatusDate' => 'setShipmentStatusDate'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipmentStatus' => 'getShipmentStatus',
'shipmentStatusDate' => 'getShipmentStatusDate'    ];

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

    const SHIPMENT_STATUS_CREATED = 'Created';
const SHIPMENT_STATUS_TRANSPORTATION_REQUESTED = 'TransportationRequested';
const SHIPMENT_STATUS_CARRIER_ASSIGNED = 'CarrierAssigned';
const SHIPMENT_STATUS_SHIPPED = 'Shipped';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getShipmentStatusAllowableValues()
    {
        return [
            self::SHIPMENT_STATUS_CREATED,
self::SHIPMENT_STATUS_TRANSPORTATION_REQUESTED,
self::SHIPMENT_STATUS_CARRIER_ASSIGNED,
self::SHIPMENT_STATUS_SHIPPED,        ];
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
        $this->container['shipmentStatus'] = isset($data['shipmentStatus']) ? $data['shipmentStatus'] : null;
        $this->container['shipmentStatusDate'] = isset($data['shipmentStatusDate']) ? $data['shipmentStatusDate'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getShipmentStatusAllowableValues();
        if (!is_null($this->container['shipmentStatus']) && !in_array($this->container['shipmentStatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'shipmentStatus', must be one of '%s'",
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
     * Gets shipmentStatus
     *
     * @return string
     */
    public function getShipmentStatus()
    {
        return $this->container['shipmentStatus'];
    }

    /**
     * Sets shipmentStatus
     *
     * @param string $shipmentStatus Current status of the shipment on whether it is picked up or scheduled.
     *
     * @return $this
     */
    public function setShipmentStatus($shipmentStatus)
    {
        $allowedValues = $this->getShipmentStatusAllowableValues();
        if (!is_null($shipmentStatus) && !in_array($shipmentStatus, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'shipmentStatus', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['shipmentStatus'] = $shipmentStatus;

        return $this;
    }

    /**
     * Gets shipmentStatusDate
     *
     * @return \DateTime
     */
    public function getShipmentStatusDate()
    {
        return $this->container['shipmentStatusDate'];
    }

    /**
     * Sets shipmentStatusDate
     *
     * @param \DateTime $shipmentStatusDate Date and time on last status update received for the shipment
     *
     * @return $this
     */
    public function setShipmentStatusDate($shipmentStatusDate)
    {
        $this->container['shipmentStatusDate'] = $shipmentStatusDate;

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
