<?php
/**
 * VariesBy
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
 * VariesBy Class Doc Comment
 *
 * @category Class
 * @description This type is used to specify the product aspect(s) where individual items of the group vary, as well as a list of the available variations of those aspects.
 * @package  EBay\Inventory
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VariesBy implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'VariesBy';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes
        = [
            'aspectsImageVariesBy' => 'string[]',
            'specifications'       => '\EBay\Inventory\Model\Specification[]',
        ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats
        = [
            'aspectsImageVariesBy' => null,
            'specifications'       => null,
        ];
    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap
        = [
            'aspectsImageVariesBy' => 'aspectsImageVariesBy',
            'specifications'       => 'specifications',
        ];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters
        = [
            'aspectsImageVariesBy' => 'setAspectsImageVariesBy',
            'specifications'       => 'setSpecifications',
        ];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters
        = [
            'aspectsImageVariesBy' => 'getAspectsImageVariesBy',
            'specifications'       => 'getSpecifications',
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
        $this->container['aspectsImageVariesBy'] = $data['aspectsImageVariesBy'] ?? null;
        $this->container['specifications'] = $data['specifications'] ?? null;
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
     * Gets aspectsImageVariesBy
     *
     * @return string[]
     */
    public function getAspectsImageVariesBy()
    {
        return $this->container['aspectsImageVariesBy'];
    }

    /**
     * Sets aspectsImageVariesBy
     *
     * @param  string[]  $aspectsImageVariesBy  This container is used if the seller wants to include multiple images to demonstrate how variations within a multiple-variation listing differ. In this string field, the seller will specify the product aspect where the variations of the inventory item group vary, such as color. If <code>Color</code> is specified in this field, <code>Color</code> must also be one of the <strong>specifications.name</strong> values, and all available colors must appear in the corresponding <strong>specifications.values</strong> array.<br><br>If the <strong>aspectsImageVariesBy</strong> container is used, links to images of each variation should be specified through the <strong>imageUrls</strong> container of the inventory item group, or the seller can choose to include those links to images in each inventory item record for the inventory items in the group.
     *
     * @return $this
     */
    public function setAspectsImageVariesBy($aspectsImageVariesBy)
    {
        $this->container['aspectsImageVariesBy'] = $aspectsImageVariesBy;

        return $this;
    }

    /**
     * Gets specifications
     *
     * @return Specification[]
     */
    public function getSpecifications()
    {
        return $this->container['specifications'];
    }

    /**
     * Sets specifications
     *
     * @param  Specification[]  $specifications  This container consists of an array of one or more product aspects where each variation differs, and values for each of those product aspects. This container is not immediately required, but will be required before the first offer of the inventory item group is published. <br><br>If a product aspect is specified in the <strong>aspectsImageVariesBy</strong> container, this product aspect (along with all variations of that product aspect) must be included in the <strong>specifications</strong> container. Before offers related to the inventory item group are published, the product aspects and values specified through the <strong>specifications</strong> container should be in synch with the name-value pairs specified through the <strong>product.aspects</strong> containers of the inventory items contained in the group. For example, if <code>Color</code> and <code>Size</code> are in this <strong>specifications</strong> container, each inventory item of the group should also have <code>Color</code> and <code>Size</code> as aspect names in their inventory item records.<br><br/>This container is always returned if one or more offers associated with the inventory item group have been published. For inventory item groups that have yet to have any published offers, this container is only returned if set.
     *
     * @return $this
     */
    public function setSpecifications($specifications)
    {
        $this->container['specifications'] = $specifications;

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
