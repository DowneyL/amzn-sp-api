<?php
/**
 * CompetitivePriceType
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
 * CompetitivePriceType Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CompetitivePriceType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CompetitivePriceType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'competitivePriceId' => 'string',
'price' => '\SellingPartnerApi\Model\ProductPricingV0\PriceType',
'condition' => 'string',
'subcondition' => 'string',
'offerType' => '\SellingPartnerApi\Model\ProductPricingV0\OfferCustomerType',
'quantityTier' => 'int',
'quantityDiscountType' => '\SellingPartnerApi\Model\ProductPricingV0\QuantityDiscountType',
'sellerId' => 'string',
'belongsToRequester' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'competitivePriceId' => null,
'price' => null,
'condition' => null,
'subcondition' => null,
'offerType' => null,
'quantityTier' => 'int32',
'quantityDiscountType' => null,
'sellerId' => null,
'belongsToRequester' => null    ];

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
        'competitivePriceId' => 'CompetitivePriceId',
'price' => 'Price',
'condition' => 'condition',
'subcondition' => 'subcondition',
'offerType' => 'offerType',
'quantityTier' => 'quantityTier',
'quantityDiscountType' => 'quantityDiscountType',
'sellerId' => 'sellerId',
'belongsToRequester' => 'belongsToRequester'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'competitivePriceId' => 'setCompetitivePriceId',
'price' => 'setPrice',
'condition' => 'setCondition',
'subcondition' => 'setSubcondition',
'offerType' => 'setOfferType',
'quantityTier' => 'setQuantityTier',
'quantityDiscountType' => 'setQuantityDiscountType',
'sellerId' => 'setSellerId',
'belongsToRequester' => 'setBelongsToRequester'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'competitivePriceId' => 'getCompetitivePriceId',
'price' => 'getPrice',
'condition' => 'getCondition',
'subcondition' => 'getSubcondition',
'offerType' => 'getOfferType',
'quantityTier' => 'getQuantityTier',
'quantityDiscountType' => 'getQuantityDiscountType',
'sellerId' => 'getSellerId',
'belongsToRequester' => 'getBelongsToRequester'    ];

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
        $this->container['competitivePriceId'] = isset($data['competitivePriceId']) ? $data['competitivePriceId'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['subcondition'] = isset($data['subcondition']) ? $data['subcondition'] : null;
        $this->container['offerType'] = isset($data['offerType']) ? $data['offerType'] : null;
        $this->container['quantityTier'] = isset($data['quantityTier']) ? $data['quantityTier'] : null;
        $this->container['quantityDiscountType'] = isset($data['quantityDiscountType']) ? $data['quantityDiscountType'] : null;
        $this->container['sellerId'] = isset($data['sellerId']) ? $data['sellerId'] : null;
        $this->container['belongsToRequester'] = isset($data['belongsToRequester']) ? $data['belongsToRequester'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['competitivePriceId'] === null) {
            $invalidProperties[] = "'competitivePriceId' can't be null";
        }
        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
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
     * Gets competitivePriceId
     *
     * @return string
     */
    public function getCompetitivePriceId()
    {
        return $this->container['competitivePriceId'];
    }

    /**
     * Sets competitivePriceId
     *
     * @param string $competitivePriceId The pricing model for each price that is returned.  Possible values:  * 1 - New Buy Box Price. * 2 - Used Buy Box Price.
     *
     * @return $this
     */
    public function setCompetitivePriceId($competitivePriceId)
    {
        $this->container['competitivePriceId'] = $competitivePriceId;

        return $this;
    }

    /**
     * Gets price
     *
     * @return \SellingPartnerApi\Model\ProductPricingV0\PriceType
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param \SellingPartnerApi\Model\ProductPricingV0\PriceType $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
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
     * @param string $condition Indicates the condition of the item whose pricing information is returned. Possible values are: New, Used, Collectible, Refurbished, or Club.
     *
     * @return $this
     */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets subcondition
     *
     * @return string
     */
    public function getSubcondition()
    {
        return $this->container['subcondition'];
    }

    /**
     * Sets subcondition
     *
     * @param string $subcondition Indicates the subcondition of the item whose pricing information is returned. Possible values are: New, Mint, Very Good, Good, Acceptable, Poor, Club, OEM, Warranty, Refurbished Warranty, Refurbished, Open Box, or Other.
     *
     * @return $this
     */
    public function setSubcondition($subcondition)
    {
        $this->container['subcondition'] = $subcondition;

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
     * Gets sellerId
     *
     * @return string
     */
    public function getSellerId()
    {
        return $this->container['sellerId'];
    }

    /**
     * Sets sellerId
     *
     * @param string $sellerId The seller identifier for the offer.
     *
     * @return $this
     */
    public function setSellerId($sellerId)
    {
        $this->container['sellerId'] = $sellerId;

        return $this;
    }

    /**
     * Gets belongsToRequester
     *
     * @return bool
     */
    public function getBelongsToRequester()
    {
        return $this->container['belongsToRequester'];
    }

    /**
     * Sets belongsToRequester
     *
     * @param bool $belongsToRequester Indicates whether or not the pricing information is for an offer listing that belongs to the requester. The requester is the seller associated with the SellerId that was submitted with the request. Possible values are: true and false.
     *
     * @return $this
     */
    public function setBelongsToRequester($belongsToRequester)
    {
        $this->container['belongsToRequester'] = $belongsToRequester;

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