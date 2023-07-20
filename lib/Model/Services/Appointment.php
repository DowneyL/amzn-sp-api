<?php
/**
 * Appointment
 *
 * PHP version 5
 *
 * @category Class
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Services
 *
 * With the Services API, you can build applications that help service providers get and modify their service orders and manage their resources.
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

namespace SellingPartnerApi\Model\Services;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;

/**
 * Appointment Class Doc Comment
 *
 * @category Class
 * @description The details of an appointment.
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Appointment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Appointment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'appointmentId' => '\SellingPartnerApi\Model\Services\AppointmentId',
'appointmentStatus' => 'string',
'appointmentTime' => '\SellingPartnerApi\Model\Services\AppointmentTime',
'assignedTechnicians' => '\SellingPartnerApi\Model\Services\Technician[]',
'rescheduledAppointmentId' => '\SellingPartnerApi\Model\Services\AppointmentId',
'poa' => '\SellingPartnerApi\Model\Services\Poa'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'appointmentId' => null,
'appointmentStatus' => null,
'appointmentTime' => null,
'assignedTechnicians' => null,
'rescheduledAppointmentId' => null,
'poa' => null    ];

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
        'appointmentId' => 'appointmentId',
'appointmentStatus' => 'appointmentStatus',
'appointmentTime' => 'appointmentTime',
'assignedTechnicians' => 'assignedTechnicians',
'rescheduledAppointmentId' => 'rescheduledAppointmentId',
'poa' => 'poa'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'appointmentId' => 'setAppointmentId',
'appointmentStatus' => 'setAppointmentStatus',
'appointmentTime' => 'setAppointmentTime',
'assignedTechnicians' => 'setAssignedTechnicians',
'rescheduledAppointmentId' => 'setRescheduledAppointmentId',
'poa' => 'setPoa'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'appointmentId' => 'getAppointmentId',
'appointmentStatus' => 'getAppointmentStatus',
'appointmentTime' => 'getAppointmentTime',
'assignedTechnicians' => 'getAssignedTechnicians',
'rescheduledAppointmentId' => 'getRescheduledAppointmentId',
'poa' => 'getPoa'    ];

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

    const APPOINTMENT_STATUS_ACTIVE = 'ACTIVE';
const APPOINTMENT_STATUS_CANCELLED = 'CANCELLED';
const APPOINTMENT_STATUS_COMPLETED = 'COMPLETED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAppointmentStatusAllowableValues()
    {
        return [
            self::APPOINTMENT_STATUS_ACTIVE,
self::APPOINTMENT_STATUS_CANCELLED,
self::APPOINTMENT_STATUS_COMPLETED,        ];
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
        $this->container['appointmentId'] = isset($data['appointmentId']) ? $data['appointmentId'] : null;
        $this->container['appointmentStatus'] = isset($data['appointmentStatus']) ? $data['appointmentStatus'] : null;
        $this->container['appointmentTime'] = isset($data['appointmentTime']) ? $data['appointmentTime'] : null;
        $this->container['assignedTechnicians'] = isset($data['assignedTechnicians']) ? $data['assignedTechnicians'] : null;
        $this->container['rescheduledAppointmentId'] = isset($data['rescheduledAppointmentId']) ? $data['rescheduledAppointmentId'] : null;
        $this->container['poa'] = isset($data['poa']) ? $data['poa'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAppointmentStatusAllowableValues();
        if (!is_null($this->container['appointmentStatus']) && !in_array($this->container['appointmentStatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'appointmentStatus', must be one of '%s'",
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
     * Gets appointmentId
     *
     * @return \SellingPartnerApi\Model\Services\AppointmentId
     */
    public function getAppointmentId()
    {
        return $this->container['appointmentId'];
    }

    /**
     * Sets appointmentId
     *
     * @param \SellingPartnerApi\Model\Services\AppointmentId $appointmentId appointmentId
     *
     * @return $this
     */
    public function setAppointmentId($appointmentId)
    {
        $this->container['appointmentId'] = $appointmentId;

        return $this;
    }

    /**
     * Gets appointmentStatus
     *
     * @return string
     */
    public function getAppointmentStatus()
    {
        return $this->container['appointmentStatus'];
    }

    /**
     * Sets appointmentStatus
     *
     * @param string $appointmentStatus The status of the appointment.
     *
     * @return $this
     */
    public function setAppointmentStatus($appointmentStatus)
    {
        $allowedValues = $this->getAppointmentStatusAllowableValues();
        if (!is_null($appointmentStatus) && !in_array($appointmentStatus, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'appointmentStatus', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['appointmentStatus'] = $appointmentStatus;

        return $this;
    }

    /**
     * Gets appointmentTime
     *
     * @return \SellingPartnerApi\Model\Services\AppointmentTime
     */
    public function getAppointmentTime()
    {
        return $this->container['appointmentTime'];
    }

    /**
     * Sets appointmentTime
     *
     * @param \SellingPartnerApi\Model\Services\AppointmentTime $appointmentTime appointmentTime
     *
     * @return $this
     */
    public function setAppointmentTime($appointmentTime)
    {
        $this->container['appointmentTime'] = $appointmentTime;

        return $this;
    }

    /**
     * Gets assignedTechnicians
     *
     * @return \SellingPartnerApi\Model\Services\Technician[]
     */
    public function getAssignedTechnicians()
    {
        return $this->container['assignedTechnicians'];
    }

    /**
     * Sets assignedTechnicians
     *
     * @param \SellingPartnerApi\Model\Services\Technician[] $assignedTechnicians A list of technicians assigned to the service job.
     *
     * @return $this
     */
    public function setAssignedTechnicians($assignedTechnicians)
    {
        $this->container['assignedTechnicians'] = $assignedTechnicians;

        return $this;
    }

    /**
     * Gets rescheduledAppointmentId
     *
     * @return \SellingPartnerApi\Model\Services\AppointmentId
     */
    public function getRescheduledAppointmentId()
    {
        return $this->container['rescheduledAppointmentId'];
    }

    /**
     * Sets rescheduledAppointmentId
     *
     * @param \SellingPartnerApi\Model\Services\AppointmentId $rescheduledAppointmentId rescheduledAppointmentId
     *
     * @return $this
     */
    public function setRescheduledAppointmentId($rescheduledAppointmentId)
    {
        $this->container['rescheduledAppointmentId'] = $rescheduledAppointmentId;

        return $this;
    }

    /**
     * Gets poa
     *
     * @return \SellingPartnerApi\Model\Services\Poa
     */
    public function getPoa()
    {
        return $this->container['poa'];
    }

    /**
     * Sets poa
     *
     * @param \SellingPartnerApi\Model\Services\Poa $poa poa
     *
     * @return $this
     */
    public function setPoa($poa)
    {
        $this->container['poa'] = $poa;

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
