<?php
/**
 * Feed
 *
 * PHP version 5
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Feeds
 *
 * Effective **June 27, 2023**, the Selling Partner API for Feeds v2020-09-04 will no longer be available and all calls to it will fail. Integrations that rely on the Feeds API must migrate to [Feeds v2021-06-30](https://developer-docs.amazon.com/sp-api/docs/feeds-api-v2021-06-30-reference) to avoid service disruption.
 *
 * OpenAPI spec version: 2020-09-04
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.36
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\Feeds20200904;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;

/**
 * Feed Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Feed implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Feed';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'feedId' => 'string',
'feedType' => 'string',
'marketplaceIds' => 'string[]',
'createdTime' => '\DateTime',
'processingStatus' => 'string',
'processingStartTime' => '\DateTime',
'processingEndTime' => '\DateTime',
'resultFeedDocumentId' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'feedId' => null,
'feedType' => null,
'marketplaceIds' => null,
'createdTime' => 'date-time',
'processingStatus' => null,
'processingStartTime' => 'date-time',
'processingEndTime' => 'date-time',
'resultFeedDocumentId' => null    ];

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
        'feedId' => 'feedId',
'feedType' => 'feedType',
'marketplaceIds' => 'marketplaceIds',
'createdTime' => 'createdTime',
'processingStatus' => 'processingStatus',
'processingStartTime' => 'processingStartTime',
'processingEndTime' => 'processingEndTime',
'resultFeedDocumentId' => 'resultFeedDocumentId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'feedId' => 'setFeedId',
'feedType' => 'setFeedType',
'marketplaceIds' => 'setMarketplaceIds',
'createdTime' => 'setCreatedTime',
'processingStatus' => 'setProcessingStatus',
'processingStartTime' => 'setProcessingStartTime',
'processingEndTime' => 'setProcessingEndTime',
'resultFeedDocumentId' => 'setResultFeedDocumentId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'feedId' => 'getFeedId',
'feedType' => 'getFeedType',
'marketplaceIds' => 'getMarketplaceIds',
'createdTime' => 'getCreatedTime',
'processingStatus' => 'getProcessingStatus',
'processingStartTime' => 'getProcessingStartTime',
'processingEndTime' => 'getProcessingEndTime',
'resultFeedDocumentId' => 'getResultFeedDocumentId'    ];

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

    const PROCESSING_STATUS_CANCELLED = 'CANCELLED';
const PROCESSING_STATUS_DONE = 'DONE';
const PROCESSING_STATUS_FATAL = 'FATAL';
const PROCESSING_STATUS_IN_PROGRESS = 'IN_PROGRESS';
const PROCESSING_STATUS_IN_QUEUE = 'IN_QUEUE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProcessingStatusAllowableValues()
    {
        return [
            self::PROCESSING_STATUS_CANCELLED,
self::PROCESSING_STATUS_DONE,
self::PROCESSING_STATUS_FATAL,
self::PROCESSING_STATUS_IN_PROGRESS,
self::PROCESSING_STATUS_IN_QUEUE,        ];
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
        $this->container['feedId'] = isset($data['feedId']) ? $data['feedId'] : null;
        $this->container['feedType'] = isset($data['feedType']) ? $data['feedType'] : null;
        $this->container['marketplaceIds'] = isset($data['marketplaceIds']) ? $data['marketplaceIds'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['processingStatus'] = isset($data['processingStatus']) ? $data['processingStatus'] : null;
        $this->container['processingStartTime'] = isset($data['processingStartTime']) ? $data['processingStartTime'] : null;
        $this->container['processingEndTime'] = isset($data['processingEndTime']) ? $data['processingEndTime'] : null;
        $this->container['resultFeedDocumentId'] = isset($data['resultFeedDocumentId']) ? $data['resultFeedDocumentId'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['feedId'] === null) {
            $invalidProperties[] = "'feedId' can't be null";
        }
        if ($this->container['feedType'] === null) {
            $invalidProperties[] = "'feedType' can't be null";
        }
        if ($this->container['createdTime'] === null) {
            $invalidProperties[] = "'createdTime' can't be null";
        }
        if ($this->container['processingStatus'] === null) {
            $invalidProperties[] = "'processingStatus' can't be null";
        }
        $allowedValues = $this->getProcessingStatusAllowableValues();
        if (!is_null($this->container['processingStatus']) && !in_array($this->container['processingStatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'processingStatus', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets feedId
     *
     * @return string
     */
    public function getFeedId()
    {
        return $this->container['feedId'];
    }

    /**
     * Sets feedId
     *
     * @param string $feedId The identifier for the feed. This identifier is unique only in combination with a seller ID.
     *
     * @return $this
     */
    public function setFeedId($feedId)
    {
        $this->container['feedId'] = $feedId;

        return $this;
    }

    /**
     * Gets feedType
     *
     * @return string
     */
    public function getFeedType()
    {
        return $this->container['feedType'];
    }

    /**
     * Sets feedType
     *
     * @param string $feedType The feed type.
     *
     * @return $this
     */
    public function setFeedType($feedType)
    {
        $this->container['feedType'] = $feedType;

        return $this;
    }

    /**
     * Gets marketplaceIds
     *
     * @return string[]
     */
    public function getMarketplaceIds()
    {
        return $this->container['marketplaceIds'];
    }

    /**
     * Sets marketplaceIds
     *
     * @param string[] $marketplaceIds A list of identifiers for the marketplaces that the feed is applied to.
     *
     * @return $this
     */
    public function setMarketplaceIds($marketplaceIds)
    {
        $this->container['marketplaceIds'] = $marketplaceIds;

        return $this;
    }

    /**
     * Gets createdTime
     *
     * @return \DateTime
     */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
     * Sets createdTime
     *
     * @param \DateTime $createdTime The date and time when the feed was created, in ISO 8601 date time format.
     *
     * @return $this
     */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;

        return $this;
    }

    /**
     * Gets processingStatus
     *
     * @return string
     */
    public function getProcessingStatus()
    {
        return $this->container['processingStatus'];
    }

    /**
     * Sets processingStatus
     *
     * @param string $processingStatus The processing status of the feed.
     *
     * @return $this
     */
    public function setProcessingStatus($processingStatus)
    {
        $allowedValues = $this->getProcessingStatusAllowableValues();
        if (!in_array($processingStatus, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'processingStatus', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['processingStatus'] = $processingStatus;

        return $this;
    }

    /**
     * Gets processingStartTime
     *
     * @return \DateTime
     */
    public function getProcessingStartTime()
    {
        return $this->container['processingStartTime'];
    }

    /**
     * Sets processingStartTime
     *
     * @param \DateTime $processingStartTime The date and time when feed processing started, in ISO 8601 date time format.
     *
     * @return $this
     */
    public function setProcessingStartTime($processingStartTime)
    {
        $this->container['processingStartTime'] = $processingStartTime;

        return $this;
    }

    /**
     * Gets processingEndTime
     *
     * @return \DateTime
     */
    public function getProcessingEndTime()
    {
        return $this->container['processingEndTime'];
    }

    /**
     * Sets processingEndTime
     *
     * @param \DateTime $processingEndTime The date and time when feed processing completed, in ISO 8601 date time format.
     *
     * @return $this
     */
    public function setProcessingEndTime($processingEndTime)
    {
        $this->container['processingEndTime'] = $processingEndTime;

        return $this;
    }

    /**
     * Gets resultFeedDocumentId
     *
     * @return string
     */
    public function getResultFeedDocumentId()
    {
        return $this->container['resultFeedDocumentId'];
    }

    /**
     * Sets resultFeedDocumentId
     *
     * @param string $resultFeedDocumentId The identifier for the feed document. This identifier is unique only in combination with a seller ID.
     *
     * @return $this
     */
    public function setResultFeedDocumentId($resultFeedDocumentId)
    {
        $this->container['resultFeedDocumentId'] = $resultFeedDocumentId;

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