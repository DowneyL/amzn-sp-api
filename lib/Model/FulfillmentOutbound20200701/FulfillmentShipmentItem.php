<?php
/**
 * FulfillmentShipmentItem
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
 * FulfillmentShipmentItem Class Doc Comment
 *
 * @category Class
 * @description Item information for a shipment in a fulfillment order.
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FulfillmentShipmentItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FulfillmentShipmentItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sellerSku' => 'string',
'sellerFulfillmentOrderItemId' => 'string',
'quantity' => '\SellingPartnerApi\Model\FulfillmentOutbound20200701\Quantity',
'packageNumber' => 'int',
'serialNumber' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sellerSku' => null,
'sellerFulfillmentOrderItemId' => null,
'quantity' => null,
'packageNumber' => 'int32',
'serialNumber' => null    ];

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
        'sellerSku' => 'sellerSku',
'sellerFulfillmentOrderItemId' => 'sellerFulfillmentOrderItemId',
'quantity' => 'quantity',
'packageNumber' => 'packageNumber',
'serialNumber' => 'serialNumber'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sellerSku' => 'setSellerSku',
'sellerFulfillmentOrderItemId' => 'setSellerFulfillmentOrderItemId',
'quantity' => 'setQuantity',
'packageNumber' => 'setPackageNumber',
'serialNumber' => 'setSerialNumber'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sellerSku' => 'getSellerSku',
'sellerFulfillmentOrderItemId' => 'getSellerFulfillmentOrderItemId',
'quantity' => 'getQuantity',
'packageNumber' => 'getPackageNumber',
'serialNumber' => 'getSerialNumber'    ];

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
        $this->container['sellerSku'] = isset($data['sellerSku']) ? $data['sellerSku'] : null;
        $this->container['sellerFulfillmentOrderItemId'] = isset($data['sellerFulfillmentOrderItemId']) ? $data['sellerFulfillmentOrderItemId'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['packageNumber'] = isset($data['packageNumber']) ? $data['packageNumber'] : null;
        $this->container['serialNumber'] = isset($data['serialNumber']) ? $data['serialNumber'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['sellerSku'] === null) {
            $invalidProperties[] = "'sellerSku' can't be null";
        }
        if ($this->container['sellerFulfillmentOrderItemId'] === null) {
            $invalidProperties[] = "'sellerFulfillmentOrderItemId' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
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
     * Gets sellerSku
     *
     * @return string
     */
    public function getSellerSku()
    {
        return $this->container['sellerSku'];
    }

    /**
     * Sets sellerSku
     *
     * @param string $sellerSku The seller SKU of the item.
     *
     * @return $this
     */
    public function setSellerSku($sellerSku)
    {
        $this->container['sellerSku'] = $sellerSku;

        return $this;
    }

    /**
     * Gets sellerFulfillmentOrderItemId
     *
     * @return string
     */
    public function getSellerFulfillmentOrderItemId()
    {
        return $this->container['sellerFulfillmentOrderItemId'];
    }

    /**
     * Sets sellerFulfillmentOrderItemId
     *
     * @param string $sellerFulfillmentOrderItemId The fulfillment order item identifier that the seller created and submitted with a call to the createFulfillmentOrder operation.
     *
     * @return $this
     */
    public function setSellerFulfillmentOrderItemId($sellerFulfillmentOrderItemId)
    {
        $this->container['sellerFulfillmentOrderItemId'] = $sellerFulfillmentOrderItemId;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return \SellingPartnerApi\Model\FulfillmentOutbound20200701\Quantity
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param \SellingPartnerApi\Model\FulfillmentOutbound20200701\Quantity $quantity quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets packageNumber
     *
     * @return int
     */
    public function getPackageNumber()
    {
        return $this->container['packageNumber'];
    }

    /**
     * Sets packageNumber
     *
     * @param int $packageNumber An identifier for the package that contains the item quantity.
     *
     * @return $this
     */
    public function setPackageNumber($packageNumber)
    {
        $this->container['packageNumber'] = $packageNumber;

        return $this;
    }

    /**
     * Gets serialNumber
     *
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->container['serialNumber'];
    }

    /**
     * Sets serialNumber
     *
     * @param string $serialNumber The serial number of the shipped item.
     *
     * @return $this
     */
    public function setSerialNumber($serialNumber)
    {
        $this->container['serialNumber'] = $serialNumber;

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
