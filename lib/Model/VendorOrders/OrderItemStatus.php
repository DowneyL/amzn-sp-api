<?php
/**
 * OrderItemStatus
 *
 * PHP version 5
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Retail Procurement Orders
 *
 * The Selling Partner API for Retail Procurement Orders provides programmatic access to vendor orders data.
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

namespace SellingPartnerApi\Model\VendorOrders;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;

/**
 * OrderItemStatus Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderItemStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderItemStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'itemSequenceNumber' => 'string',
'buyerProductIdentifier' => 'string',
'vendorProductIdentifier' => 'string',
'netCost' => '\SellingPartnerApi\Model\VendorOrders\Money',
'listPrice' => '\SellingPartnerApi\Model\VendorOrders\Money',
'orderedQuantity' => '\SellingPartnerApi\Model\VendorOrders\OrderItemStatusOrderedQuantity',
'acknowledgementStatus' => '\SellingPartnerApi\Model\VendorOrders\OrderItemStatusAcknowledgementStatus',
'receivingStatus' => '\SellingPartnerApi\Model\VendorOrders\OrderItemStatusReceivingStatus'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'itemSequenceNumber' => null,
'buyerProductIdentifier' => null,
'vendorProductIdentifier' => null,
'netCost' => null,
'listPrice' => null,
'orderedQuantity' => null,
'acknowledgementStatus' => null,
'receivingStatus' => null    ];

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
        'itemSequenceNumber' => 'itemSequenceNumber',
'buyerProductIdentifier' => 'buyerProductIdentifier',
'vendorProductIdentifier' => 'vendorProductIdentifier',
'netCost' => 'netCost',
'listPrice' => 'listPrice',
'orderedQuantity' => 'orderedQuantity',
'acknowledgementStatus' => 'acknowledgementStatus',
'receivingStatus' => 'receivingStatus'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'itemSequenceNumber' => 'setItemSequenceNumber',
'buyerProductIdentifier' => 'setBuyerProductIdentifier',
'vendorProductIdentifier' => 'setVendorProductIdentifier',
'netCost' => 'setNetCost',
'listPrice' => 'setListPrice',
'orderedQuantity' => 'setOrderedQuantity',
'acknowledgementStatus' => 'setAcknowledgementStatus',
'receivingStatus' => 'setReceivingStatus'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'itemSequenceNumber' => 'getItemSequenceNumber',
'buyerProductIdentifier' => 'getBuyerProductIdentifier',
'vendorProductIdentifier' => 'getVendorProductIdentifier',
'netCost' => 'getNetCost',
'listPrice' => 'getListPrice',
'orderedQuantity' => 'getOrderedQuantity',
'acknowledgementStatus' => 'getAcknowledgementStatus',
'receivingStatus' => 'getReceivingStatus'    ];

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
        $this->container['itemSequenceNumber'] = isset($data['itemSequenceNumber']) ? $data['itemSequenceNumber'] : null;
        $this->container['buyerProductIdentifier'] = isset($data['buyerProductIdentifier']) ? $data['buyerProductIdentifier'] : null;
        $this->container['vendorProductIdentifier'] = isset($data['vendorProductIdentifier']) ? $data['vendorProductIdentifier'] : null;
        $this->container['netCost'] = isset($data['netCost']) ? $data['netCost'] : null;
        $this->container['listPrice'] = isset($data['listPrice']) ? $data['listPrice'] : null;
        $this->container['orderedQuantity'] = isset($data['orderedQuantity']) ? $data['orderedQuantity'] : null;
        $this->container['acknowledgementStatus'] = isset($data['acknowledgementStatus']) ? $data['acknowledgementStatus'] : null;
        $this->container['receivingStatus'] = isset($data['receivingStatus']) ? $data['receivingStatus'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['itemSequenceNumber'] === null) {
            $invalidProperties[] = "'itemSequenceNumber' can't be null";
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
     * Gets itemSequenceNumber
     *
     * @return string
     */
    public function getItemSequenceNumber()
    {
        return $this->container['itemSequenceNumber'];
    }

    /**
     * Sets itemSequenceNumber
     *
     * @param string $itemSequenceNumber Numbering of the item on the purchase order. The first item will be 1, the second 2, and so on.
     *
     * @return $this
     */
    public function setItemSequenceNumber($itemSequenceNumber)
    {
        $this->container['itemSequenceNumber'] = $itemSequenceNumber;

        return $this;
    }

    /**
     * Gets buyerProductIdentifier
     *
     * @return string
     */
    public function getBuyerProductIdentifier()
    {
        return $this->container['buyerProductIdentifier'];
    }

    /**
     * Sets buyerProductIdentifier
     *
     * @param string $buyerProductIdentifier Buyer's Standard Identification Number (ASIN) of an item.
     *
     * @return $this
     */
    public function setBuyerProductIdentifier($buyerProductIdentifier)
    {
        $this->container['buyerProductIdentifier'] = $buyerProductIdentifier;

        return $this;
    }

    /**
     * Gets vendorProductIdentifier
     *
     * @return string
     */
    public function getVendorProductIdentifier()
    {
        return $this->container['vendorProductIdentifier'];
    }

    /**
     * Sets vendorProductIdentifier
     *
     * @param string $vendorProductIdentifier The vendor selected product identification of the item.
     *
     * @return $this
     */
    public function setVendorProductIdentifier($vendorProductIdentifier)
    {
        $this->container['vendorProductIdentifier'] = $vendorProductIdentifier;

        return $this;
    }

    /**
     * Gets netCost
     *
     * @return \SellingPartnerApi\Model\VendorOrders\Money
     */
    public function getNetCost()
    {
        return $this->container['netCost'];
    }

    /**
     * Sets netCost
     *
     * @param \SellingPartnerApi\Model\VendorOrders\Money $netCost netCost
     *
     * @return $this
     */
    public function setNetCost($netCost)
    {
        $this->container['netCost'] = $netCost;

        return $this;
    }

    /**
     * Gets listPrice
     *
     * @return \SellingPartnerApi\Model\VendorOrders\Money
     */
    public function getListPrice()
    {
        return $this->container['listPrice'];
    }

    /**
     * Sets listPrice
     *
     * @param \SellingPartnerApi\Model\VendorOrders\Money $listPrice listPrice
     *
     * @return $this
     */
    public function setListPrice($listPrice)
    {
        $this->container['listPrice'] = $listPrice;

        return $this;
    }

    /**
     * Gets orderedQuantity
     *
     * @return \SellingPartnerApi\Model\VendorOrders\OrderItemStatusOrderedQuantity
     */
    public function getOrderedQuantity()
    {
        return $this->container['orderedQuantity'];
    }

    /**
     * Sets orderedQuantity
     *
     * @param \SellingPartnerApi\Model\VendorOrders\OrderItemStatusOrderedQuantity $orderedQuantity orderedQuantity
     *
     * @return $this
     */
    public function setOrderedQuantity($orderedQuantity)
    {
        $this->container['orderedQuantity'] = $orderedQuantity;

        return $this;
    }

    /**
     * Gets acknowledgementStatus
     *
     * @return \SellingPartnerApi\Model\VendorOrders\OrderItemStatusAcknowledgementStatus
     */
    public function getAcknowledgementStatus()
    {
        return $this->container['acknowledgementStatus'];
    }

    /**
     * Sets acknowledgementStatus
     *
     * @param \SellingPartnerApi\Model\VendorOrders\OrderItemStatusAcknowledgementStatus $acknowledgementStatus acknowledgementStatus
     *
     * @return $this
     */
    public function setAcknowledgementStatus($acknowledgementStatus)
    {
        $this->container['acknowledgementStatus'] = $acknowledgementStatus;

        return $this;
    }

    /**
     * Gets receivingStatus
     *
     * @return \SellingPartnerApi\Model\VendorOrders\OrderItemStatusReceivingStatus
     */
    public function getReceivingStatus()
    {
        return $this->container['receivingStatus'];
    }

    /**
     * Sets receivingStatus
     *
     * @param \SellingPartnerApi\Model\VendorOrders\OrderItemStatusReceivingStatus $receivingStatus receivingStatus
     *
     * @return $this
     */
    public function setReceivingStatus($receivingStatus)
    {
        $this->container['receivingStatus'] = $receivingStatus;

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
