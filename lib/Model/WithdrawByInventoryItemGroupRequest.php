<?php
/**
 * WithdrawByInventoryItemGroupRequest
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
 * WithdrawByInventoryItemGroupRequest Class Doc Comment
 *
 * @category Class
 * @description This type is used by the base request of the &lt;strong&gt;WithdrawByInventoryItemGroup&lt;/strong&gt; method, which is used to end a multiple-variation listing.
 * @package  EBay\Inventory
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WithdrawByInventoryItemGroupRequest implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'WithdrawByInventoryItemGroupRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes
        = [
            'inventoryItemGroupKey' => 'string',
            'marketplaceId'         => 'string',
        ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats
        = [
            'inventoryItemGroupKey' => null,
            'marketplaceId'         => null,
        ];
    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap
        = [
            'inventoryItemGroupKey' => 'inventoryItemGroupKey',
            'marketplaceId'         => 'marketplaceId',
        ];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters
        = [
            'inventoryItemGroupKey' => 'setInventoryItemGroupKey',
            'marketplaceId'         => 'setMarketplaceId',
        ];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters
        = [
            'inventoryItemGroupKey' => 'getInventoryItemGroupKey',
            'marketplaceId'         => 'getMarketplaceId',
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
        $this->container['inventoryItemGroupKey'] = $data['inventoryItemGroupKey'] ?? null;
        $this->container['marketplaceId'] = $data['marketplaceId'] ?? null;
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
     * Gets inventoryItemGroupKey
     *
     * @return string
     */
    public function getInventoryItemGroupKey()
    {
        return $this->container['inventoryItemGroupKey'];
    }

    /**
     * Sets inventoryItemGroupKey
     *
     * @param  string  $inventoryItemGroupKey  This is the unique identifier of the inventory item group. This identifier is automatically generated by eBay once an inventory item group is created. This field is required.
     *
     * @return $this
     */
    public function setInventoryItemGroupKey($inventoryItemGroupKey)
    {
        $this->container['inventoryItemGroupKey'] = $inventoryItemGroupKey;

        return $this;
    }

    /**
     * Gets marketplaceId
     *
     * @return string
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplaceId'];
    }

    /**
     * Sets marketplaceId
     *
     * @param  string  $marketplaceId  This is the unique identifier of the eBay site for which the offer will be made available. The marketPlaceId enumeration values are found in MarketplaceIdEnum. This field is required. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:MarketplaceEnum'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setMarketplaceId($marketplaceId)
    {
        $this->container['marketplaceId'] = $marketplaceId;

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
