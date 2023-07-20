<?php
/**
 * ShipmentStatus
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
use \SellingPartnerApi\ObjectSerializer;

/**
 * ShipmentStatus Class Doc Comment
 *
 * @category Class
 * @description The shipment status to apply.
 * @package  SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShipmentStatus
{
    /**
     * Possible values of this enum
     */
    const READY_FOR_PICKUP = 'ReadyForPickup';
const PICKED_UP = 'PickedUp';
const REFUSED_PICKUP = 'RefusedPickup';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::READY_FOR_PICKUP,
self::PICKED_UP,
self::REFUSED_PICKUP,        ];
    }
}
