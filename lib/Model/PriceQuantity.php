<?php
/**
 * PriceQuantity
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
 * PriceQuantity Class Doc Comment
 *
 * @category Class
 * @description This type is used to update the total \&quot;ship-to-home\&quot;  quantity for one or more inventory items and/or to update the price and/or quantity of one or more specific offers associated with one or more inventory items.
 * @package  EBay\Inventory
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PriceQuantity implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'PriceQuantity';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes
        = [
            'offers'                     => '\EBay\Inventory\Model\OfferPriceQuantity[]',
            'shipToLocationAvailability' => ShipToLocationAvailability::class,
            'sku'                        => 'string',
        ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats
        = [
            'offers'                     => null,
            'shipToLocationAvailability' => null,
            'sku'                        => null,
        ];
    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap
        = [
            'offers'                     => 'offers',
            'shipToLocationAvailability' => 'shipToLocationAvailability',
            'sku'                        => 'sku',
        ];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters
        = [
            'offers'                     => 'setOffers',
            'shipToLocationAvailability' => 'setShipToLocationAvailability',
            'sku'                        => 'setSku',
        ];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters
        = [
            'offers'                     => 'getOffers',
            'shipToLocationAvailability' => 'getShipToLocationAvailability',
            'sku'                        => 'getSku',
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
        $this->container['offers'] = $data['offers'] ?? null;
        $this->container['shipToLocationAvailability'] = $data['shipToLocationAvailability'] ?? null;
        $this->container['sku'] = $data['sku'] ?? null;
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
     * Gets offers
     *
     * @return OfferPriceQuantity[]
     */
    public function getOffers()
    {
        return $this->container['offers'];
    }

    /**
     * Sets offers
     *
     * @param  OfferPriceQuantity[]  $offers  This container is needed if the seller is updating the price and/or quantity of one or more published offers, and a successful call will actually update the active eBay listing with the revised price and/or available quantity.<br/><br/>This call is not designed to work with unpublished offers. For unpublished offers, the seller should use the <strong>updateOffer</strong> call to update the available quantity and/or price.<br/><br/> If the seller is also using the <strong>shipToLocationAvailability</strong> container and <strong>sku</strong> field to update the total 'ship-to-home' quantity of the inventory item, the SKU value associated with the corresponding <strong>offerId</strong> value(s) must be the same as the corresponding <strong>sku</strong> value that is passed in, or an error will occur.<br/><br/>A separate (<strong>OfferPriceQuantity</strong>) node is required for each offer being updated.
     *
     * @return $this
     */
    public function setOffers($offers)
    {
        $this->container['offers'] = $offers;

        return $this;
    }

    /**
     * Gets shipToLocationAvailability
     *
     * @return ShipToLocationAvailability
     */
    public function getShipToLocationAvailability()
    {
        return $this->container['shipToLocationAvailability'];
    }

    /**
     * Sets shipToLocationAvailability
     *
     * @param  ShipToLocationAvailability  $shipToLocationAvailability  shipToLocationAvailability
     *
     * @return $this
     */
    public function setShipToLocationAvailability($shipToLocationAvailability)
    {
        $this->container['shipToLocationAvailability'] = $shipToLocationAvailability;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param  string  $sku  This is the seller-defined SKU value of the inventory item whose total 'ship-to-home' quantity will be updated. This field is only required when the seller is updating the total quantity of an inventory item using the <strong>shipToLocationAvailability</strong> container. If the seller is updating the price and/or quantity of one or more specific offers, one or more <strong>offerId</strong> values are used instead, and the <strong>sku</strong> value is not needed.<br/><br/>If the seller wants to update the price and/or quantity of one or more offers, and also wants to update the total 'ship-to-home' quantity of the corresponding inventory item, the SKU value associated with the <strong>offerId</strong> value(s) must be the same as the corresponding <strong>sku</strong> value that is passed in, or an error will occur.<br/><br/><strong>Max Length</strong>: 50<br/>
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

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
