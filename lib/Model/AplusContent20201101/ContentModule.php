<?php
/**
 * ContentModule
 *
 * PHP version 5
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for A+ Content Management
 *
 * With the A+ Content API, you can build applications that help selling partners add rich marketing content to their Amazon product detail pages. A+ content helps selling partners share their brand and product story, which helps buyers make informed purchasing decisions. Selling partners assemble content by choosing from content modules and adding images and text.
 *
 * OpenAPI spec version: 2020-11-01
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.36
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\AplusContent20201101;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;

/**
 * ContentModule Class Doc Comment
 *
 * @category Class
 * @description An A+ Content module. An A+ Content document is composed of content modules. The contentModuleType property selects which content module types to use.
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContentModule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ContentModule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'contentModuleType' => '\SellingPartnerApi\Model\AplusContent20201101\ContentModuleType',
'standardCompanyLogo' => '\SellingPartnerApi\Model\AplusContent20201101\StandardCompanyLogoModule',
'standardComparisonTable' => '\SellingPartnerApi\Model\AplusContent20201101\StandardComparisonTableModule',
'standardFourImageText' => '\SellingPartnerApi\Model\AplusContent20201101\StandardFourImageTextModule',
'standardFourImageTextQuadrant' => '\SellingPartnerApi\Model\AplusContent20201101\StandardFourImageTextQuadrantModule',
'standardHeaderImageText' => '\SellingPartnerApi\Model\AplusContent20201101\StandardHeaderImageTextModule',
'standardImageSidebar' => '\SellingPartnerApi\Model\AplusContent20201101\StandardImageSidebarModule',
'standardImageTextOverlay' => '\SellingPartnerApi\Model\AplusContent20201101\StandardImageTextOverlayModule',
'standardMultipleImageText' => '\SellingPartnerApi\Model\AplusContent20201101\StandardMultipleImageTextModule',
'standardProductDescription' => '\SellingPartnerApi\Model\AplusContent20201101\StandardProductDescriptionModule',
'standardSingleImageHighlights' => '\SellingPartnerApi\Model\AplusContent20201101\StandardSingleImageHighlightsModule',
'standardSingleImageSpecsDetail' => '\SellingPartnerApi\Model\AplusContent20201101\StandardSingleImageSpecsDetailModule',
'standardSingleSideImage' => '\SellingPartnerApi\Model\AplusContent20201101\StandardSingleSideImageModule',
'standardTechSpecs' => '\SellingPartnerApi\Model\AplusContent20201101\StandardTechSpecsModule',
'standardText' => '\SellingPartnerApi\Model\AplusContent20201101\StandardTextModule',
'standardThreeImageText' => '\SellingPartnerApi\Model\AplusContent20201101\StandardThreeImageTextModule'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'contentModuleType' => null,
'standardCompanyLogo' => null,
'standardComparisonTable' => null,
'standardFourImageText' => null,
'standardFourImageTextQuadrant' => null,
'standardHeaderImageText' => null,
'standardImageSidebar' => null,
'standardImageTextOverlay' => null,
'standardMultipleImageText' => null,
'standardProductDescription' => null,
'standardSingleImageHighlights' => null,
'standardSingleImageSpecsDetail' => null,
'standardSingleSideImage' => null,
'standardTechSpecs' => null,
'standardText' => null,
'standardThreeImageText' => null    ];

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
        'contentModuleType' => 'contentModuleType',
'standardCompanyLogo' => 'standardCompanyLogo',
'standardComparisonTable' => 'standardComparisonTable',
'standardFourImageText' => 'standardFourImageText',
'standardFourImageTextQuadrant' => 'standardFourImageTextQuadrant',
'standardHeaderImageText' => 'standardHeaderImageText',
'standardImageSidebar' => 'standardImageSidebar',
'standardImageTextOverlay' => 'standardImageTextOverlay',
'standardMultipleImageText' => 'standardMultipleImageText',
'standardProductDescription' => 'standardProductDescription',
'standardSingleImageHighlights' => 'standardSingleImageHighlights',
'standardSingleImageSpecsDetail' => 'standardSingleImageSpecsDetail',
'standardSingleSideImage' => 'standardSingleSideImage',
'standardTechSpecs' => 'standardTechSpecs',
'standardText' => 'standardText',
'standardThreeImageText' => 'standardThreeImageText'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contentModuleType' => 'setContentModuleType',
'standardCompanyLogo' => 'setStandardCompanyLogo',
'standardComparisonTable' => 'setStandardComparisonTable',
'standardFourImageText' => 'setStandardFourImageText',
'standardFourImageTextQuadrant' => 'setStandardFourImageTextQuadrant',
'standardHeaderImageText' => 'setStandardHeaderImageText',
'standardImageSidebar' => 'setStandardImageSidebar',
'standardImageTextOverlay' => 'setStandardImageTextOverlay',
'standardMultipleImageText' => 'setStandardMultipleImageText',
'standardProductDescription' => 'setStandardProductDescription',
'standardSingleImageHighlights' => 'setStandardSingleImageHighlights',
'standardSingleImageSpecsDetail' => 'setStandardSingleImageSpecsDetail',
'standardSingleSideImage' => 'setStandardSingleSideImage',
'standardTechSpecs' => 'setStandardTechSpecs',
'standardText' => 'setStandardText',
'standardThreeImageText' => 'setStandardThreeImageText'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contentModuleType' => 'getContentModuleType',
'standardCompanyLogo' => 'getStandardCompanyLogo',
'standardComparisonTable' => 'getStandardComparisonTable',
'standardFourImageText' => 'getStandardFourImageText',
'standardFourImageTextQuadrant' => 'getStandardFourImageTextQuadrant',
'standardHeaderImageText' => 'getStandardHeaderImageText',
'standardImageSidebar' => 'getStandardImageSidebar',
'standardImageTextOverlay' => 'getStandardImageTextOverlay',
'standardMultipleImageText' => 'getStandardMultipleImageText',
'standardProductDescription' => 'getStandardProductDescription',
'standardSingleImageHighlights' => 'getStandardSingleImageHighlights',
'standardSingleImageSpecsDetail' => 'getStandardSingleImageSpecsDetail',
'standardSingleSideImage' => 'getStandardSingleSideImage',
'standardTechSpecs' => 'getStandardTechSpecs',
'standardText' => 'getStandardText',
'standardThreeImageText' => 'getStandardThreeImageText'    ];

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
        $this->container['contentModuleType'] = isset($data['contentModuleType']) ? $data['contentModuleType'] : null;
        $this->container['standardCompanyLogo'] = isset($data['standardCompanyLogo']) ? $data['standardCompanyLogo'] : null;
        $this->container['standardComparisonTable'] = isset($data['standardComparisonTable']) ? $data['standardComparisonTable'] : null;
        $this->container['standardFourImageText'] = isset($data['standardFourImageText']) ? $data['standardFourImageText'] : null;
        $this->container['standardFourImageTextQuadrant'] = isset($data['standardFourImageTextQuadrant']) ? $data['standardFourImageTextQuadrant'] : null;
        $this->container['standardHeaderImageText'] = isset($data['standardHeaderImageText']) ? $data['standardHeaderImageText'] : null;
        $this->container['standardImageSidebar'] = isset($data['standardImageSidebar']) ? $data['standardImageSidebar'] : null;
        $this->container['standardImageTextOverlay'] = isset($data['standardImageTextOverlay']) ? $data['standardImageTextOverlay'] : null;
        $this->container['standardMultipleImageText'] = isset($data['standardMultipleImageText']) ? $data['standardMultipleImageText'] : null;
        $this->container['standardProductDescription'] = isset($data['standardProductDescription']) ? $data['standardProductDescription'] : null;
        $this->container['standardSingleImageHighlights'] = isset($data['standardSingleImageHighlights']) ? $data['standardSingleImageHighlights'] : null;
        $this->container['standardSingleImageSpecsDetail'] = isset($data['standardSingleImageSpecsDetail']) ? $data['standardSingleImageSpecsDetail'] : null;
        $this->container['standardSingleSideImage'] = isset($data['standardSingleSideImage']) ? $data['standardSingleSideImage'] : null;
        $this->container['standardTechSpecs'] = isset($data['standardTechSpecs']) ? $data['standardTechSpecs'] : null;
        $this->container['standardText'] = isset($data['standardText']) ? $data['standardText'] : null;
        $this->container['standardThreeImageText'] = isset($data['standardThreeImageText']) ? $data['standardThreeImageText'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['contentModuleType'] === null) {
            $invalidProperties[] = "'contentModuleType' can't be null";
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
     * Gets contentModuleType
     *
     * @return \SellingPartnerApi\Model\AplusContent20201101\ContentModuleType
     */
    public function getContentModuleType()
    {
        return $this->container['contentModuleType'];
    }

    /**
     * Sets contentModuleType
     *
     * @param \SellingPartnerApi\Model\AplusContent20201101\ContentModuleType $contentModuleType contentModuleType
     *
     * @return $this
     */
    public function setContentModuleType($contentModuleType)
    {
        $this->container['contentModuleType'] = $contentModuleType;

        return $this;
    }

    /**
     * Gets standardCompanyLogo
     *
     * @return \SellingPartnerApi\Model\AplusContent20201101\StandardCompanyLogoModule
     */
    public function getStandardCompanyLogo()
    {
        return $this->container['standardCompanyLogo'];
    }

    /**
     * Sets standardCompanyLogo
     *
     * @param \SellingPartnerApi\Model\AplusContent20201101\StandardCompanyLogoModule $standardCompanyLogo standardCompanyLogo
     *
     * @return $this
     */
    public function setStandardCompanyLogo($standardCompanyLogo)
    {
        $this->container['standardCompanyLogo'] = $standardCompanyLogo;

        return $this;
    }

    /**
     * Gets standardComparisonTable
     *
     * @return \SellingPartnerApi\Model\AplusContent20201101\StandardComparisonTableModule
     */
    public function getStandardComparisonTable()
    {
        return $this->container['standardComparisonTable'];
    }

    /**
     * Sets standardComparisonTable
     *
     * @param \SellingPartnerApi\Model\AplusContent20201101\StandardComparisonTableModule $standardComparisonTable standardComparisonTable
     *
     * @return $this
     */
    public function setStandardComparisonTable($standardComparisonTable)
    {
        $this->container['standardComparisonTable'] = $standardComparisonTable;

        return $this;
    }

    /**
     * Gets standardFourImageText
     *
     * @return \SellingPartnerApi\Model\AplusContent20201101\StandardFourImageTextModule
     */
    public function getStandardFourImageText()
    {
        return $this->container['standardFourImageText'];
    }

    /**
     * Sets standardFourImageText
     *
     * @param \SellingPartnerApi\Model\AplusContent20201101\StandardFourImageTextModule $standardFourImageText standardFourImageText
     *
     * @return $this
     */
    public function setStandardFourImageText($standardFourImageText)
    {
        $this->container['standardFourImageText'] = $standardFourImageText;

        return $this;
    }

    /**
     * Gets standardFourImageTextQuadrant
     *
     * @return \SellingPartnerApi\Model\AplusContent20201101\StandardFourImageTextQuadrantModule
     */
    public function getStandardFourImageTextQuadrant()
    {
        return $this->container['standardFourImageTextQuadrant'];
    }

    /**
     * Sets standardFourImageTextQuadrant
     *
     * @param \SellingPartnerApi\Model\AplusContent20201101\StandardFourImageTextQuadrantModule $standardFourImageTextQuadrant standardFourImageTextQuadrant
     *
     * @return $this
     */
    public function setStandardFourImageTextQuadrant($standardFourImageTextQuadrant)
    {
        $this->container['standardFourImageTextQuadrant'] = $standardFourImageTextQuadrant;

        return $this;
    }

    /**
     * Gets standardHeaderImageText
     *
     * @return \SellingPartnerApi\Model\AplusContent20201101\StandardHeaderImageTextModule
     */
    public function getStandardHeaderImageText()
    {
        return $this->container['standardHeaderImageText'];
    }

    /**
     * Sets standardHeaderImageText
     *
     * @param \SellingPartnerApi\Model\AplusContent20201101\StandardHeaderImageTextModule $standardHeaderImageText standardHeaderImageText
     *
     * @return $this
     */
    public function setStandardHeaderImageText($standardHeaderImageText)
    {
        $this->container['standardHeaderImageText'] = $standardHeaderImageText;

        return $this;
    }

    /**
     * Gets standardImageSidebar
     *
     * @return \SellingPartnerApi\Model\AplusContent20201101\StandardImageSidebarModule
     */
    public function getStandardImageSidebar()
    {
        return $this->container['standardImageSidebar'];
    }

    /**
     * Sets standardImageSidebar
     *
     * @param \SellingPartnerApi\Model\AplusContent20201101\StandardImageSidebarModule $standardImageSidebar standardImageSidebar
     *
     * @return $this
     */
    public function setStandardImageSidebar($standardImageSidebar)
    {
        $this->container['standardImageSidebar'] = $standardImageSidebar;

        return $this;
    }

    /**
     * Gets standardImageTextOverlay
     *
     * @return \SellingPartnerApi\Model\AplusContent20201101\StandardImageTextOverlayModule
     */
    public function getStandardImageTextOverlay()
    {
        return $this->container['standardImageTextOverlay'];
    }

    /**
     * Sets standardImageTextOverlay
     *
     * @param \SellingPartnerApi\Model\AplusContent20201101\StandardImageTextOverlayModule $standardImageTextOverlay standardImageTextOverlay
     *
     * @return $this
     */
    public function setStandardImageTextOverlay($standardImageTextOverlay)
    {
        $this->container['standardImageTextOverlay'] = $standardImageTextOverlay;

        return $this;
    }

    /**
     * Gets standardMultipleImageText
     *
     * @return \SellingPartnerApi\Model\AplusContent20201101\StandardMultipleImageTextModule
     */
    public function getStandardMultipleImageText()
    {
        return $this->container['standardMultipleImageText'];
    }

    /**
     * Sets standardMultipleImageText
     *
     * @param \SellingPartnerApi\Model\AplusContent20201101\StandardMultipleImageTextModule $standardMultipleImageText standardMultipleImageText
     *
     * @return $this
     */
    public function setStandardMultipleImageText($standardMultipleImageText)
    {
        $this->container['standardMultipleImageText'] = $standardMultipleImageText;

        return $this;
    }

    /**
     * Gets standardProductDescription
     *
     * @return \SellingPartnerApi\Model\AplusContent20201101\StandardProductDescriptionModule
     */
    public function getStandardProductDescription()
    {
        return $this->container['standardProductDescription'];
    }

    /**
     * Sets standardProductDescription
     *
     * @param \SellingPartnerApi\Model\AplusContent20201101\StandardProductDescriptionModule $standardProductDescription standardProductDescription
     *
     * @return $this
     */
    public function setStandardProductDescription($standardProductDescription)
    {
        $this->container['standardProductDescription'] = $standardProductDescription;

        return $this;
    }

    /**
     * Gets standardSingleImageHighlights
     *
     * @return \SellingPartnerApi\Model\AplusContent20201101\StandardSingleImageHighlightsModule
     */
    public function getStandardSingleImageHighlights()
    {
        return $this->container['standardSingleImageHighlights'];
    }

    /**
     * Sets standardSingleImageHighlights
     *
     * @param \SellingPartnerApi\Model\AplusContent20201101\StandardSingleImageHighlightsModule $standardSingleImageHighlights standardSingleImageHighlights
     *
     * @return $this
     */
    public function setStandardSingleImageHighlights($standardSingleImageHighlights)
    {
        $this->container['standardSingleImageHighlights'] = $standardSingleImageHighlights;

        return $this;
    }

    /**
     * Gets standardSingleImageSpecsDetail
     *
     * @return \SellingPartnerApi\Model\AplusContent20201101\StandardSingleImageSpecsDetailModule
     */
    public function getStandardSingleImageSpecsDetail()
    {
        return $this->container['standardSingleImageSpecsDetail'];
    }

    /**
     * Sets standardSingleImageSpecsDetail
     *
     * @param \SellingPartnerApi\Model\AplusContent20201101\StandardSingleImageSpecsDetailModule $standardSingleImageSpecsDetail standardSingleImageSpecsDetail
     *
     * @return $this
     */
    public function setStandardSingleImageSpecsDetail($standardSingleImageSpecsDetail)
    {
        $this->container['standardSingleImageSpecsDetail'] = $standardSingleImageSpecsDetail;

        return $this;
    }

    /**
     * Gets standardSingleSideImage
     *
     * @return \SellingPartnerApi\Model\AplusContent20201101\StandardSingleSideImageModule
     */
    public function getStandardSingleSideImage()
    {
        return $this->container['standardSingleSideImage'];
    }

    /**
     * Sets standardSingleSideImage
     *
     * @param \SellingPartnerApi\Model\AplusContent20201101\StandardSingleSideImageModule $standardSingleSideImage standardSingleSideImage
     *
     * @return $this
     */
    public function setStandardSingleSideImage($standardSingleSideImage)
    {
        $this->container['standardSingleSideImage'] = $standardSingleSideImage;

        return $this;
    }

    /**
     * Gets standardTechSpecs
     *
     * @return \SellingPartnerApi\Model\AplusContent20201101\StandardTechSpecsModule
     */
    public function getStandardTechSpecs()
    {
        return $this->container['standardTechSpecs'];
    }

    /**
     * Sets standardTechSpecs
     *
     * @param \SellingPartnerApi\Model\AplusContent20201101\StandardTechSpecsModule $standardTechSpecs standardTechSpecs
     *
     * @return $this
     */
    public function setStandardTechSpecs($standardTechSpecs)
    {
        $this->container['standardTechSpecs'] = $standardTechSpecs;

        return $this;
    }

    /**
     * Gets standardText
     *
     * @return \SellingPartnerApi\Model\AplusContent20201101\StandardTextModule
     */
    public function getStandardText()
    {
        return $this->container['standardText'];
    }

    /**
     * Sets standardText
     *
     * @param \SellingPartnerApi\Model\AplusContent20201101\StandardTextModule $standardText standardText
     *
     * @return $this
     */
    public function setStandardText($standardText)
    {
        $this->container['standardText'] = $standardText;

        return $this;
    }

    /**
     * Gets standardThreeImageText
     *
     * @return \SellingPartnerApi\Model\AplusContent20201101\StandardThreeImageTextModule
     */
    public function getStandardThreeImageText()
    {
        return $this->container['standardThreeImageText'];
    }

    /**
     * Sets standardThreeImageText
     *
     * @param \SellingPartnerApi\Model\AplusContent20201101\StandardThreeImageTextModule $standardThreeImageText standardThreeImageText
     *
     * @return $this
     */
    public function setStandardThreeImageText($standardThreeImageText)
    {
        $this->container['standardThreeImageText'] = $standardThreeImageText;

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
