<?php
/**
 * BoxContentsFeeDetails
 *
 * PHP version 5
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Fulfillment Inbound
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
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

namespace SellingPartnerApi\Model\FulfillmentInboundV0;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;

/**
 * BoxContentsFeeDetails Class Doc Comment
 *
 * @category Class
 * @description The manual processing fee per unit and total fee for a shipment.
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BoxContentsFeeDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BoxContentsFeeDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'totalUnits' => '\SellingPartnerApi\Model\FulfillmentInboundV0\Quantity',
'feePerUnit' => '\SellingPartnerApi\Model\FulfillmentInboundV0\Amount',
'totalFee' => '\SellingPartnerApi\Model\FulfillmentInboundV0\Amount'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'totalUnits' => null,
'feePerUnit' => null,
'totalFee' => null    ];

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
        'totalUnits' => 'TotalUnits',
'feePerUnit' => 'FeePerUnit',
'totalFee' => 'TotalFee'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'totalUnits' => 'setTotalUnits',
'feePerUnit' => 'setFeePerUnit',
'totalFee' => 'setTotalFee'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'totalUnits' => 'getTotalUnits',
'feePerUnit' => 'getFeePerUnit',
'totalFee' => 'getTotalFee'    ];

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
        $this->container['totalUnits'] = isset($data['totalUnits']) ? $data['totalUnits'] : null;
        $this->container['feePerUnit'] = isset($data['feePerUnit']) ? $data['feePerUnit'] : null;
        $this->container['totalFee'] = isset($data['totalFee']) ? $data['totalFee'] : null;
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
     * Gets totalUnits
     *
     * @return \SellingPartnerApi\Model\FulfillmentInboundV0\Quantity
     */
    public function getTotalUnits()
    {
        return $this->container['totalUnits'];
    }

    /**
     * Sets totalUnits
     *
     * @param \SellingPartnerApi\Model\FulfillmentInboundV0\Quantity $totalUnits totalUnits
     *
     * @return $this
     */
    public function setTotalUnits($totalUnits)
    {
        $this->container['totalUnits'] = $totalUnits;

        return $this;
    }

    /**
     * Gets feePerUnit
     *
     * @return \SellingPartnerApi\Model\FulfillmentInboundV0\Amount
     */
    public function getFeePerUnit()
    {
        return $this->container['feePerUnit'];
    }

    /**
     * Sets feePerUnit
     *
     * @param \SellingPartnerApi\Model\FulfillmentInboundV0\Amount $feePerUnit feePerUnit
     *
     * @return $this
     */
    public function setFeePerUnit($feePerUnit)
    {
        $this->container['feePerUnit'] = $feePerUnit;

        return $this;
    }

    /**
     * Gets totalFee
     *
     * @return \SellingPartnerApi\Model\FulfillmentInboundV0\Amount
     */
    public function getTotalFee()
    {
        return $this->container['totalFee'];
    }

    /**
     * Sets totalFee
     *
     * @param \SellingPartnerApi\Model\FulfillmentInboundV0\Amount $totalFee totalFee
     *
     * @return $this
     */
    public function setTotalFee($totalFee)
    {
        $this->container['totalFee'] = $totalFee;

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