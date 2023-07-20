<?php
/**
 * MarketplaceTaxInfo
 *
 * PHP version 5
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Shipment Invoicing
 *
 * The Selling Partner API for Shipment Invoicing helps you programmatically retrieve shipment invoice information in the Brazil marketplace for a selling partner’s Fulfillment by Amazon (FBA) orders.
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

namespace SellingPartnerApi\Model\ShipmentInvoicingV0;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;

/**
 * MarketplaceTaxInfo Class Doc Comment
 *
 * @category Class
 * @description Tax information about the marketplace.
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MarketplaceTaxInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MarketplaceTaxInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'companyLegalName' => 'string',
'taxingRegion' => 'string',
'taxClassifications' => '\SellingPartnerApi\Model\ShipmentInvoicingV0\TaxClassificationList'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'companyLegalName' => null,
'taxingRegion' => null,
'taxClassifications' => null    ];

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
        'companyLegalName' => 'CompanyLegalName',
'taxingRegion' => 'TaxingRegion',
'taxClassifications' => 'TaxClassifications'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'companyLegalName' => 'setCompanyLegalName',
'taxingRegion' => 'setTaxingRegion',
'taxClassifications' => 'setTaxClassifications'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'companyLegalName' => 'getCompanyLegalName',
'taxingRegion' => 'getTaxingRegion',
'taxClassifications' => 'getTaxClassifications'    ];

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
        $this->container['companyLegalName'] = isset($data['companyLegalName']) ? $data['companyLegalName'] : null;
        $this->container['taxingRegion'] = isset($data['taxingRegion']) ? $data['taxingRegion'] : null;
        $this->container['taxClassifications'] = isset($data['taxClassifications']) ? $data['taxClassifications'] : null;
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
     * Gets companyLegalName
     *
     * @return string
     */
    public function getCompanyLegalName()
    {
        return $this->container['companyLegalName'];
    }

    /**
     * Sets companyLegalName
     *
     * @param string $companyLegalName The legal name of the company.
     *
     * @return $this
     */
    public function setCompanyLegalName($companyLegalName)
    {
        $this->container['companyLegalName'] = $companyLegalName;

        return $this;
    }

    /**
     * Gets taxingRegion
     *
     * @return string
     */
    public function getTaxingRegion()
    {
        return $this->container['taxingRegion'];
    }

    /**
     * Sets taxingRegion
     *
     * @param string $taxingRegion The country or region imposing the tax.
     *
     * @return $this
     */
    public function setTaxingRegion($taxingRegion)
    {
        $this->container['taxingRegion'] = $taxingRegion;

        return $this;
    }

    /**
     * Gets taxClassifications
     *
     * @return \SellingPartnerApi\Model\ShipmentInvoicingV0\TaxClassificationList
     */
    public function getTaxClassifications()
    {
        return $this->container['taxClassifications'];
    }

    /**
     * Sets taxClassifications
     *
     * @param \SellingPartnerApi\Model\ShipmentInvoicingV0\TaxClassificationList $taxClassifications taxClassifications
     *
     * @return $this
     */
    public function setTaxClassifications($taxClassifications)
    {
        $this->container['taxClassifications'] = $taxClassifications;

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
