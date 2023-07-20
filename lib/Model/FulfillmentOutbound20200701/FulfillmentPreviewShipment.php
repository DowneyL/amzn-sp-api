<?php
/**
 * FulfillmentPreviewShipment
 *
 * PHP version 5
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner APIs for Fulfillment Outbound
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * OpenAPI spec version: 2020-07-01
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.36
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\FulfillmentOutbound20200701;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;

/**
 * FulfillmentPreviewShipment Class Doc Comment
 *
 * @category Class
 * @description Delivery and item information for a shipment in a fulfillment order preview.
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FulfillmentPreviewShipment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FulfillmentPreviewShipment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'earliestShipDate' => '\SellingPartnerApi\Model\FulfillmentOutbound20200701\Timestamp',
'latestShipDate' => '\SellingPartnerApi\Model\FulfillmentOutbound20200701\Timestamp',
'earliestArrivalDate' => '\SellingPartnerApi\Model\FulfillmentOutbound20200701\Timestamp',
'latestArrivalDate' => '\SellingPartnerApi\Model\FulfillmentOutbound20200701\Timestamp',
'shippingNotes' => 'string[]',
'fulfillmentPreviewItems' => '\SellingPartnerApi\Model\FulfillmentOutbound20200701\FulfillmentPreviewItemList'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'earliestShipDate' => null,
'latestShipDate' => null,
'earliestArrivalDate' => null,
'latestArrivalDate' => null,
'shippingNotes' => null,
'fulfillmentPreviewItems' => null    ];

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
        'earliestShipDate' => 'earliestShipDate',
'latestShipDate' => 'latestShipDate',
'earliestArrivalDate' => 'earliestArrivalDate',
'latestArrivalDate' => 'latestArrivalDate',
'shippingNotes' => 'shippingNotes',
'fulfillmentPreviewItems' => 'fulfillmentPreviewItems'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'earliestShipDate' => 'setEarliestShipDate',
'latestShipDate' => 'setLatestShipDate',
'earliestArrivalDate' => 'setEarliestArrivalDate',
'latestArrivalDate' => 'setLatestArrivalDate',
'shippingNotes' => 'setShippingNotes',
'fulfillmentPreviewItems' => 'setFulfillmentPreviewItems'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'earliestShipDate' => 'getEarliestShipDate',
'latestShipDate' => 'getLatestShipDate',
'earliestArrivalDate' => 'getEarliestArrivalDate',
'latestArrivalDate' => 'getLatestArrivalDate',
'shippingNotes' => 'getShippingNotes',
'fulfillmentPreviewItems' => 'getFulfillmentPreviewItems'    ];

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
        $this->container['earliestShipDate'] = isset($data['earliestShipDate']) ? $data['earliestShipDate'] : null;
        $this->container['latestShipDate'] = isset($data['latestShipDate']) ? $data['latestShipDate'] : null;
        $this->container['earliestArrivalDate'] = isset($data['earliestArrivalDate']) ? $data['earliestArrivalDate'] : null;
        $this->container['latestArrivalDate'] = isset($data['latestArrivalDate']) ? $data['latestArrivalDate'] : null;
        $this->container['shippingNotes'] = isset($data['shippingNotes']) ? $data['shippingNotes'] : null;
        $this->container['fulfillmentPreviewItems'] = isset($data['fulfillmentPreviewItems']) ? $data['fulfillmentPreviewItems'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['fulfillmentPreviewItems'] === null) {
            $invalidProperties[] = "'fulfillmentPreviewItems' can't be null";
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
     * Gets earliestShipDate
     *
     * @return \SellingPartnerApi\Model\FulfillmentOutbound20200701\Timestamp
     */
    public function getEarliestShipDate()
    {
        return $this->container['earliestShipDate'];
    }

    /**
     * Sets earliestShipDate
     *
     * @param \SellingPartnerApi\Model\FulfillmentOutbound20200701\Timestamp $earliestShipDate earliestShipDate
     *
     * @return $this
     */
    public function setEarliestShipDate($earliestShipDate)
    {
        $this->container['earliestShipDate'] = $earliestShipDate;

        return $this;
    }

    /**
     * Gets latestShipDate
     *
     * @return \SellingPartnerApi\Model\FulfillmentOutbound20200701\Timestamp
     */
    public function getLatestShipDate()
    {
        return $this->container['latestShipDate'];
    }

    /**
     * Sets latestShipDate
     *
     * @param \SellingPartnerApi\Model\FulfillmentOutbound20200701\Timestamp $latestShipDate latestShipDate
     *
     * @return $this
     */
    public function setLatestShipDate($latestShipDate)
    {
        $this->container['latestShipDate'] = $latestShipDate;

        return $this;
    }

    /**
     * Gets earliestArrivalDate
     *
     * @return \SellingPartnerApi\Model\FulfillmentOutbound20200701\Timestamp
     */
    public function getEarliestArrivalDate()
    {
        return $this->container['earliestArrivalDate'];
    }

    /**
     * Sets earliestArrivalDate
     *
     * @param \SellingPartnerApi\Model\FulfillmentOutbound20200701\Timestamp $earliestArrivalDate earliestArrivalDate
     *
     * @return $this
     */
    public function setEarliestArrivalDate($earliestArrivalDate)
    {
        $this->container['earliestArrivalDate'] = $earliestArrivalDate;

        return $this;
    }

    /**
     * Gets latestArrivalDate
     *
     * @return \SellingPartnerApi\Model\FulfillmentOutbound20200701\Timestamp
     */
    public function getLatestArrivalDate()
    {
        return $this->container['latestArrivalDate'];
    }

    /**
     * Sets latestArrivalDate
     *
     * @param \SellingPartnerApi\Model\FulfillmentOutbound20200701\Timestamp $latestArrivalDate latestArrivalDate
     *
     * @return $this
     */
    public function setLatestArrivalDate($latestArrivalDate)
    {
        $this->container['latestArrivalDate'] = $latestArrivalDate;

        return $this;
    }

    /**
     * Gets shippingNotes
     *
     * @return string[]
     */
    public function getShippingNotes()
    {
        return $this->container['shippingNotes'];
    }

    /**
     * Sets shippingNotes
     *
     * @param string[] $shippingNotes Provides additional insight into the shipment timeline when exact delivery dates are not able to be precomputed.
     *
     * @return $this
     */
    public function setShippingNotes($shippingNotes)
    {
        $this->container['shippingNotes'] = $shippingNotes;

        return $this;
    }

    /**
     * Gets fulfillmentPreviewItems
     *
     * @return \SellingPartnerApi\Model\FulfillmentOutbound20200701\FulfillmentPreviewItemList
     */
    public function getFulfillmentPreviewItems()
    {
        return $this->container['fulfillmentPreviewItems'];
    }

    /**
     * Sets fulfillmentPreviewItems
     *
     * @param \SellingPartnerApi\Model\FulfillmentOutbound20200701\FulfillmentPreviewItemList $fulfillmentPreviewItems fulfillmentPreviewItems
     *
     * @return $this
     */
    public function setFulfillmentPreviewItems($fulfillmentPreviewItems)
    {
        $this->container['fulfillmentPreviewItems'] = $fulfillmentPreviewItems;

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
