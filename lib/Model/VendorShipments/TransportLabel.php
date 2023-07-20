<?php
/**
 * TransportLabel
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
 * TransportLabel Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TransportLabel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'transportLabel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'labelCreateDateTime' => 'string',
'shipmentInformation' => '\SellingPartnerApi\Model\VendorShipments\ShipmentInformation',
'labelData' => '\SellingPartnerApi\Model\VendorShipments\LabelData[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'labelCreateDateTime' => null,
'shipmentInformation' => null,
'labelData' => null    ];

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
        'labelCreateDateTime' => 'labelCreateDateTime',
'shipmentInformation' => 'shipmentInformation',
'labelData' => 'labelData'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'labelCreateDateTime' => 'setLabelCreateDateTime',
'shipmentInformation' => 'setShipmentInformation',
'labelData' => 'setLabelData'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'labelCreateDateTime' => 'getLabelCreateDateTime',
'shipmentInformation' => 'getShipmentInformation',
'labelData' => 'getLabelData'    ];

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
        $this->container['labelCreateDateTime'] = isset($data['labelCreateDateTime']) ? $data['labelCreateDateTime'] : null;
        $this->container['shipmentInformation'] = isset($data['shipmentInformation']) ? $data['shipmentInformation'] : null;
        $this->container['labelData'] = isset($data['labelData']) ? $data['labelData'] : null;
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
     * Gets labelCreateDateTime
     *
     * @return string
     */
    public function getLabelCreateDateTime()
    {
        return $this->container['labelCreateDateTime'];
    }

    /**
     * Sets labelCreateDateTime
     *
     * @param string $labelCreateDateTime Date on which label is created.
     *
     * @return $this
     */
    public function setLabelCreateDateTime($labelCreateDateTime)
    {
        $this->container['labelCreateDateTime'] = $labelCreateDateTime;

        return $this;
    }

    /**
     * Gets shipmentInformation
     *
     * @return \SellingPartnerApi\Model\VendorShipments\ShipmentInformation
     */
    public function getShipmentInformation()
    {
        return $this->container['shipmentInformation'];
    }

    /**
     * Sets shipmentInformation
     *
     * @param \SellingPartnerApi\Model\VendorShipments\ShipmentInformation $shipmentInformation shipmentInformation
     *
     * @return $this
     */
    public function setShipmentInformation($shipmentInformation)
    {
        $this->container['shipmentInformation'] = $shipmentInformation;

        return $this;
    }

    /**
     * Gets labelData
     *
     * @return \SellingPartnerApi\Model\VendorShipments\LabelData[]
     */
    public function getLabelData()
    {
        return $this->container['labelData'];
    }

    /**
     * Sets labelData
     *
     * @param \SellingPartnerApi\Model\VendorShipments\LabelData[] $labelData Indicates the label data,format and type associated .
     *
     * @return $this
     */
    public function setLabelData($labelData)
    {
        $this->container['labelData'] = $labelData;

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
