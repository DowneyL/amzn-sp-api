<?php
/**
 * ShipmentDetails
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

namespace SellingPartnerApi\Model\VendorDirectFulfillmentOrders20211228;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;

/**
 * ShipmentDetails Class Doc Comment
 *
 * @category Class
 * @description Shipment details required for the shipment.
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShipmentDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShipmentDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'isPriorityShipment' => 'bool',
'isScheduledDeliveryShipment' => 'bool',
'isPslipRequired' => 'bool',
'isGift' => 'bool',
'shipMethod' => 'string',
'shipmentDates' => '\SellingPartnerApi\Model\VendorDirectFulfillmentOrders20211228\ShipmentDates',
'messageToCustomer' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'isPriorityShipment' => null,
'isScheduledDeliveryShipment' => null,
'isPslipRequired' => null,
'isGift' => null,
'shipMethod' => null,
'shipmentDates' => null,
'messageToCustomer' => null    ];

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
        'isPriorityShipment' => 'isPriorityShipment',
'isScheduledDeliveryShipment' => 'isScheduledDeliveryShipment',
'isPslipRequired' => 'isPslipRequired',
'isGift' => 'isGift',
'shipMethod' => 'shipMethod',
'shipmentDates' => 'shipmentDates',
'messageToCustomer' => 'messageToCustomer'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'isPriorityShipment' => 'setIsPriorityShipment',
'isScheduledDeliveryShipment' => 'setIsScheduledDeliveryShipment',
'isPslipRequired' => 'setIsPslipRequired',
'isGift' => 'setIsGift',
'shipMethod' => 'setShipMethod',
'shipmentDates' => 'setShipmentDates',
'messageToCustomer' => 'setMessageToCustomer'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'isPriorityShipment' => 'getIsPriorityShipment',
'isScheduledDeliveryShipment' => 'getIsScheduledDeliveryShipment',
'isPslipRequired' => 'getIsPslipRequired',
'isGift' => 'getIsGift',
'shipMethod' => 'getShipMethod',
'shipmentDates' => 'getShipmentDates',
'messageToCustomer' => 'getMessageToCustomer'    ];

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
        $this->container['isPriorityShipment'] = isset($data['isPriorityShipment']) ? $data['isPriorityShipment'] : null;
        $this->container['isScheduledDeliveryShipment'] = isset($data['isScheduledDeliveryShipment']) ? $data['isScheduledDeliveryShipment'] : null;
        $this->container['isPslipRequired'] = isset($data['isPslipRequired']) ? $data['isPslipRequired'] : null;
        $this->container['isGift'] = isset($data['isGift']) ? $data['isGift'] : null;
        $this->container['shipMethod'] = isset($data['shipMethod']) ? $data['shipMethod'] : null;
        $this->container['shipmentDates'] = isset($data['shipmentDates']) ? $data['shipmentDates'] : null;
        $this->container['messageToCustomer'] = isset($data['messageToCustomer']) ? $data['messageToCustomer'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['isPriorityShipment'] === null) {
            $invalidProperties[] = "'isPriorityShipment' can't be null";
        }
        if ($this->container['isPslipRequired'] === null) {
            $invalidProperties[] = "'isPslipRequired' can't be null";
        }
        if ($this->container['shipMethod'] === null) {
            $invalidProperties[] = "'shipMethod' can't be null";
        }
        if ($this->container['shipmentDates'] === null) {
            $invalidProperties[] = "'shipmentDates' can't be null";
        }
        if ($this->container['messageToCustomer'] === null) {
            $invalidProperties[] = "'messageToCustomer' can't be null";
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
     * Gets isPriorityShipment
     *
     * @return bool
     */
    public function getIsPriorityShipment()
    {
        return $this->container['isPriorityShipment'];
    }

    /**
     * Sets isPriorityShipment
     *
     * @param bool $isPriorityShipment When true, this is a priority shipment.
     *
     * @return $this
     */
    public function setIsPriorityShipment($isPriorityShipment)
    {
        $this->container['isPriorityShipment'] = $isPriorityShipment;

        return $this;
    }

    /**
     * Gets isScheduledDeliveryShipment
     *
     * @return bool
     */
    public function getIsScheduledDeliveryShipment()
    {
        return $this->container['isScheduledDeliveryShipment'];
    }

    /**
     * Sets isScheduledDeliveryShipment
     *
     * @param bool $isScheduledDeliveryShipment When true, this order is part of a scheduled delivery program.
     *
     * @return $this
     */
    public function setIsScheduledDeliveryShipment($isScheduledDeliveryShipment)
    {
        $this->container['isScheduledDeliveryShipment'] = $isScheduledDeliveryShipment;

        return $this;
    }

    /**
     * Gets isPslipRequired
     *
     * @return bool
     */
    public function getIsPslipRequired()
    {
        return $this->container['isPslipRequired'];
    }

    /**
     * Sets isPslipRequired
     *
     * @param bool $isPslipRequired When true, a packing slip is required to be sent to the customer.
     *
     * @return $this
     */
    public function setIsPslipRequired($isPslipRequired)
    {
        $this->container['isPslipRequired'] = $isPslipRequired;

        return $this;
    }

    /**
     * Gets isGift
     *
     * @return bool
     */
    public function getIsGift()
    {
        return $this->container['isGift'];
    }

    /**
     * Sets isGift
     *
     * @param bool $isGift When true, the order contain a gift. Include the gift message and gift wrap information.
     *
     * @return $this
     */
    public function setIsGift($isGift)
    {
        $this->container['isGift'] = $isGift;

        return $this;
    }

    /**
     * Gets shipMethod
     *
     * @return string
     */
    public function getShipMethod()
    {
        return $this->container['shipMethod'];
    }

    /**
     * Sets shipMethod
     *
     * @param string $shipMethod Ship method to be used for shipping the order. Amazon defines ship method codes indicating the shipping carrier and shipment service level. To see the full list of ship methods in use, including both the code and the friendly name, search the 'Help' section on Vendor Central for 'ship methods'.
     *
     * @return $this
     */
    public function setShipMethod($shipMethod)
    {
        $this->container['shipMethod'] = $shipMethod;

        return $this;
    }

    /**
     * Gets shipmentDates
     *
     * @return \SellingPartnerApi\Model\VendorDirectFulfillmentOrders20211228\ShipmentDates
     */
    public function getShipmentDates()
    {
        return $this->container['shipmentDates'];
    }

    /**
     * Sets shipmentDates
     *
     * @param \SellingPartnerApi\Model\VendorDirectFulfillmentOrders20211228\ShipmentDates $shipmentDates shipmentDates
     *
     * @return $this
     */
    public function setShipmentDates($shipmentDates)
    {
        $this->container['shipmentDates'] = $shipmentDates;

        return $this;
    }

    /**
     * Gets messageToCustomer
     *
     * @return string
     */
    public function getMessageToCustomer()
    {
        return $this->container['messageToCustomer'];
    }

    /**
     * Sets messageToCustomer
     *
     * @param string $messageToCustomer Message to customer for order status.
     *
     * @return $this
     */
    public function setMessageToCustomer($messageToCustomer)
    {
        $this->container['messageToCustomer'] = $messageToCustomer;

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
