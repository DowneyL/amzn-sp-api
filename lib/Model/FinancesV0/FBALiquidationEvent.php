<?php
/**
 * FBALiquidationEvent
 *
 * PHP version 5
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Finances
 *
 * The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
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

namespace SellingPartnerApi\Model\FinancesV0;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;

/**
 * FBALiquidationEvent Class Doc Comment
 *
 * @category Class
 * @description A payment event for Fulfillment by Amazon (FBA) inventory liquidation. This event is used only in the US marketplace.
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FBALiquidationEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FBALiquidationEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'postedDate' => '\SellingPartnerApi\Model\FinancesV0\\DateTime',
'originalRemovalOrderId' => 'string',
'liquidationProceedsAmount' => '\SellingPartnerApi\Model\FinancesV0\Currency',
'liquidationFeeAmount' => '\SellingPartnerApi\Model\FinancesV0\Currency'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'postedDate' => null,
'originalRemovalOrderId' => null,
'liquidationProceedsAmount' => null,
'liquidationFeeAmount' => null    ];

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
        'postedDate' => 'PostedDate',
'originalRemovalOrderId' => 'OriginalRemovalOrderId',
'liquidationProceedsAmount' => 'LiquidationProceedsAmount',
'liquidationFeeAmount' => 'LiquidationFeeAmount'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'postedDate' => 'setPostedDate',
'originalRemovalOrderId' => 'setOriginalRemovalOrderId',
'liquidationProceedsAmount' => 'setLiquidationProceedsAmount',
'liquidationFeeAmount' => 'setLiquidationFeeAmount'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'postedDate' => 'getPostedDate',
'originalRemovalOrderId' => 'getOriginalRemovalOrderId',
'liquidationProceedsAmount' => 'getLiquidationProceedsAmount',
'liquidationFeeAmount' => 'getLiquidationFeeAmount'    ];

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
        $this->container['postedDate'] = isset($data['postedDate']) ? $data['postedDate'] : null;
        $this->container['originalRemovalOrderId'] = isset($data['originalRemovalOrderId']) ? $data['originalRemovalOrderId'] : null;
        $this->container['liquidationProceedsAmount'] = isset($data['liquidationProceedsAmount']) ? $data['liquidationProceedsAmount'] : null;
        $this->container['liquidationFeeAmount'] = isset($data['liquidationFeeAmount']) ? $data['liquidationFeeAmount'] : null;
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
     * Gets postedDate
     *
     * @return \SellingPartnerApi\Model\FinancesV0\\DateTime
     */
    public function getPostedDate()
    {
        return $this->container['postedDate'];
    }

    /**
     * Sets postedDate
     *
     * @param \SellingPartnerApi\Model\FinancesV0\\DateTime $postedDate postedDate
     *
     * @return $this
     */
    public function setPostedDate($postedDate)
    {
        $this->container['postedDate'] = $postedDate;

        return $this;
    }

    /**
     * Gets originalRemovalOrderId
     *
     * @return string
     */
    public function getOriginalRemovalOrderId()
    {
        return $this->container['originalRemovalOrderId'];
    }

    /**
     * Sets originalRemovalOrderId
     *
     * @param string $originalRemovalOrderId The identifier for the original removal order.
     *
     * @return $this
     */
    public function setOriginalRemovalOrderId($originalRemovalOrderId)
    {
        $this->container['originalRemovalOrderId'] = $originalRemovalOrderId;

        return $this;
    }

    /**
     * Gets liquidationProceedsAmount
     *
     * @return \SellingPartnerApi\Model\FinancesV0\Currency
     */
    public function getLiquidationProceedsAmount()
    {
        return $this->container['liquidationProceedsAmount'];
    }

    /**
     * Sets liquidationProceedsAmount
     *
     * @param \SellingPartnerApi\Model\FinancesV0\Currency $liquidationProceedsAmount liquidationProceedsAmount
     *
     * @return $this
     */
    public function setLiquidationProceedsAmount($liquidationProceedsAmount)
    {
        $this->container['liquidationProceedsAmount'] = $liquidationProceedsAmount;

        return $this;
    }

    /**
     * Gets liquidationFeeAmount
     *
     * @return \SellingPartnerApi\Model\FinancesV0\Currency
     */
    public function getLiquidationFeeAmount()
    {
        return $this->container['liquidationFeeAmount'];
    }

    /**
     * Sets liquidationFeeAmount
     *
     * @param \SellingPartnerApi\Model\FinancesV0\Currency $liquidationFeeAmount liquidationFeeAmount
     *
     * @return $this
     */
    public function setLiquidationFeeAmount($liquidationFeeAmount)
    {
        $this->container['liquidationFeeAmount'] = $liquidationFeeAmount;

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
