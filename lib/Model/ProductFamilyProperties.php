<?php
/**
 * ProductFamilyProperties
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
 * ProductFamilyProperties Class Doc Comment
 *
 * @category Class
 * @description This type is used to specify the details of a motor vehicle that is compatible with the inventory item specified through the SKU value in the call URI.
 * @package  EBay\Inventory
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductFamilyProperties implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ProductFamilyProperties';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes
        = [
            'engine' => 'string',
            'make'   => 'string',
            'model'  => 'string',
            'trim'   => 'string',
            'year'   => 'string',
        ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats
        = [
            'engine' => null,
            'make'   => null,
            'model'  => null,
            'trim'   => null,
            'year'   => null,
        ];
    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap
        = [
            'engine' => 'engine',
            'make'   => 'make',
            'model'  => 'model',
            'trim'   => 'trim',
            'year'   => 'year',
        ];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters
        = [
            'engine' => 'setEngine',
            'make'   => 'setMake',
            'model'  => 'setModel',
            'trim'   => 'setTrim',
            'year'   => 'setYear',
        ];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters
        = [
            'engine' => 'getEngine',
            'make'   => 'getMake',
            'model'  => 'getModel',
            'trim'   => 'getTrim',
            'year'   => 'getYear',
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
        $this->container['engine'] = $data['engine'] ?? null;
        $this->container['make'] = $data['make'] ?? null;
        $this->container['model'] = $data['model'] ?? null;
        $this->container['trim'] = $data['trim'] ?? null;
        $this->container['year'] = $data['year'] ?? null;
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
     * Gets engine
     *
     * @return string
     */
    public function getEngine()
    {
        return $this->container['engine'];
    }

    /**
     * Sets engine
     *
     * @param  string  $engine  This field indicates the specifications of the engine, including its size, block type, and fuel type. An example is <code>2.7L V6 gas DOHC naturally aspirated</code>. This field is conditionally required, but should be supplied if known/applicable.
     *
     * @return $this
     */
    public function setEngine($engine)
    {
        $this->container['engine'] = $engine;

        return $this;
    }

    /**
     * Gets make
     *
     * @return string
     */
    public function getMake()
    {
        return $this->container['make'];
    }

    /**
     * Sets make
     *
     * @param  string  $make  This field indicates the make of the vehicle (e.g. <code>Toyota</code>). This field is always required to identify a motor vehicle.
     *
     * @return $this
     */
    public function setMake($make)
    {
        $this->container['make'] = $make;

        return $this;
    }

    /**
     * Gets model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param  string  $model  This field indicates the model of the vehicle (e.g. <code>Camry</code>). This field is always required to identify a motor vehicle.
     *
     * @return $this
     */
    public function setModel($model)
    {
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets trim
     *
     * @return string
     */
    public function getTrim()
    {
        return $this->container['trim'];
    }

    /**
     * Sets trim
     *
     * @param  string  $trim  This field indicates the trim of the vehicle (e.g. <code>2-door Coupe</code>). This field is conditionally required, but should be supplied if known/applicable.
     *
     * @return $this
     */
    public function setTrim($trim)
    {
        $this->container['trim'] = $trim;

        return $this;
    }

    /**
     * Gets year
     *
     * @return string
     */
    public function getYear()
    {
        return $this->container['year'];
    }

    /**
     * Sets year
     *
     * @param  string  $year  This field indicates the year of the vehicle (e.g. <code>2016</code>). This field is always required to identify a motor vehicle.
     *
     * @return $this
     */
    public function setYear($year)
    {
        $this->container['year'] = $year;

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
