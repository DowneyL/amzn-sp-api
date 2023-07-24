<?php
/**
 * CreateFulfillmentReturnResult
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
 * CreateFulfillmentReturnResult Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateFulfillmentReturnResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateFulfillmentReturnResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'returnItems' => '\SellingPartnerApi\Model\FulfillmentOutbound20200701\ReturnItemList',
'invalidReturnItems' => '\SellingPartnerApi\Model\FulfillmentOutbound20200701\InvalidReturnItemList',
'returnAuthorizations' => '\SellingPartnerApi\Model\FulfillmentOutbound20200701\ReturnAuthorizationList'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'returnItems' => null,
'invalidReturnItems' => null,
'returnAuthorizations' => null    ];

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
        'returnItems' => 'returnItems',
'invalidReturnItems' => 'invalidReturnItems',
'returnAuthorizations' => 'returnAuthorizations'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'returnItems' => 'setReturnItems',
'invalidReturnItems' => 'setInvalidReturnItems',
'returnAuthorizations' => 'setReturnAuthorizations'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'returnItems' => 'getReturnItems',
'invalidReturnItems' => 'getInvalidReturnItems',
'returnAuthorizations' => 'getReturnAuthorizations'    ];

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
        $this->container['returnItems'] = isset($data['returnItems']) ? $data['returnItems'] : null;
        $this->container['invalidReturnItems'] = isset($data['invalidReturnItems']) ? $data['invalidReturnItems'] : null;
        $this->container['returnAuthorizations'] = isset($data['returnAuthorizations']) ? $data['returnAuthorizations'] : null;
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
     * Gets returnItems
     *
     * @return \SellingPartnerApi\Model\FulfillmentOutbound20200701\ReturnItemList
     */
    public function getReturnItems()
    {
        return $this->container['returnItems'];
    }

    /**
     * Sets returnItems
     *
     * @param \SellingPartnerApi\Model\FulfillmentOutbound20200701\ReturnItemList $returnItems returnItems
     *
     * @return $this
     */
    public function setReturnItems($returnItems)
    {
        $this->container['returnItems'] = $returnItems;

        return $this;
    }

    /**
     * Gets invalidReturnItems
     *
     * @return \SellingPartnerApi\Model\FulfillmentOutbound20200701\InvalidReturnItemList
     */
    public function getInvalidReturnItems()
    {
        return $this->container['invalidReturnItems'];
    }

    /**
     * Sets invalidReturnItems
     *
     * @param \SellingPartnerApi\Model\FulfillmentOutbound20200701\InvalidReturnItemList $invalidReturnItems invalidReturnItems
     *
     * @return $this
     */
    public function setInvalidReturnItems($invalidReturnItems)
    {
        $this->container['invalidReturnItems'] = $invalidReturnItems;

        return $this;
    }

    /**
     * Gets returnAuthorizations
     *
     * @return \SellingPartnerApi\Model\FulfillmentOutbound20200701\ReturnAuthorizationList
     */
    public function getReturnAuthorizations()
    {
        return $this->container['returnAuthorizations'];
    }

    /**
     * Sets returnAuthorizations
     *
     * @param \SellingPartnerApi\Model\FulfillmentOutbound20200701\ReturnAuthorizationList $returnAuthorizations returnAuthorizations
     *
     * @return $this
     */
    public function setReturnAuthorizations($returnAuthorizations)
    {
        $this->container['returnAuthorizations'] = $returnAuthorizations;

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