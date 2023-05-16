<?php
/**
 * InventoryLocationFull
 *
 * PHP version 5
 *
 * @category Class
 * @package  EBay\Inventory
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Inventory API
 *
 * The Inventory API is used to create and manage inventory, and then to publish and manage this inventory on an eBay marketplace. There are also methods in this API that will convert eligible, active eBay listings into the Inventory API model.
 *
 * OpenAPI spec version: 1.16.0
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.33
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace EBay\Inventory\Model;

use ArrayAccess;
use EBay\Inventory\ObjectSerializer;

/**
 * InventoryLocationFull Class Doc Comment
 *
 * @category Class
 * @description This type is used by the &lt;strong&gt;createInventoryLocation&lt;/strong&gt; call to provide details on the inventory location, including the location&#x27;s name, physical address, operating hours, special hours, phone number and other details of an inventory location.
 * @package  EBay\Inventory
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InventoryLocationFull implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'InventoryLocationFull';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes
        = [
            'location'                      => LocationDetails::class,
            'locationAdditionalInformation' => 'string',
            'locationInstructions'          => 'string',
            'locationTypes'                 => 'string[]',
            'locationWebUrl'                => 'string',
            'merchantLocationStatus'        => 'string',
            'name'                          => 'string',
            'operatingHours'                => '\EBay\Inventory\Model\OperatingHours[]',
            'phone'                         => 'string',
            'specialHours'                  => '\EBay\Inventory\Model\SpecialHours[]',
        ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats
        = [
            'location'                      => null,
            'locationAdditionalInformation' => null,
            'locationInstructions'          => null,
            'locationTypes'                 => null,
            'locationWebUrl'                => null,
            'merchantLocationStatus'        => null,
            'name'                          => null,
            'operatingHours'                => null,
            'phone'                         => null,
            'specialHours'                  => null,
        ];
    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap
        = [
            'location'                      => 'location',
            'locationAdditionalInformation' => 'locationAdditionalInformation',
            'locationInstructions'          => 'locationInstructions',
            'locationTypes'                 => 'locationTypes',
            'locationWebUrl'                => 'locationWebUrl',
            'merchantLocationStatus'        => 'merchantLocationStatus',
            'name'                          => 'name',
            'operatingHours'                => 'operatingHours',
            'phone'                         => 'phone',
            'specialHours'                  => 'specialHours',
        ];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters
        = [
            'location'                      => 'setLocation',
            'locationAdditionalInformation' => 'setLocationAdditionalInformation',
            'locationInstructions'          => 'setLocationInstructions',
            'locationTypes'                 => 'setLocationTypes',
            'locationWebUrl'                => 'setLocationWebUrl',
            'merchantLocationStatus'        => 'setMerchantLocationStatus',
            'name'                          => 'setName',
            'operatingHours'                => 'setOperatingHours',
            'phone'                         => 'setPhone',
            'specialHours'                  => 'setSpecialHours',
        ];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters
        = [
            'location'                      => 'getLocation',
            'locationAdditionalInformation' => 'getLocationAdditionalInformation',
            'locationInstructions'          => 'getLocationInstructions',
            'locationTypes'                 => 'getLocationTypes',
            'locationWebUrl'                => 'getLocationWebUrl',
            'merchantLocationStatus'        => 'getMerchantLocationStatus',
            'name'                          => 'getName',
            'operatingHours'                => 'getOperatingHours',
            'phone'                         => 'getPhone',
            'specialHours'                  => 'getSpecialHours',
        ];
    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param  mixed[]  $data  Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['location'] = $data['location'] ?? null;
        $this->container['locationAdditionalInformation'] = $data['locationAdditionalInformation'] ?? null;
        $this->container['locationInstructions'] = $data['locationInstructions'] ?? null;
        $this->container['locationTypes'] = $data['locationTypes'] ?? null;
        $this->container['locationWebUrl'] = $data['locationWebUrl'] ?? null;
        $this->container['merchantLocationStatus'] = $data['merchantLocationStatus'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['operatingHours'] = $data['operatingHours'] ?? null;
        $this->container['phone'] = $data['phone'] ?? null;
        $this->container['specialHours'] = $data['specialHours'] ?? null;
    }

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
     * Gets location
     *
     * @return LocationDetails
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param  LocationDetails  $location  location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets locationAdditionalInformation
     *
     * @return string
     */
    public function getLocationAdditionalInformation()
    {
        return $this->container['locationAdditionalInformation'];
    }

    /**
     * Sets locationAdditionalInformation
     *
     * @param  string  $locationAdditionalInformation  This text field is used by the merchant to provide additional information about an inventory location. <br><br><b>Max length</b>: 256
     *
     * @return $this
     */
    public function setLocationAdditionalInformation($locationAdditionalInformation)
    {
        $this->container['locationAdditionalInformation'] = $locationAdditionalInformation;

        return $this;
    }

    /**
     * Gets locationInstructions
     *
     * @return string
     */
    public function getLocationInstructions()
    {
        return $this->container['locationInstructions'];
    }

    /**
     * Sets locationInstructions
     *
     * @param  string  $locationInstructions  This text field is generally used by the merchant to provide special pickup instructions for a store inventory location. Although this field is optional, it is recommended that merchants provide this field to create a pleasant and easy pickup experience for In-Store Pickup and Click and Collect orders. If this field is not included in the call request payload, eBay will use the default pickup instructions contained in the merchant's profile (if available). <br><br>
     *
     * @return $this
     */
    public function setLocationInstructions($locationInstructions)
    {
        $this->container['locationInstructions'] = $locationInstructions;

        return $this;
    }

    /**
     * Gets locationTypes
     *
     * @return string[]
     */
    public function getLocationTypes()
    {
        return $this->container['locationTypes'];
    }

    /**
     * Sets locationTypes
     *
     * @param  string[]  $locationTypes  This container is used to define the function of the inventory location. Typically, an inventory location will serve as a store or a warehouse, but in some cases, an inventory location may be both. <br><br> If this container is omitted, the location type of the inventory location will default to <code>WAREHOUSE</code>. See <a href=\"/api-docs/sell/inventory/types/api:StoreTypeEnum\">StoreTypeEnum</a> for the supported values.<br/><br/><b>Default</b>: WAREHOUSE
     *
     * @return $this
     */
    public function setLocationTypes($locationTypes)
    {
        $this->container['locationTypes'] = $locationTypes;

        return $this;
    }

    /**
     * Gets locationWebUrl
     *
     * @return string
     */
    public function getLocationWebUrl()
    {
        return $this->container['locationWebUrl'];
    }

    /**
     * Sets locationWebUrl
     *
     * @param  string  $locationWebUrl  This text field is used by the merchant to provide the Website address (URL) associated with the inventory location. <br><br><b>Max length</b>: 512
     *
     * @return $this
     */
    public function setLocationWebUrl($locationWebUrl)
    {
        $this->container['locationWebUrl'] = $locationWebUrl;

        return $this;
    }

    /**
     * Gets merchantLocationStatus
     *
     * @return string
     */
    public function getMerchantLocationStatus()
    {
        return $this->container['merchantLocationStatus'];
    }

    /**
     * Sets merchantLocationStatus
     *
     * @param  string  $merchantLocationStatus  This field is used to indicate whether the inventory location will be enabled (inventory can be loaded to location) or disabled (inventory can not be loaded to location). If this field is omitted, a successful <strong>createInventoryLocation</strong> call will automatically enable the inventory location. A merchant may want to create a new inventory location but leave it as disabled if the inventory location is not yet ready for active inventory. Once the inventory location is ready, the merchant can use the <strong>enableInventoryLocation</strong> call to enable an inventory location that is in a disabled state. See <a href=\"/api-docs/sell/inventory/types/api:StatusEnum\">StatusEnum</a> for the supported values.  <br/><br/><b>Default</b>: ENABLED For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/api:StatusEnum'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setMerchantLocationStatus($merchantLocationStatus)
    {
        $this->container['merchantLocationStatus'] = $merchantLocationStatus;

        return $this;
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
     * @param  string  $name  The name of the inventory location. This name should be a human-friendly name as it will be displayed in In-Store Pickup and Click and Collect listings. A name is not required for warehouse inventory locations. For store inventory locations, this field is not immediately required, but will be required before an offer enabled with the In-Store Pickup or Click and Collect capability can be published. So, if the seller omits this field in a <strong>createInventoryLocation</strong> call, it becomes required for an <strong>updateInventoryLocation</strong> call.<br/><br/><b>Max length</b>: 1000
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets operatingHours
     *
     * @return OperatingHours[]
     */
    public function getOperatingHours()
    {
        return $this->container['operatingHours'];
    }

    /**
     * Sets operatingHours
     *
     * @param  OperatingHours[]  $operatingHours  Although not technically required, this container is highly recommended to be used to specify operating hours for a store inventory location. This container is used to express the regular operating hours for a store location during each day of the week. A <strong>dayOfWeekEnum</strong> field and an <strong>intervals</strong> container will be needed for each day of the week that the store location is open.
     *
     * @return $this
     */
    public function setOperatingHours($operatingHours)
    {
        $this->container['operatingHours'] = $operatingHours;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param  string  $phone  Although not technically required, this field is highly recommended to be used to specify the phone number for a store inventory location. <br><br><b>Max length</b>: 36
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets specialHours
     *
     * @return SpecialHours[]
     */
    public function getSpecialHours()
    {
        return $this->container['specialHours'];
    }

    /**
     * Sets specialHours
     *
     * @param  SpecialHours[]  $specialHours  This container is used to express the special operating hours for a store inventory location on a specific date, such as a holiday. The special hours specified for the specific date will override the normal operating hours for that particular day of the week.
     *
     * @return $this
     */
    public function setSpecialHours($specialHours)
    {
        $this->container['specialHours'] = $specialHours;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param  integer  $offset  Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param  integer  $offset  Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param  integer  $offset  Offset
     * @param  mixed  $value  Value to be set
     *
     * @return void
     */
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
     * @param  integer  $offset  Offset
     *
     * @return void
     */
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
