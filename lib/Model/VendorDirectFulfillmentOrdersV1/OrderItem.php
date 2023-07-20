<?php
/**
 * OrderItem
 *
 * PHP version 5
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Direct Fulfillment Orders
 *
 * The Selling Partner API for Direct Fulfillment Orders provides programmatic access to a direct fulfillment vendor's order data.
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

namespace SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV1;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;

/**
 * OrderItem Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'itemSequenceNumber' => 'string',
'buyerProductIdentifier' => 'string',
'vendorProductIdentifier' => 'string',
'title' => 'string',
'orderedQuantity' => '\SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV1\ItemQuantity',
'scheduledDeliveryShipment' => '\SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV1\ScheduledDeliveryShipment',
'giftDetails' => '\SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV1\GiftDetails',
'netPrice' => '\SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV1\Money',
'taxDetails' => '\SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV1\OrderItemTaxDetails',
'totalPrice' => '\SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV1\Money'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'itemSequenceNumber' => null,
'buyerProductIdentifier' => null,
'vendorProductIdentifier' => null,
'title' => null,
'orderedQuantity' => null,
'scheduledDeliveryShipment' => null,
'giftDetails' => null,
'netPrice' => null,
'taxDetails' => null,
'totalPrice' => null    ];

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
'title' => 'title',
'orderedQuantity' => 'orderedQuantity',
'scheduledDeliveryShipment' => 'scheduledDeliveryShipment',
'giftDetails' => 'giftDetails',
'netPrice' => 'netPrice',
'taxDetails' => 'taxDetails',
'totalPrice' => 'totalPrice'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'itemSequenceNumber' => 'setItemSequenceNumber',
'buyerProductIdentifier' => 'setBuyerProductIdentifier',
'vendorProductIdentifier' => 'setVendorProductIdentifier',
'title' => 'setTitle',
'orderedQuantity' => 'setOrderedQuantity',
'scheduledDeliveryShipment' => 'setScheduledDeliveryShipment',
'giftDetails' => 'setGiftDetails',
'netPrice' => 'setNetPrice',
'taxDetails' => 'setTaxDetails',
'totalPrice' => 'setTotalPrice'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'itemSequenceNumber' => 'getItemSequenceNumber',
'buyerProductIdentifier' => 'getBuyerProductIdentifier',
'vendorProductIdentifier' => 'getVendorProductIdentifier',
'title' => 'getTitle',
'orderedQuantity' => 'getOrderedQuantity',
'scheduledDeliveryShipment' => 'getScheduledDeliveryShipment',
'giftDetails' => 'getGiftDetails',
'netPrice' => 'getNetPrice',
'taxDetails' => 'getTaxDetails',
'totalPrice' => 'getTotalPrice'    ];

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
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['orderedQuantity'] = isset($data['orderedQuantity']) ? $data['orderedQuantity'] : null;
        $this->container['scheduledDeliveryShipment'] = isset($data['scheduledDeliveryShipment']) ? $data['scheduledDeliveryShipment'] : null;
        $this->container['giftDetails'] = isset($data['giftDetails']) ? $data['giftDetails'] : null;
        $this->container['netPrice'] = isset($data['netPrice']) ? $data['netPrice'] : null;
        $this->container['taxDetails'] = isset($data['taxDetails']) ? $data['taxDetails'] : null;
        $this->container['totalPrice'] = isset($data['totalPrice']) ? $data['totalPrice'] : null;
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
        if ($this->container['orderedQuantity'] === null) {
            $invalidProperties[] = "'orderedQuantity' can't be null";
        }
        if ($this->container['netPrice'] === null) {
            $invalidProperties[] = "'netPrice' can't be null";
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
     * @param string $buyerProductIdentifier Buyer's standard identification number (ASIN) of an item.
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
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title Title for the item.
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets orderedQuantity
     *
     * @return \SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV1\ItemQuantity
     */
    public function getOrderedQuantity()
    {
        return $this->container['orderedQuantity'];
    }

    /**
     * Sets orderedQuantity
     *
     * @param \SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV1\ItemQuantity $orderedQuantity orderedQuantity
     *
     * @return $this
     */
    public function setOrderedQuantity($orderedQuantity)
    {
        $this->container['orderedQuantity'] = $orderedQuantity;

        return $this;
    }

    /**
     * Gets scheduledDeliveryShipment
     *
     * @return \SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV1\ScheduledDeliveryShipment
     */
    public function getScheduledDeliveryShipment()
    {
        return $this->container['scheduledDeliveryShipment'];
    }

    /**
     * Sets scheduledDeliveryShipment
     *
     * @param \SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV1\ScheduledDeliveryShipment $scheduledDeliveryShipment scheduledDeliveryShipment
     *
     * @return $this
     */
    public function setScheduledDeliveryShipment($scheduledDeliveryShipment)
    {
        $this->container['scheduledDeliveryShipment'] = $scheduledDeliveryShipment;

        return $this;
    }

    /**
     * Gets giftDetails
     *
     * @return \SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV1\GiftDetails
     */
    public function getGiftDetails()
    {
        return $this->container['giftDetails'];
    }

    /**
     * Sets giftDetails
     *
     * @param \SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV1\GiftDetails $giftDetails giftDetails
     *
     * @return $this
     */
    public function setGiftDetails($giftDetails)
    {
        $this->container['giftDetails'] = $giftDetails;

        return $this;
    }

    /**
     * Gets netPrice
     *
     * @return \SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV1\Money
     */
    public function getNetPrice()
    {
        return $this->container['netPrice'];
    }

    /**
     * Sets netPrice
     *
     * @param \SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV1\Money $netPrice netPrice
     *
     * @return $this
     */
    public function setNetPrice($netPrice)
    {
        $this->container['netPrice'] = $netPrice;

        return $this;
    }

    /**
     * Gets taxDetails
     *
     * @return \SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV1\OrderItemTaxDetails
     */
    public function getTaxDetails()
    {
        return $this->container['taxDetails'];
    }

    /**
     * Sets taxDetails
     *
     * @param \SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV1\OrderItemTaxDetails $taxDetails taxDetails
     *
     * @return $this
     */
    public function setTaxDetails($taxDetails)
    {
        $this->container['taxDetails'] = $taxDetails;

        return $this;
    }

    /**
     * Gets totalPrice
     *
     * @return \SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV1\Money
     */
    public function getTotalPrice()
    {
        return $this->container['totalPrice'];
    }

    /**
     * Sets totalPrice
     *
     * @param \SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV1\Money $totalPrice totalPrice
     *
     * @return $this
     */
    public function setTotalPrice($totalPrice)
    {
        $this->container['totalPrice'] = $totalPrice;

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
