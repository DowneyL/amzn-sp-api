<?php
/**
 * PackedItem
 *
 * PHP version 5
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Direct Fulfillment Shipping
 *
 * The Selling Partner API for Direct Fulfillment Shipping provides programmatic access to a direct fulfillment vendor's shipping data.
 *
 * OpenAPI spec version: 2021-12-28
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.36
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\VendorDirectFulfillmentShipping20211228;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;

/**
 * PackedItem Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PackedItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PackedItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'itemSequenceNumber' => 'int',
'buyerProductIdentifier' => 'string',
'pieceNumber' => 'int',
'vendorProductIdentifier' => 'string',
'packedQuantity' => '\SellingPartnerApi\Model\VendorDirectFulfillmentShipping20211228\ItemQuantity'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'itemSequenceNumber' => null,
'buyerProductIdentifier' => null,
'pieceNumber' => null,
'vendorProductIdentifier' => null,
'packedQuantity' => null    ];

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
'pieceNumber' => 'pieceNumber',
'vendorProductIdentifier' => 'vendorProductIdentifier',
'packedQuantity' => 'packedQuantity'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'itemSequenceNumber' => 'setItemSequenceNumber',
'buyerProductIdentifier' => 'setBuyerProductIdentifier',
'pieceNumber' => 'setPieceNumber',
'vendorProductIdentifier' => 'setVendorProductIdentifier',
'packedQuantity' => 'setPackedQuantity'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'itemSequenceNumber' => 'getItemSequenceNumber',
'buyerProductIdentifier' => 'getBuyerProductIdentifier',
'pieceNumber' => 'getPieceNumber',
'vendorProductIdentifier' => 'getVendorProductIdentifier',
'packedQuantity' => 'getPackedQuantity'    ];

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
        $this->container['pieceNumber'] = isset($data['pieceNumber']) ? $data['pieceNumber'] : null;
        $this->container['vendorProductIdentifier'] = isset($data['vendorProductIdentifier']) ? $data['vendorProductIdentifier'] : null;
        $this->container['packedQuantity'] = isset($data['packedQuantity']) ? $data['packedQuantity'] : null;
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
        if ($this->container['packedQuantity'] === null) {
            $invalidProperties[] = "'packedQuantity' can't be null";
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
     * @return int
     */
    public function getItemSequenceNumber()
    {
        return $this->container['itemSequenceNumber'];
    }

    /**
     * Sets itemSequenceNumber
     *
     * @param int $itemSequenceNumber Item Sequence Number for the item. This must be the same value as sent in the order for a given item.
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
     * @param string $buyerProductIdentifier Buyer's Standard Identification Number (ASIN) of an item. Either buyerProductIdentifier or vendorProductIdentifier is required.
     *
     * @return $this
     */
    public function setBuyerProductIdentifier($buyerProductIdentifier)
    {
        $this->container['buyerProductIdentifier'] = $buyerProductIdentifier;

        return $this;
    }

    /**
     * Gets pieceNumber
     *
     * @return int
     */
    public function getPieceNumber()
    {
        return $this->container['pieceNumber'];
    }

    /**
     * Sets pieceNumber
     *
     * @param int $pieceNumber The piece number of the item in this container. This is required when the item is split across different containers.
     *
     * @return $this
     */
    public function setPieceNumber($pieceNumber)
    {
        $this->container['pieceNumber'] = $pieceNumber;

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
     * @param string $vendorProductIdentifier The vendor selected product identification of the item. Should be the same as was sent in the Purchase Order, like SKU Number.
     *
     * @return $this
     */
    public function setVendorProductIdentifier($vendorProductIdentifier)
    {
        $this->container['vendorProductIdentifier'] = $vendorProductIdentifier;

        return $this;
    }

    /**
     * Gets packedQuantity
     *
     * @return \SellingPartnerApi\Model\VendorDirectFulfillmentShipping20211228\ItemQuantity
     */
    public function getPackedQuantity()
    {
        return $this->container['packedQuantity'];
    }

    /**
     * Sets packedQuantity
     *
     * @param \SellingPartnerApi\Model\VendorDirectFulfillmentShipping20211228\ItemQuantity $packedQuantity packedQuantity
     *
     * @return $this
     */
    public function setPackedQuantity($packedQuantity)
    {
        $this->container['packedQuantity'] = $packedQuantity;

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
