<?php
/**
 * ShipToLocationAvailabilityWithAll
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
 * ShipToLocationAvailabilityWithAll Class Doc Comment
 *
 * @category Class
 * @description This type is used to specify the total &#x27;ship-to-home&#x27; quantity of the inventory items that will be available for purchase through one or more published offers.
 * @package  EBay\Inventory
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShipToLocationAvailabilityWithAll implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ShipToLocationAvailabilityWithAll';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes
        = [
            'allocationByFormat'        => FormatAllocation::class,
            'availabilityDistributions' => '\EBay\Inventory\Model\AvailabilityDistribution[]',
            'quantity'                  => 'int',
        ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats
        = [
            'allocationByFormat'        => null,
            'availabilityDistributions' => null,
            'quantity'                  => 'int32',
        ];
    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap
        = [
            'allocationByFormat'        => 'allocationByFormat',
            'availabilityDistributions' => 'availabilityDistributions',
            'quantity'                  => 'quantity',
        ];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters
        = [
            'allocationByFormat'        => 'setAllocationByFormat',
            'availabilityDistributions' => 'setAvailabilityDistributions',
            'quantity'                  => 'setQuantity',
        ];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters
        = [
            'allocationByFormat'        => 'getAllocationByFormat',
            'availabilityDistributions' => 'getAvailabilityDistributions',
            'quantity'                  => 'getQuantity',
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
        $this->container['allocationByFormat'] = $data['allocationByFormat'] ?? null;
        $this->container['availabilityDistributions'] = $data['availabilityDistributions'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
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
     * Gets allocationByFormat
     *
     * @return FormatAllocation
     */
    public function getAllocationByFormat()
    {
        return $this->container['allocationByFormat'];
    }

    /**
     * Sets allocationByFormat
     *
     * @param  FormatAllocation  $allocationByFormat  allocationByFormat
     *
     * @return $this
     */
    public function setAllocationByFormat($allocationByFormat)
    {
        $this->container['allocationByFormat'] = $allocationByFormat;

        return $this;
    }

    /**
     * Gets availabilityDistributions
     *
     * @return AvailabilityDistribution[]
     */
    public function getAvailabilityDistributions()
    {
        return $this->container['availabilityDistributions'];
    }

    /**
     * Sets availabilityDistributions
     *
     * @param  AvailabilityDistribution[]  $availabilityDistributions  This container is used to set the available quantity of the inventory item at one or more warehouse locations.<br /><br /> This container will be returned if the available quantity is set for one or more inventory locations.
     *
     * @return $this
     */
    public function setAvailabilityDistributions($availabilityDistributions)
    {
        $this->container['availabilityDistributions'] = $availabilityDistributions;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param  int  $quantity  This container is used to set the total 'ship-to-home' quantity of the inventory item that will be available for purchase through one or more published offers. This container is not immediately required, but 'ship-to-home' quantity must be set before an offer of the inventory item can be published.<br/><br/>If an existing inventory item is being updated, and the 'ship-to-home' quantity already exists for the inventory item record, this container should be included again, even if the value is not changing, or the available quantity data will be lost.
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

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