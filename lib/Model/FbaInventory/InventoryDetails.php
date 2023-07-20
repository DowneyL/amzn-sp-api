<?php
/**
 * InventoryDetails
 *
 * PHP version 5
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for FBA Inventory
 *
 * The Selling Partner API for FBA Inventory lets you programmatically retrieve information about inventory in Amazon's fulfillment network.
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

namespace SellingPartnerApi\Model\FbaInventory;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;

/**
 * InventoryDetails Class Doc Comment
 *
 * @category Class
 * @description Summarized inventory details. This object will not appear if the details parameter in the request is false.
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InventoryDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InventoryDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'fulfillableQuantity' => 'int',
'inboundWorkingQuantity' => 'int',
'inboundShippedQuantity' => 'int',
'inboundReceivingQuantity' => 'int',
'reservedQuantity' => '\SellingPartnerApi\Model\FbaInventory\ReservedQuantity',
'researchingQuantity' => '\SellingPartnerApi\Model\FbaInventory\ResearchingQuantity',
'unfulfillableQuantity' => '\SellingPartnerApi\Model\FbaInventory\UnfulfillableQuantity'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'fulfillableQuantity' => null,
'inboundWorkingQuantity' => null,
'inboundShippedQuantity' => null,
'inboundReceivingQuantity' => null,
'reservedQuantity' => null,
'researchingQuantity' => null,
'unfulfillableQuantity' => null    ];

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
        'fulfillableQuantity' => 'fulfillableQuantity',
'inboundWorkingQuantity' => 'inboundWorkingQuantity',
'inboundShippedQuantity' => 'inboundShippedQuantity',
'inboundReceivingQuantity' => 'inboundReceivingQuantity',
'reservedQuantity' => 'reservedQuantity',
'researchingQuantity' => 'researchingQuantity',
'unfulfillableQuantity' => 'unfulfillableQuantity'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fulfillableQuantity' => 'setFulfillableQuantity',
'inboundWorkingQuantity' => 'setInboundWorkingQuantity',
'inboundShippedQuantity' => 'setInboundShippedQuantity',
'inboundReceivingQuantity' => 'setInboundReceivingQuantity',
'reservedQuantity' => 'setReservedQuantity',
'researchingQuantity' => 'setResearchingQuantity',
'unfulfillableQuantity' => 'setUnfulfillableQuantity'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fulfillableQuantity' => 'getFulfillableQuantity',
'inboundWorkingQuantity' => 'getInboundWorkingQuantity',
'inboundShippedQuantity' => 'getInboundShippedQuantity',
'inboundReceivingQuantity' => 'getInboundReceivingQuantity',
'reservedQuantity' => 'getReservedQuantity',
'researchingQuantity' => 'getResearchingQuantity',
'unfulfillableQuantity' => 'getUnfulfillableQuantity'    ];

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
        $this->container['fulfillableQuantity'] = isset($data['fulfillableQuantity']) ? $data['fulfillableQuantity'] : null;
        $this->container['inboundWorkingQuantity'] = isset($data['inboundWorkingQuantity']) ? $data['inboundWorkingQuantity'] : null;
        $this->container['inboundShippedQuantity'] = isset($data['inboundShippedQuantity']) ? $data['inboundShippedQuantity'] : null;
        $this->container['inboundReceivingQuantity'] = isset($data['inboundReceivingQuantity']) ? $data['inboundReceivingQuantity'] : null;
        $this->container['reservedQuantity'] = isset($data['reservedQuantity']) ? $data['reservedQuantity'] : null;
        $this->container['researchingQuantity'] = isset($data['researchingQuantity']) ? $data['researchingQuantity'] : null;
        $this->container['unfulfillableQuantity'] = isset($data['unfulfillableQuantity']) ? $data['unfulfillableQuantity'] : null;
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
     * Gets fulfillableQuantity
     *
     * @return int
     */
    public function getFulfillableQuantity()
    {
        return $this->container['fulfillableQuantity'];
    }

    /**
     * Sets fulfillableQuantity
     *
     * @param int $fulfillableQuantity The item quantity that can be picked, packed, and shipped.
     *
     * @return $this
     */
    public function setFulfillableQuantity($fulfillableQuantity)
    {
        $this->container['fulfillableQuantity'] = $fulfillableQuantity;

        return $this;
    }

    /**
     * Gets inboundWorkingQuantity
     *
     * @return int
     */
    public function getInboundWorkingQuantity()
    {
        return $this->container['inboundWorkingQuantity'];
    }

    /**
     * Sets inboundWorkingQuantity
     *
     * @param int $inboundWorkingQuantity The number of units in an inbound shipment for which you have notified Amazon.
     *
     * @return $this
     */
    public function setInboundWorkingQuantity($inboundWorkingQuantity)
    {
        $this->container['inboundWorkingQuantity'] = $inboundWorkingQuantity;

        return $this;
    }

    /**
     * Gets inboundShippedQuantity
     *
     * @return int
     */
    public function getInboundShippedQuantity()
    {
        return $this->container['inboundShippedQuantity'];
    }

    /**
     * Sets inboundShippedQuantity
     *
     * @param int $inboundShippedQuantity The number of units in an inbound shipment that you have notified Amazon about and have provided a tracking number.
     *
     * @return $this
     */
    public function setInboundShippedQuantity($inboundShippedQuantity)
    {
        $this->container['inboundShippedQuantity'] = $inboundShippedQuantity;

        return $this;
    }

    /**
     * Gets inboundReceivingQuantity
     *
     * @return int
     */
    public function getInboundReceivingQuantity()
    {
        return $this->container['inboundReceivingQuantity'];
    }

    /**
     * Sets inboundReceivingQuantity
     *
     * @param int $inboundReceivingQuantity The number of units that have not yet been received at an Amazon fulfillment center for processing, but are part of an inbound shipment with some units that have already been received and processed.
     *
     * @return $this
     */
    public function setInboundReceivingQuantity($inboundReceivingQuantity)
    {
        $this->container['inboundReceivingQuantity'] = $inboundReceivingQuantity;

        return $this;
    }

    /**
     * Gets reservedQuantity
     *
     * @return \SellingPartnerApi\Model\FbaInventory\ReservedQuantity
     */
    public function getReservedQuantity()
    {
        return $this->container['reservedQuantity'];
    }

    /**
     * Sets reservedQuantity
     *
     * @param \SellingPartnerApi\Model\FbaInventory\ReservedQuantity $reservedQuantity reservedQuantity
     *
     * @return $this
     */
    public function setReservedQuantity($reservedQuantity)
    {
        $this->container['reservedQuantity'] = $reservedQuantity;

        return $this;
    }

    /**
     * Gets researchingQuantity
     *
     * @return \SellingPartnerApi\Model\FbaInventory\ResearchingQuantity
     */
    public function getResearchingQuantity()
    {
        return $this->container['researchingQuantity'];
    }

    /**
     * Sets researchingQuantity
     *
     * @param \SellingPartnerApi\Model\FbaInventory\ResearchingQuantity $researchingQuantity researchingQuantity
     *
     * @return $this
     */
    public function setResearchingQuantity($researchingQuantity)
    {
        $this->container['researchingQuantity'] = $researchingQuantity;

        return $this;
    }

    /**
     * Gets unfulfillableQuantity
     *
     * @return \SellingPartnerApi\Model\FbaInventory\UnfulfillableQuantity
     */
    public function getUnfulfillableQuantity()
    {
        return $this->container['unfulfillableQuantity'];
    }

    /**
     * Sets unfulfillableQuantity
     *
     * @param \SellingPartnerApi\Model\FbaInventory\UnfulfillableQuantity $unfulfillableQuantity unfulfillableQuantity
     *
     * @return $this
     */
    public function setUnfulfillableQuantity($unfulfillableQuantity)
    {
        $this->container['unfulfillableQuantity'] = $unfulfillableQuantity;

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
