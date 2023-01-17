<?php
/**
 * PickupLocationType
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * SIW API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * PickupLocationType Class Doc Comment
 *
 * @category Class
 * @description - UNKNOWN_PICKUP_LOCATION_TYPE: Location type is now known for some reason  - LOCKER: Locker location type. Example Instabox or a DHL locker  - STORE: Can be a merchant&#39;s store or any other store that handles logistics  - POSTOFFICE: Postal office  - MANNED: A manned service point
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PickupLocationType
{
    /**
     * Possible values of this enum
     */
    public const UNKNOWN_PICKUP_LOCATION_TYPE = 'UNKNOWN_PICKUP_LOCATION_TYPE';

    public const LOCKER = 'LOCKER';

    public const STORE = 'STORE';

    public const POSTOFFICE = 'POSTOFFICE';

    public const MANNED = 'MANNED';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN_PICKUP_LOCATION_TYPE,
            self::LOCKER,
            self::STORE,
            self::POSTOFFICE,
            self::MANNED
        ];
    }
}

