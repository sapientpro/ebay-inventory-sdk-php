<?php
/**
 * MigrateListingResponse
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
 * MigrateListingResponse Class Doc Comment
 *
 * @category Class
 * @description This type is used to display the results of each listing that the seller attempted to migrate.
 * @package  EBay\Inventory
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MigrateListingResponse implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'MigrateListingResponse';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes
        = [
            'errors'                => '\EBay\Inventory\Model\Error[]',
            'inventoryItemGroupKey' => 'string',
            'inventoryItems'        => '\EBay\Inventory\Model\InventoryItemListing[]',
            'listingId'             => 'string',
            'marketplaceId'         => 'string',
            'statusCode'            => 'int',
            'warnings'              => '\EBay\Inventory\Model\Error[]',
        ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats
        = [
            'errors'                => null,
            'inventoryItemGroupKey' => null,
            'inventoryItems'        => null,
            'listingId'             => null,
            'marketplaceId'         => null,
            'statusCode'            => 'int32',
            'warnings'              => null,
        ];
    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap
        = [
            'errors'                => 'errors',
            'inventoryItemGroupKey' => 'inventoryItemGroupKey',
            'inventoryItems'        => 'inventoryItems',
            'listingId'             => 'listingId',
            'marketplaceId'         => 'marketplaceId',
            'statusCode'            => 'statusCode',
            'warnings'              => 'warnings',
        ];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters
        = [
            'errors'                => 'setErrors',
            'inventoryItemGroupKey' => 'setInventoryItemGroupKey',
            'inventoryItems'        => 'setInventoryItems',
            'listingId'             => 'setListingId',
            'marketplaceId'         => 'setMarketplaceId',
            'statusCode'            => 'setStatusCode',
            'warnings'              => 'setWarnings',
        ];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters
        = [
            'errors'                => 'getErrors',
            'inventoryItemGroupKey' => 'getInventoryItemGroupKey',
            'inventoryItems'        => 'getInventoryItems',
            'listingId'             => 'getListingId',
            'marketplaceId'         => 'getMarketplaceId',
            'statusCode'            => 'getStatusCode',
            'warnings'              => 'getWarnings',
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
        $this->container['errors'] = $data['errors'] ?? null;
        $this->container['inventoryItemGroupKey'] = $data['inventoryItemGroupKey'] ?? null;
        $this->container['inventoryItems'] = $data['inventoryItems'] ?? null;
        $this->container['listingId'] = $data['listingId'] ?? null;
        $this->container['marketplaceId'] = $data['marketplaceId'] ?? null;
        $this->container['statusCode'] = $data['statusCode'] ?? null;
        $this->container['warnings'] = $data['warnings'] ?? null;
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
     * Gets errors
     *
     * @return Error[]
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param  Error[]  $errors  If one or more errors occur with the attempt to migrate the listing, this container will be returned with detailed information on each error.
     *
     * @return $this
     */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

        return $this;
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
     * @param  string  $inventoryItemGroupKey  This field will only be returned for a multiple-variation listing that the seller attempted to migrate. Its value is auto-generated by eBay. For a multiple-variation listing that is successfully migrated to the new Inventory model, eBay automatically creates an inventory item group object for the listing, and the seller will be able to retrieve and manage that new inventory item group object by using the value in this field.
     *
     * @return $this
     */
    public function setInventoryItemGroupKey($inventoryItemGroupKey)
    {
        $this->container['inventoryItemGroupKey'] = $inventoryItemGroupKey;

        return $this;
    }

    /**
     * Gets inventoryItems
     *
     * @return InventoryItemListing[]
     */
    public function getInventoryItems()
    {
        return $this->container['inventoryItems'];
    }

    /**
     * Sets inventoryItems
     *
     * @param  InventoryItemListing[]  $inventoryItems  This container exists of an array of SKU values and offer IDs. For single-variation listings, this will only be one SKU value and one offer ID (if listing was successfully migrated), but multiple SKU values and offer IDs will be returned for multiple-variation listings.
     *
     * @return $this
     */
    public function setInventoryItems($inventoryItems)
    {
        $this->container['inventoryItems'] = $inventoryItems;

        return $this;
    }

    /**
     * Gets listingId
     *
     * @return string
     */
    public function getListingId()
    {
        return $this->container['listingId'];
    }

    /**
     * Sets listingId
     *
     * @param  string  $listingId  The unique identifier of the eBay listing that the seller attempted to migrate.
     *
     * @return $this
     */
    public function setListingId($listingId)
    {
        $this->container['listingId'] = $listingId;

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
     * @param  string  $marketplaceId  This is the unique identifier of the eBay Marketplace where the listing resides. The value fo the eBay US site will be <code>EBAY_US</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:MarketplaceEnum'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setMarketplaceId($marketplaceId)
    {
        $this->container['marketplaceId'] = $marketplaceId;

        return $this;
    }

    /**
     * Gets statusCode
     *
     * @return int
     */
    public function getStatusCode()
    {
        return $this->container['statusCode'];
    }

    /**
     * Sets statusCode
     *
     * @param  int  $statusCode  This field is returned for each listing that the seller attempted to migrate. See the <strong>HTTP status codes</strong> table to see which each status code indicates.
     *
     * @return $this
     */
    public function setStatusCode($statusCode)
    {
        $this->container['statusCode'] = $statusCode;

        return $this;
    }

    /**
     * Gets warnings
     *
     * @return Error[]
     */
    public function getWarnings()
    {
        return $this->container['warnings'];
    }

    /**
     * Sets warnings
     *
     * @param  Error[]  $warnings  If one or more warnings occur with the attempt to migrate the listing, this container will be returned with detailed information on each warning. It is possible that a listing can be successfully migrated even if a warning occurs.
     *
     * @return $this
     */
    public function setWarnings($warnings)
    {
        $this->container['warnings'] = $warnings;

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
