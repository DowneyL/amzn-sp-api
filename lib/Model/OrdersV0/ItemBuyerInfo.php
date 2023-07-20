<?php
/**
 * ItemBuyerInfo
 *
 * PHP version 5
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Orders
 *
 * The Selling Partner API for Orders helps you programmatically retrieve order information. These APIs let you develop fast, flexible, custom applications in areas like order synchronization, order research, and demand-based decision support tools. The Orders API only supports orders that are less than two years old. Orders more than two years old will not show in the API response.
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

namespace SellingPartnerApi\Model\OrdersV0;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;

/**
 * ItemBuyerInfo Class Doc Comment
 *
 * @category Class
 * @description A single item&#x27;s buyer information.
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ItemBuyerInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ItemBuyerInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'buyerCustomizedInfo' => '\SellingPartnerApi\Model\OrdersV0\BuyerCustomizedInfoDetail',
'giftWrapPrice' => '\SellingPartnerApi\Model\OrdersV0\Money',
'giftWrapTax' => '\SellingPartnerApi\Model\OrdersV0\Money',
'giftMessageText' => 'string',
'giftWrapLevel' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'buyerCustomizedInfo' => null,
'giftWrapPrice' => null,
'giftWrapTax' => null,
'giftMessageText' => null,
'giftWrapLevel' => null    ];

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
        'buyerCustomizedInfo' => 'BuyerCustomizedInfo',
'giftWrapPrice' => 'GiftWrapPrice',
'giftWrapTax' => 'GiftWrapTax',
'giftMessageText' => 'GiftMessageText',
'giftWrapLevel' => 'GiftWrapLevel'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'buyerCustomizedInfo' => 'setBuyerCustomizedInfo',
'giftWrapPrice' => 'setGiftWrapPrice',
'giftWrapTax' => 'setGiftWrapTax',
'giftMessageText' => 'setGiftMessageText',
'giftWrapLevel' => 'setGiftWrapLevel'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'buyerCustomizedInfo' => 'getBuyerCustomizedInfo',
'giftWrapPrice' => 'getGiftWrapPrice',
'giftWrapTax' => 'getGiftWrapTax',
'giftMessageText' => 'getGiftMessageText',
'giftWrapLevel' => 'getGiftWrapLevel'    ];

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
        $this->container['buyerCustomizedInfo'] = isset($data['buyerCustomizedInfo']) ? $data['buyerCustomizedInfo'] : null;
        $this->container['giftWrapPrice'] = isset($data['giftWrapPrice']) ? $data['giftWrapPrice'] : null;
        $this->container['giftWrapTax'] = isset($data['giftWrapTax']) ? $data['giftWrapTax'] : null;
        $this->container['giftMessageText'] = isset($data['giftMessageText']) ? $data['giftMessageText'] : null;
        $this->container['giftWrapLevel'] = isset($data['giftWrapLevel']) ? $data['giftWrapLevel'] : null;
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
     * Gets buyerCustomizedInfo
     *
     * @return \SellingPartnerApi\Model\OrdersV0\BuyerCustomizedInfoDetail
     */
    public function getBuyerCustomizedInfo()
    {
        return $this->container['buyerCustomizedInfo'];
    }

    /**
     * Sets buyerCustomizedInfo
     *
     * @param \SellingPartnerApi\Model\OrdersV0\BuyerCustomizedInfoDetail $buyerCustomizedInfo buyerCustomizedInfo
     *
     * @return $this
     */
    public function setBuyerCustomizedInfo($buyerCustomizedInfo)
    {
        $this->container['buyerCustomizedInfo'] = $buyerCustomizedInfo;

        return $this;
    }

    /**
     * Gets giftWrapPrice
     *
     * @return \SellingPartnerApi\Model\OrdersV0\Money
     */
    public function getGiftWrapPrice()
    {
        return $this->container['giftWrapPrice'];
    }

    /**
     * Sets giftWrapPrice
     *
     * @param \SellingPartnerApi\Model\OrdersV0\Money $giftWrapPrice giftWrapPrice
     *
     * @return $this
     */
    public function setGiftWrapPrice($giftWrapPrice)
    {
        $this->container['giftWrapPrice'] = $giftWrapPrice;

        return $this;
    }

    /**
     * Gets giftWrapTax
     *
     * @return \SellingPartnerApi\Model\OrdersV0\Money
     */
    public function getGiftWrapTax()
    {
        return $this->container['giftWrapTax'];
    }

    /**
     * Sets giftWrapTax
     *
     * @param \SellingPartnerApi\Model\OrdersV0\Money $giftWrapTax giftWrapTax
     *
     * @return $this
     */
    public function setGiftWrapTax($giftWrapTax)
    {
        $this->container['giftWrapTax'] = $giftWrapTax;

        return $this;
    }

    /**
     * Gets giftMessageText
     *
     * @return string
     */
    public function getGiftMessageText()
    {
        return $this->container['giftMessageText'];
    }

    /**
     * Sets giftMessageText
     *
     * @param string $giftMessageText A gift message provided by the buyer.
     *
     * @return $this
     */
    public function setGiftMessageText($giftMessageText)
    {
        $this->container['giftMessageText'] = $giftMessageText;

        return $this;
    }

    /**
     * Gets giftWrapLevel
     *
     * @return string
     */
    public function getGiftWrapLevel()
    {
        return $this->container['giftWrapLevel'];
    }

    /**
     * Sets giftWrapLevel
     *
     * @param string $giftWrapLevel The gift wrap level specified by the buyer.
     *
     * @return $this
     */
    public function setGiftWrapLevel($giftWrapLevel)
    {
        $this->container['giftWrapLevel'] = $giftWrapLevel;

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
