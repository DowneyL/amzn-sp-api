<?php
/**
 * Address
 *
 * PHP version 5
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Shipping
 *
 * Provides programmatic access to Amazon Shipping APIs.   **Note:** If you are new to the Amazon Shipping API, refer to the latest version of <a href=\"https://developer-docs.amazon.com/amazon-shipping/docs/shipping-api-v2-reference\">Amazon Shipping API (v2)</a> on the <a href=\"https://developer-docs.amazon.com/amazon-shipping/\">Amazon Shipping Developer Documentation</a> site.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.36
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\Shipping;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;

/**
 * Address Class Doc Comment
 *
 * @category Class
 * @description The address.
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Address implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
'addressLine1' => 'string',
'addressLine2' => 'string',
'addressLine3' => 'string',
'stateOrRegion' => '\SellingPartnerApi\Model\Shipping\StateOrRegion',
'city' => '\SellingPartnerApi\Model\Shipping\City',
'countryCode' => '\SellingPartnerApi\Model\Shipping\CountryCode',
'postalCode' => '\SellingPartnerApi\Model\Shipping\PostalCode',
'email' => 'string',
'copyEmails' => 'string[]',
'phoneNumber' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
'addressLine1' => null,
'addressLine2' => null,
'addressLine3' => null,
'stateOrRegion' => null,
'city' => null,
'countryCode' => null,
'postalCode' => null,
'email' => null,
'copyEmails' => null,
'phoneNumber' => null    ];

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
        'name' => 'name',
'addressLine1' => 'addressLine1',
'addressLine2' => 'addressLine2',
'addressLine3' => 'addressLine3',
'stateOrRegion' => 'stateOrRegion',
'city' => 'city',
'countryCode' => 'countryCode',
'postalCode' => 'postalCode',
'email' => 'email',
'copyEmails' => 'copyEmails',
'phoneNumber' => 'phoneNumber'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
'addressLine1' => 'setAddressLine1',
'addressLine2' => 'setAddressLine2',
'addressLine3' => 'setAddressLine3',
'stateOrRegion' => 'setStateOrRegion',
'city' => 'setCity',
'countryCode' => 'setCountryCode',
'postalCode' => 'setPostalCode',
'email' => 'setEmail',
'copyEmails' => 'setCopyEmails',
'phoneNumber' => 'setPhoneNumber'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
'addressLine1' => 'getAddressLine1',
'addressLine2' => 'getAddressLine2',
'addressLine3' => 'getAddressLine3',
'stateOrRegion' => 'getStateOrRegion',
'city' => 'getCity',
'countryCode' => 'getCountryCode',
'postalCode' => 'getPostalCode',
'email' => 'getEmail',
'copyEmails' => 'getCopyEmails',
'phoneNumber' => 'getPhoneNumber'    ];

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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['addressLine1'] = isset($data['addressLine1']) ? $data['addressLine1'] : null;
        $this->container['addressLine2'] = isset($data['addressLine2']) ? $data['addressLine2'] : null;
        $this->container['addressLine3'] = isset($data['addressLine3']) ? $data['addressLine3'] : null;
        $this->container['stateOrRegion'] = isset($data['stateOrRegion']) ? $data['stateOrRegion'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['countryCode'] = isset($data['countryCode']) ? $data['countryCode'] : null;
        $this->container['postalCode'] = isset($data['postalCode']) ? $data['postalCode'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['copyEmails'] = isset($data['copyEmails']) ? $data['copyEmails'] : null;
        $this->container['phoneNumber'] = isset($data['phoneNumber']) ? $data['phoneNumber'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['addressLine1'] === null) {
            $invalidProperties[] = "'addressLine1' can't be null";
        }
        if ($this->container['stateOrRegion'] === null) {
            $invalidProperties[] = "'stateOrRegion' can't be null";
        }
        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ($this->container['countryCode'] === null) {
            $invalidProperties[] = "'countryCode' can't be null";
        }
        if ($this->container['postalCode'] === null) {
            $invalidProperties[] = "'postalCode' can't be null";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name of the person, business or institution at that address.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets addressLine1
     *
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->container['addressLine1'];
    }

    /**
     * Sets addressLine1
     *
     * @param string $addressLine1 First line of that address.
     *
     * @return $this
     */
    public function setAddressLine1($addressLine1)
    {
        $this->container['addressLine1'] = $addressLine1;

        return $this;
    }

    /**
     * Gets addressLine2
     *
     * @return string
     */
    public function getAddressLine2()
    {
        return $this->container['addressLine2'];
    }

    /**
     * Sets addressLine2
     *
     * @param string $addressLine2 Additional address information, if required.
     *
     * @return $this
     */
    public function setAddressLine2($addressLine2)
    {
        $this->container['addressLine2'] = $addressLine2;

        return $this;
    }

    /**
     * Gets addressLine3
     *
     * @return string
     */
    public function getAddressLine3()
    {
        return $this->container['addressLine3'];
    }

    /**
     * Sets addressLine3
     *
     * @param string $addressLine3 Additional address information, if required.
     *
     * @return $this
     */
    public function setAddressLine3($addressLine3)
    {
        $this->container['addressLine3'] = $addressLine3;

        return $this;
    }

    /**
     * Gets stateOrRegion
     *
     * @return \SellingPartnerApi\Model\Shipping\StateOrRegion
     */
    public function getStateOrRegion()
    {
        return $this->container['stateOrRegion'];
    }

    /**
     * Sets stateOrRegion
     *
     * @param \SellingPartnerApi\Model\Shipping\StateOrRegion $stateOrRegion stateOrRegion
     *
     * @return $this
     */
    public function setStateOrRegion($stateOrRegion)
    {
        $this->container['stateOrRegion'] = $stateOrRegion;

        return $this;
    }

    /**
     * Gets city
     *
     * @return \SellingPartnerApi\Model\Shipping\City
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param \SellingPartnerApi\Model\Shipping\City $city city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets countryCode
     *
     * @return \SellingPartnerApi\Model\Shipping\CountryCode
     */
    public function getCountryCode()
    {
        return $this->container['countryCode'];
    }

    /**
     * Sets countryCode
     *
     * @param \SellingPartnerApi\Model\Shipping\CountryCode $countryCode countryCode
     *
     * @return $this
     */
    public function setCountryCode($countryCode)
    {
        $this->container['countryCode'] = $countryCode;

        return $this;
    }

    /**
     * Gets postalCode
     *
     * @return \SellingPartnerApi\Model\Shipping\PostalCode
     */
    public function getPostalCode()
    {
        return $this->container['postalCode'];
    }

    /**
     * Sets postalCode
     *
     * @param \SellingPartnerApi\Model\Shipping\PostalCode $postalCode postalCode
     *
     * @return $this
     */
    public function setPostalCode($postalCode)
    {
        $this->container['postalCode'] = $postalCode;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email The email address of the contact associated with the address.
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets copyEmails
     *
     * @return string[]
     */
    public function getCopyEmails()
    {
        return $this->container['copyEmails'];
    }

    /**
     * Sets copyEmails
     *
     * @param string[] $copyEmails The email cc addresses of the contact associated with the address.
     *
     * @return $this
     */
    public function setCopyEmails($copyEmails)
    {
        $this->container['copyEmails'] = $copyEmails;

        return $this;
    }

    /**
     * Gets phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phoneNumber'];
    }

    /**
     * Sets phoneNumber
     *
     * @param string $phoneNumber The phone number of the person, business or institution located at that address.
     *
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->container['phoneNumber'] = $phoneNumber;

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
