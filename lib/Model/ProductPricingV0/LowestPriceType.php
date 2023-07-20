<?php
/**
 * LowestPriceType
 *
 * PHP version 5
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Pricing
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer information for Amazon Marketplace products.
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

namespace SellingPartnerApi\Model\ProductPricingV0;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;

/**
 * LowestPriceType Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LowestPriceType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LowestPriceType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'condition' => 'string',
'fulfillmentChannel' => 'string',
'offerType' => '\SellingPartnerApi\Model\ProductPricingV0\OfferCustomerType',
'quantityTier' => 'int',
'quantityDiscountType' => '\SellingPartnerApi\Model\ProductPricingV0\QuantityDiscountType',
'landedPrice' => '\SellingPartnerApi\Model\ProductPricingV0\MoneyType',
'listingPrice' => '\SellingPartnerApi\Model\ProductPricingV0\MoneyType',
'shipping' => '\SellingPartnerApi\Model\ProductPricingV0\MoneyType',
'points' => '\SellingPartnerApi\Model\ProductPricingV0\Points'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'condition' => null,
'fulfillmentChannel' => null,
'offerType' => null,
'quantityTier' => 'int32',
'quantityDiscountType' => null,
'landedPrice' => null,
'listingPrice' => null,
'shipping' => null,
'points' => null    ];

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
        'condition' => 'condition',
'fulfillmentChannel' => 'fulfillmentChannel',
'offerType' => 'offerType',
'quantityTier' => 'quantityTier',
'quantityDiscountType' => 'quantityDiscountType',
'landedPrice' => 'LandedPrice',
'listingPrice' => 'ListingPrice',
'shipping' => 'Shipping',
'points' => 'Points'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'condition' => 'setCondition',
'fulfillmentChannel' => 'setFulfillmentChannel',
'offerType' => 'setOfferType',
'quantityTier' => 'setQuantityTier',
'quantityDiscountType' => 'setQuantityDiscountType',
'landedPrice' => 'setLandedPrice',
'listingPrice' => 'setListingPrice',
'shipping' => 'setShipping',
'points' => 'setPoints'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'condition' => 'getCondition',
'fulfillmentChannel' => 'getFulfillmentChannel',
'offerType' => 'getOfferType',
'quantityTier' => 'getQuantityTier',
'quantityDiscountType' => 'getQuantityDiscountType',
'landedPrice' => 'getLandedPrice',
'listingPrice' => 'getListingPrice',
'shipping' => 'getShipping',
'points' => 'getPoints'    ];

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
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['fulfillmentChannel'] = isset($data['fulfillmentChannel']) ? $data['fulfillmentChannel'] : null;
        $this->container['offerType'] = isset($data['offerType']) ? $data['offerType'] : null;
        $this->container['quantityTier'] = isset($data['quantityTier']) ? $data['quantityTier'] : null;
        $this->container['quantityDiscountType'] = isset($data['quantityDiscountType']) ? $data['quantityDiscountType'] : null;
        $this->container['landedPrice'] = isset($data['landedPrice']) ? $data['landedPrice'] : null;
        $this->container['listingPrice'] = isset($data['listingPrice']) ? $data['listingPrice'] : null;
        $this->container['shipping'] = isset($data['shipping']) ? $data['shipping'] : null;
        $this->container['points'] = isset($data['points']) ? $data['points'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['condition'] === null) {
            $invalidProperties[] = "'condition' can't be null";
        }
        if ($this->container['fulfillmentChannel'] === null) {
            $invalidProperties[] = "'fulfillmentChannel' can't be null";
        }
        if ($this->container['landedPrice'] === null) {
            $invalidProperties[] = "'landedPrice' can't be null";
        }
        if ($this->container['listingPrice'] === null) {
            $invalidProperties[] = "'listingPrice' can't be null";
        }
        if ($this->container['shipping'] === null) {
            $invalidProperties[] = "'shipping' can't be null";
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
     * Gets condition
     *
     * @return string
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param string $condition Indicates the condition of the item. For example: New, Used, Collectible, Refurbished, or Club.
     *
     * @return $this
     */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets fulfillmentChannel
     *
     * @return string
     */
    public function getFulfillmentChannel()
    {
        return $this->container['fulfillmentChannel'];
    }

    /**
     * Sets fulfillmentChannel
     *
     * @param string $fulfillmentChannel Indicates whether the item is fulfilled by Amazon or by the seller.
     *
     * @return $this
     */
    public function setFulfillmentChannel($fulfillmentChannel)
    {
        $this->container['fulfillmentChannel'] = $fulfillmentChannel;

        return $this;
    }

    /**
     * Gets offerType
     *
     * @return \SellingPartnerApi\Model\ProductPricingV0\OfferCustomerType
     */
    public function getOfferType()
    {
        return $this->container['offerType'];
    }

    /**
     * Sets offerType
     *
     * @param \SellingPartnerApi\Model\ProductPricingV0\OfferCustomerType $offerType offerType
     *
     * @return $this
     */
    public function setOfferType($offerType)
    {
        $this->container['offerType'] = $offerType;

        return $this;
    }

    /**
     * Gets quantityTier
     *
     * @return int
     */
    public function getQuantityTier()
    {
        return $this->container['quantityTier'];
    }

    /**
     * Sets quantityTier
     *
     * @param int $quantityTier Indicates at what quantity this price becomes active.
     *
     * @return $this
     */
    public function setQuantityTier($quantityTier)
    {
        $this->container['quantityTier'] = $quantityTier;

        return $this;
    }

    /**
     * Gets quantityDiscountType
     *
     * @return \SellingPartnerApi\Model\ProductPricingV0\QuantityDiscountType
     */
    public function getQuantityDiscountType()
    {
        return $this->container['quantityDiscountType'];
    }

    /**
     * Sets quantityDiscountType
     *
     * @param \SellingPartnerApi\Model\ProductPricingV0\QuantityDiscountType $quantityDiscountType quantityDiscountType
     *
     * @return $this
     */
    public function setQuantityDiscountType($quantityDiscountType)
    {
        $this->container['quantityDiscountType'] = $quantityDiscountType;

        return $this;
    }

    /**
     * Gets landedPrice
     *
     * @return \SellingPartnerApi\Model\ProductPricingV0\MoneyType
     */
    public function getLandedPrice()
    {
        return $this->container['landedPrice'];
    }

    /**
     * Sets landedPrice
     *
     * @param \SellingPartnerApi\Model\ProductPricingV0\MoneyType $landedPrice landedPrice
     *
     * @return $this
     */
    public function setLandedPrice($landedPrice)
    {
        $this->container['landedPrice'] = $landedPrice;

        return $this;
    }

    /**
     * Gets listingPrice
     *
     * @return \SellingPartnerApi\Model\ProductPricingV0\MoneyType
     */
    public function getListingPrice()
    {
        return $this->container['listingPrice'];
    }

    /**
     * Sets listingPrice
     *
     * @param \SellingPartnerApi\Model\ProductPricingV0\MoneyType $listingPrice listingPrice
     *
     * @return $this
     */
    public function setListingPrice($listingPrice)
    {
        $this->container['listingPrice'] = $listingPrice;

        return $this;
    }

    /**
     * Gets shipping
     *
     * @return \SellingPartnerApi\Model\ProductPricingV0\MoneyType
     */
    public function getShipping()
    {
        return $this->container['shipping'];
    }

    /**
     * Sets shipping
     *
     * @param \SellingPartnerApi\Model\ProductPricingV0\MoneyType $shipping shipping
     *
     * @return $this
     */
    public function setShipping($shipping)
    {
        $this->container['shipping'] = $shipping;

        return $this;
    }

    /**
     * Gets points
     *
     * @return \SellingPartnerApi\Model\ProductPricingV0\Points
     */
    public function getPoints()
    {
        return $this->container['points'];
    }

    /**
     * Sets points
     *
     * @param \SellingPartnerApi\Model\ProductPricingV0\Points $points points
     *
     * @return $this
     */
    public function setPoints($points)
    {
        $this->container['points'] = $points;

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
