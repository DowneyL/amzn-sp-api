<?php
/**
 * Invoice
 *
 * PHP version 5
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Retail Procurement Payments
 *
 * The Selling Partner API for Retail Procurement Payments provides programmatic access to vendors payments data.
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

namespace SellingPartnerApi\Model\VendorInvoices;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;

/**
 * Invoice Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Invoice implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Invoice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'invoiceType' => 'string',
'id' => 'string',
'referenceNumber' => 'string',
'date' => '\SellingPartnerApi\Model\VendorInvoices\\DateTime',
'remitToParty' => '\SellingPartnerApi\Model\VendorInvoices\PartyIdentification',
'shipToParty' => '\SellingPartnerApi\Model\VendorInvoices\PartyIdentification',
'shipFromParty' => '\SellingPartnerApi\Model\VendorInvoices\PartyIdentification',
'billToParty' => '\SellingPartnerApi\Model\VendorInvoices\PartyIdentification',
'paymentTerms' => '\SellingPartnerApi\Model\VendorInvoices\PaymentTerms',
'invoiceTotal' => '\SellingPartnerApi\Model\VendorInvoices\Money',
'taxDetails' => '\SellingPartnerApi\Model\VendorInvoices\TaxDetails[]',
'additionalDetails' => '\SellingPartnerApi\Model\VendorInvoices\AdditionalDetails[]',
'chargeDetails' => '\SellingPartnerApi\Model\VendorInvoices\ChargeDetails[]',
'allowanceDetails' => '\SellingPartnerApi\Model\VendorInvoices\AllowanceDetails[]',
'items' => '\SellingPartnerApi\Model\VendorInvoices\InvoiceItem[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'invoiceType' => null,
'id' => null,
'referenceNumber' => null,
'date' => null,
'remitToParty' => null,
'shipToParty' => null,
'shipFromParty' => null,
'billToParty' => null,
'paymentTerms' => null,
'invoiceTotal' => null,
'taxDetails' => null,
'additionalDetails' => null,
'chargeDetails' => null,
'allowanceDetails' => null,
'items' => null    ];

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
        'invoiceType' => 'invoiceType',
'id' => 'id',
'referenceNumber' => 'referenceNumber',
'date' => 'date',
'remitToParty' => 'remitToParty',
'shipToParty' => 'shipToParty',
'shipFromParty' => 'shipFromParty',
'billToParty' => 'billToParty',
'paymentTerms' => 'paymentTerms',
'invoiceTotal' => 'invoiceTotal',
'taxDetails' => 'taxDetails',
'additionalDetails' => 'additionalDetails',
'chargeDetails' => 'chargeDetails',
'allowanceDetails' => 'allowanceDetails',
'items' => 'items'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'invoiceType' => 'setInvoiceType',
'id' => 'setId',
'referenceNumber' => 'setReferenceNumber',
'date' => 'setDate',
'remitToParty' => 'setRemitToParty',
'shipToParty' => 'setShipToParty',
'shipFromParty' => 'setShipFromParty',
'billToParty' => 'setBillToParty',
'paymentTerms' => 'setPaymentTerms',
'invoiceTotal' => 'setInvoiceTotal',
'taxDetails' => 'setTaxDetails',
'additionalDetails' => 'setAdditionalDetails',
'chargeDetails' => 'setChargeDetails',
'allowanceDetails' => 'setAllowanceDetails',
'items' => 'setItems'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'invoiceType' => 'getInvoiceType',
'id' => 'getId',
'referenceNumber' => 'getReferenceNumber',
'date' => 'getDate',
'remitToParty' => 'getRemitToParty',
'shipToParty' => 'getShipToParty',
'shipFromParty' => 'getShipFromParty',
'billToParty' => 'getBillToParty',
'paymentTerms' => 'getPaymentTerms',
'invoiceTotal' => 'getInvoiceTotal',
'taxDetails' => 'getTaxDetails',
'additionalDetails' => 'getAdditionalDetails',
'chargeDetails' => 'getChargeDetails',
'allowanceDetails' => 'getAllowanceDetails',
'items' => 'getItems'    ];

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

    const INVOICE_TYPE_INVOICE = 'Invoice';
const INVOICE_TYPE_CREDIT_NOTE = 'CreditNote';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInvoiceTypeAllowableValues()
    {
        return [
            self::INVOICE_TYPE_INVOICE,
self::INVOICE_TYPE_CREDIT_NOTE,        ];
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
        $this->container['invoiceType'] = isset($data['invoiceType']) ? $data['invoiceType'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['referenceNumber'] = isset($data['referenceNumber']) ? $data['referenceNumber'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['remitToParty'] = isset($data['remitToParty']) ? $data['remitToParty'] : null;
        $this->container['shipToParty'] = isset($data['shipToParty']) ? $data['shipToParty'] : null;
        $this->container['shipFromParty'] = isset($data['shipFromParty']) ? $data['shipFromParty'] : null;
        $this->container['billToParty'] = isset($data['billToParty']) ? $data['billToParty'] : null;
        $this->container['paymentTerms'] = isset($data['paymentTerms']) ? $data['paymentTerms'] : null;
        $this->container['invoiceTotal'] = isset($data['invoiceTotal']) ? $data['invoiceTotal'] : null;
        $this->container['taxDetails'] = isset($data['taxDetails']) ? $data['taxDetails'] : null;
        $this->container['additionalDetails'] = isset($data['additionalDetails']) ? $data['additionalDetails'] : null;
        $this->container['chargeDetails'] = isset($data['chargeDetails']) ? $data['chargeDetails'] : null;
        $this->container['allowanceDetails'] = isset($data['allowanceDetails']) ? $data['allowanceDetails'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['invoiceType'] === null) {
            $invalidProperties[] = "'invoiceType' can't be null";
        }
        $allowedValues = $this->getInvoiceTypeAllowableValues();
        if (!is_null($this->container['invoiceType']) && !in_array($this->container['invoiceType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'invoiceType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['remitToParty'] === null) {
            $invalidProperties[] = "'remitToParty' can't be null";
        }
        if ($this->container['invoiceTotal'] === null) {
            $invalidProperties[] = "'invoiceTotal' can't be null";
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
     * Gets invoiceType
     *
     * @return string
     */
    public function getInvoiceType()
    {
        return $this->container['invoiceType'];
    }

    /**
     * Sets invoiceType
     *
     * @param string $invoiceType Identifies the type of invoice.
     *
     * @return $this
     */
    public function setInvoiceType($invoiceType)
    {
        $allowedValues = $this->getInvoiceTypeAllowableValues();
        if (!in_array($invoiceType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'invoiceType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['invoiceType'] = $invoiceType;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Unique number relating to the charges defined in this document. This will be invoice number if the document type is Invoice or CreditNote number if the document type is Credit Note. Failure to provide this reference will result in a rejection.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets referenceNumber
     *
     * @return string
     */
    public function getReferenceNumber()
    {
        return $this->container['referenceNumber'];
    }

    /**
     * Sets referenceNumber
     *
     * @param string $referenceNumber An additional unique reference number used for regulatory or other purposes.
     *
     * @return $this
     */
    public function setReferenceNumber($referenceNumber)
    {
        $this->container['referenceNumber'] = $referenceNumber;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \SellingPartnerApi\Model\VendorInvoices\\DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \SellingPartnerApi\Model\VendorInvoices\\DateTime $date date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets remitToParty
     *
     * @return \SellingPartnerApi\Model\VendorInvoices\PartyIdentification
     */
    public function getRemitToParty()
    {
        return $this->container['remitToParty'];
    }

    /**
     * Sets remitToParty
     *
     * @param \SellingPartnerApi\Model\VendorInvoices\PartyIdentification $remitToParty remitToParty
     *
     * @return $this
     */
    public function setRemitToParty($remitToParty)
    {
        $this->container['remitToParty'] = $remitToParty;

        return $this;
    }

    /**
     * Gets shipToParty
     *
     * @return \SellingPartnerApi\Model\VendorInvoices\PartyIdentification
     */
    public function getShipToParty()
    {
        return $this->container['shipToParty'];
    }

    /**
     * Sets shipToParty
     *
     * @param \SellingPartnerApi\Model\VendorInvoices\PartyIdentification $shipToParty shipToParty
     *
     * @return $this
     */
    public function setShipToParty($shipToParty)
    {
        $this->container['shipToParty'] = $shipToParty;

        return $this;
    }

    /**
     * Gets shipFromParty
     *
     * @return \SellingPartnerApi\Model\VendorInvoices\PartyIdentification
     */
    public function getShipFromParty()
    {
        return $this->container['shipFromParty'];
    }

    /**
     * Sets shipFromParty
     *
     * @param \SellingPartnerApi\Model\VendorInvoices\PartyIdentification $shipFromParty shipFromParty
     *
     * @return $this
     */
    public function setShipFromParty($shipFromParty)
    {
        $this->container['shipFromParty'] = $shipFromParty;

        return $this;
    }

    /**
     * Gets billToParty
     *
     * @return \SellingPartnerApi\Model\VendorInvoices\PartyIdentification
     */
    public function getBillToParty()
    {
        return $this->container['billToParty'];
    }

    /**
     * Sets billToParty
     *
     * @param \SellingPartnerApi\Model\VendorInvoices\PartyIdentification $billToParty billToParty
     *
     * @return $this
     */
    public function setBillToParty($billToParty)
    {
        $this->container['billToParty'] = $billToParty;

        return $this;
    }

    /**
     * Gets paymentTerms
     *
     * @return \SellingPartnerApi\Model\VendorInvoices\PaymentTerms
     */
    public function getPaymentTerms()
    {
        return $this->container['paymentTerms'];
    }

    /**
     * Sets paymentTerms
     *
     * @param \SellingPartnerApi\Model\VendorInvoices\PaymentTerms $paymentTerms paymentTerms
     *
     * @return $this
     */
    public function setPaymentTerms($paymentTerms)
    {
        $this->container['paymentTerms'] = $paymentTerms;

        return $this;
    }

    /**
     * Gets invoiceTotal
     *
     * @return \SellingPartnerApi\Model\VendorInvoices\Money
     */
    public function getInvoiceTotal()
    {
        return $this->container['invoiceTotal'];
    }

    /**
     * Sets invoiceTotal
     *
     * @param \SellingPartnerApi\Model\VendorInvoices\Money $invoiceTotal invoiceTotal
     *
     * @return $this
     */
    public function setInvoiceTotal($invoiceTotal)
    {
        $this->container['invoiceTotal'] = $invoiceTotal;

        return $this;
    }

    /**
     * Gets taxDetails
     *
     * @return \SellingPartnerApi\Model\VendorInvoices\TaxDetails[]
     */
    public function getTaxDetails()
    {
        return $this->container['taxDetails'];
    }

    /**
     * Sets taxDetails
     *
     * @param \SellingPartnerApi\Model\VendorInvoices\TaxDetails[] $taxDetails Total tax amount details for all line items.
     *
     * @return $this
     */
    public function setTaxDetails($taxDetails)
    {
        $this->container['taxDetails'] = $taxDetails;

        return $this;
    }

    /**
     * Gets additionalDetails
     *
     * @return \SellingPartnerApi\Model\VendorInvoices\AdditionalDetails[]
     */
    public function getAdditionalDetails()
    {
        return $this->container['additionalDetails'];
    }

    /**
     * Sets additionalDetails
     *
     * @param \SellingPartnerApi\Model\VendorInvoices\AdditionalDetails[] $additionalDetails Additional details provided by the selling party, for tax related or other purposes.
     *
     * @return $this
     */
    public function setAdditionalDetails($additionalDetails)
    {
        $this->container['additionalDetails'] = $additionalDetails;

        return $this;
    }

    /**
     * Gets chargeDetails
     *
     * @return \SellingPartnerApi\Model\VendorInvoices\ChargeDetails[]
     */
    public function getChargeDetails()
    {
        return $this->container['chargeDetails'];
    }

    /**
     * Sets chargeDetails
     *
     * @param \SellingPartnerApi\Model\VendorInvoices\ChargeDetails[] $chargeDetails Total charge amount details for all line items.
     *
     * @return $this
     */
    public function setChargeDetails($chargeDetails)
    {
        $this->container['chargeDetails'] = $chargeDetails;

        return $this;
    }

    /**
     * Gets allowanceDetails
     *
     * @return \SellingPartnerApi\Model\VendorInvoices\AllowanceDetails[]
     */
    public function getAllowanceDetails()
    {
        return $this->container['allowanceDetails'];
    }

    /**
     * Sets allowanceDetails
     *
     * @param \SellingPartnerApi\Model\VendorInvoices\AllowanceDetails[] $allowanceDetails Total allowance amount details for all line items.
     *
     * @return $this
     */
    public function setAllowanceDetails($allowanceDetails)
    {
        $this->container['allowanceDetails'] = $allowanceDetails;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \SellingPartnerApi\Model\VendorInvoices\InvoiceItem[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \SellingPartnerApi\Model\VendorInvoices\InvoiceItem[] $items The list of invoice items.
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

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
