<?php
/**
 * ShipmentStatusUpdate
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
 * ShipmentStatusUpdate Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShipmentStatusUpdate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShipmentStatusUpdate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'purchaseOrderNumber' => 'string',
'sellingParty' => '\SellingPartnerApi\Model\VendorDirectFulfillmentShipping20211228\PartyIdentification',
'shipFromParty' => '\SellingPartnerApi\Model\VendorDirectFulfillmentShipping20211228\PartyIdentification',
'statusUpdateDetails' => '\SellingPartnerApi\Model\VendorDirectFulfillmentShipping20211228\StatusUpdateDetails'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'purchaseOrderNumber' => null,
'sellingParty' => null,
'shipFromParty' => null,
'statusUpdateDetails' => null    ];

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
        'purchaseOrderNumber' => 'purchaseOrderNumber',
'sellingParty' => 'sellingParty',
'shipFromParty' => 'shipFromParty',
'statusUpdateDetails' => 'statusUpdateDetails'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'purchaseOrderNumber' => 'setPurchaseOrderNumber',
'sellingParty' => 'setSellingParty',
'shipFromParty' => 'setShipFromParty',
'statusUpdateDetails' => 'setStatusUpdateDetails'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'purchaseOrderNumber' => 'getPurchaseOrderNumber',
'sellingParty' => 'getSellingParty',
'shipFromParty' => 'getShipFromParty',
'statusUpdateDetails' => 'getStatusUpdateDetails'    ];

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
        $this->container['purchaseOrderNumber'] = isset($data['purchaseOrderNumber']) ? $data['purchaseOrderNumber'] : null;
        $this->container['sellingParty'] = isset($data['sellingParty']) ? $data['sellingParty'] : null;
        $this->container['shipFromParty'] = isset($data['shipFromParty']) ? $data['shipFromParty'] : null;
        $this->container['statusUpdateDetails'] = isset($data['statusUpdateDetails']) ? $data['statusUpdateDetails'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['purchaseOrderNumber'] === null) {
            $invalidProperties[] = "'purchaseOrderNumber' can't be null";
        }
        if ($this->container['sellingParty'] === null) {
            $invalidProperties[] = "'sellingParty' can't be null";
        }
        if ($this->container['shipFromParty'] === null) {
            $invalidProperties[] = "'shipFromParty' can't be null";
        }
        if ($this->container['statusUpdateDetails'] === null) {
            $invalidProperties[] = "'statusUpdateDetails' can't be null";
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
     * Gets purchaseOrderNumber
     *
     * @return string
     */
    public function getPurchaseOrderNumber()
    {
        return $this->container['purchaseOrderNumber'];
    }

    /**
     * Sets purchaseOrderNumber
     *
     * @param string $purchaseOrderNumber Purchase order number of the shipment for which to update the shipment status.
     *
     * @return $this
     */
    public function setPurchaseOrderNumber($purchaseOrderNumber)
    {
        $this->container['purchaseOrderNumber'] = $purchaseOrderNumber;

        return $this;
    }

    /**
     * Gets sellingParty
     *
     * @return \SellingPartnerApi\Model\VendorDirectFulfillmentShipping20211228\PartyIdentification
     */
    public function getSellingParty()
    {
        return $this->container['sellingParty'];
    }

    /**
     * Sets sellingParty
     *
     * @param \SellingPartnerApi\Model\VendorDirectFulfillmentShipping20211228\PartyIdentification $sellingParty sellingParty
     *
     * @return $this
     */
    public function setSellingParty($sellingParty)
    {
        $this->container['sellingParty'] = $sellingParty;

        return $this;
    }

    /**
     * Gets shipFromParty
     *
     * @return \SellingPartnerApi\Model\VendorDirectFulfillmentShipping20211228\PartyIdentification
     */
    public function getShipFromParty()
    {
        return $this->container['shipFromParty'];
    }

    /**
     * Sets shipFromParty
     *
     * @param \SellingPartnerApi\Model\VendorDirectFulfillmentShipping20211228\PartyIdentification $shipFromParty shipFromParty
     *
     * @return $this
     */
    public function setShipFromParty($shipFromParty)
    {
        $this->container['shipFromParty'] = $shipFromParty;

        return $this;
    }

    /**
     * Gets statusUpdateDetails
     *
     * @return \SellingPartnerApi\Model\VendorDirectFulfillmentShipping20211228\StatusUpdateDetails
     */
    public function getStatusUpdateDetails()
    {
        return $this->container['statusUpdateDetails'];
    }

    /**
     * Sets statusUpdateDetails
     *
     * @param \SellingPartnerApi\Model\VendorDirectFulfillmentShipping20211228\StatusUpdateDetails $statusUpdateDetails statusUpdateDetails
     *
     * @return $this
     */
    public function setStatusUpdateDetails($statusUpdateDetails)
    {
        $this->container['statusUpdateDetails'] = $statusUpdateDetails;

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