<?php
/**
 * PackageDetail
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
 * PackageDetail Class Doc Comment
 *
 * @category Class
 * @description Properties of packages
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PackageDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PackageDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'packageReferenceId' => '\SellingPartnerApi\Model\OrdersV0\PackageReferenceId',
'carrierCode' => 'string',
'carrierName' => 'string',
'shippingMethod' => 'string',
'trackingNumber' => 'string',
'shipDate' => '\DateTime',
'shipFromSupplySourceId' => 'string',
'orderItems' => '\SellingPartnerApi\Model\OrdersV0\ConfirmShipmentOrderItemsList'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'packageReferenceId' => null,
'carrierCode' => null,
'carrierName' => null,
'shippingMethod' => null,
'trackingNumber' => null,
'shipDate' => 'date-time',
'shipFromSupplySourceId' => null,
'orderItems' => null    ];

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
        'packageReferenceId' => 'packageReferenceId',
'carrierCode' => 'carrierCode',
'carrierName' => 'carrierName',
'shippingMethod' => 'shippingMethod',
'trackingNumber' => 'trackingNumber',
'shipDate' => 'shipDate',
'shipFromSupplySourceId' => 'shipFromSupplySourceId',
'orderItems' => 'orderItems'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'packageReferenceId' => 'setPackageReferenceId',
'carrierCode' => 'setCarrierCode',
'carrierName' => 'setCarrierName',
'shippingMethod' => 'setShippingMethod',
'trackingNumber' => 'setTrackingNumber',
'shipDate' => 'setShipDate',
'shipFromSupplySourceId' => 'setShipFromSupplySourceId',
'orderItems' => 'setOrderItems'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'packageReferenceId' => 'getPackageReferenceId',
'carrierCode' => 'getCarrierCode',
'carrierName' => 'getCarrierName',
'shippingMethod' => 'getShippingMethod',
'trackingNumber' => 'getTrackingNumber',
'shipDate' => 'getShipDate',
'shipFromSupplySourceId' => 'getShipFromSupplySourceId',
'orderItems' => 'getOrderItems'    ];

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
        $this->container['packageReferenceId'] = isset($data['packageReferenceId']) ? $data['packageReferenceId'] : null;
        $this->container['carrierCode'] = isset($data['carrierCode']) ? $data['carrierCode'] : null;
        $this->container['carrierName'] = isset($data['carrierName']) ? $data['carrierName'] : null;
        $this->container['shippingMethod'] = isset($data['shippingMethod']) ? $data['shippingMethod'] : null;
        $this->container['trackingNumber'] = isset($data['trackingNumber']) ? $data['trackingNumber'] : null;
        $this->container['shipDate'] = isset($data['shipDate']) ? $data['shipDate'] : null;
        $this->container['shipFromSupplySourceId'] = isset($data['shipFromSupplySourceId']) ? $data['shipFromSupplySourceId'] : null;
        $this->container['orderItems'] = isset($data['orderItems']) ? $data['orderItems'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['packageReferenceId'] === null) {
            $invalidProperties[] = "'packageReferenceId' can't be null";
        }
        if ($this->container['carrierCode'] === null) {
            $invalidProperties[] = "'carrierCode' can't be null";
        }
        if ($this->container['trackingNumber'] === null) {
            $invalidProperties[] = "'trackingNumber' can't be null";
        }
        if ($this->container['shipDate'] === null) {
            $invalidProperties[] = "'shipDate' can't be null";
        }
        if ($this->container['orderItems'] === null) {
            $invalidProperties[] = "'orderItems' can't be null";
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
     * Gets packageReferenceId
     *
     * @return \SellingPartnerApi\Model\OrdersV0\PackageReferenceId
     */
    public function getPackageReferenceId()
    {
        return $this->container['packageReferenceId'];
    }

    /**
     * Sets packageReferenceId
     *
     * @param \SellingPartnerApi\Model\OrdersV0\PackageReferenceId $packageReferenceId packageReferenceId
     *
     * @return $this
     */
    public function setPackageReferenceId($packageReferenceId)
    {
        $this->container['packageReferenceId'] = $packageReferenceId;

        return $this;
    }

    /**
     * Gets carrierCode
     *
     * @return string
     */
    public function getCarrierCode()
    {
        return $this->container['carrierCode'];
    }

    /**
     * Sets carrierCode
     *
     * @param string $carrierCode Identifies the carrier that will deliver the package. This field is required for all marketplaces, see [reference](https://developer-docs.amazon.com/sp-api/changelog/carriercode-value-required-in-shipment-confirmations-for-br-mx-ca-sg-au-in-jp-marketplaces).
     *
     * @return $this
     */
    public function setCarrierCode($carrierCode)
    {
        $this->container['carrierCode'] = $carrierCode;

        return $this;
    }

    /**
     * Gets carrierName
     *
     * @return string
     */
    public function getCarrierName()
    {
        return $this->container['carrierName'];
    }

    /**
     * Sets carrierName
     *
     * @param string $carrierName Carrier Name that will deliver the package. Required when carrierCode is \"Others\"
     *
     * @return $this
     */
    public function setCarrierName($carrierName)
    {
        $this->container['carrierName'] = $carrierName;

        return $this;
    }

    /**
     * Gets shippingMethod
     *
     * @return string
     */
    public function getShippingMethod()
    {
        return $this->container['shippingMethod'];
    }

    /**
     * Sets shippingMethod
     *
     * @param string $shippingMethod Ship method to be used for shipping the order.
     *
     * @return $this
     */
    public function setShippingMethod($shippingMethod)
    {
        $this->container['shippingMethod'] = $shippingMethod;

        return $this;
    }

    /**
     * Gets trackingNumber
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->container['trackingNumber'];
    }

    /**
     * Sets trackingNumber
     *
     * @param string $trackingNumber The tracking number used to obtain tracking and delivery information.
     *
     * @return $this
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->container['trackingNumber'] = $trackingNumber;

        return $this;
    }

    /**
     * Gets shipDate
     *
     * @return \DateTime
     */
    public function getShipDate()
    {
        return $this->container['shipDate'];
    }

    /**
     * Sets shipDate
     *
     * @param \DateTime $shipDate The shipping date for the package. Must be in ISO-8601 date/time format.
     *
     * @return $this
     */
    public function setShipDate($shipDate)
    {
        $this->container['shipDate'] = $shipDate;

        return $this;
    }

    /**
     * Gets shipFromSupplySourceId
     *
     * @return string
     */
    public function getShipFromSupplySourceId()
    {
        return $this->container['shipFromSupplySourceId'];
    }

    /**
     * Sets shipFromSupplySourceId
     *
     * @param string $shipFromSupplySourceId The unique identifier of the supply source.
     *
     * @return $this
     */
    public function setShipFromSupplySourceId($shipFromSupplySourceId)
    {
        $this->container['shipFromSupplySourceId'] = $shipFromSupplySourceId;

        return $this;
    }

    /**
     * Gets orderItems
     *
     * @return \SellingPartnerApi\Model\OrdersV0\ConfirmShipmentOrderItemsList
     */
    public function getOrderItems()
    {
        return $this->container['orderItems'];
    }

    /**
     * Sets orderItems
     *
     * @param \SellingPartnerApi\Model\OrdersV0\ConfirmShipmentOrderItemsList $orderItems orderItems
     *
     * @return $this
     */
    public function setOrderItems($orderItems)
    {
        $this->container['orderItems'] = $orderItems;

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
