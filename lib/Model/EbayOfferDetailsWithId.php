<?php
/**
 * EbayOfferDetailsWithId
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
 * EbayOfferDetailsWithId Class Doc Comment
 *
 * @category Class
 * @description This type provides details of an offer, and is used by the base request payload of the &lt;strong&gt;updateOffer&lt;/strong&gt; call. Every field that is currently set with the unpublished/published offer must also be passed into the &lt;strong&gt;updateOffer&lt;/strong&gt; call, even those fields whose values are not changing. Note that for published offers, a successful &lt;strong&gt;updateOffer&lt;/strong&gt; call will actually update the active eBay listing with whatever changes were made.
 * @package  EBay\Inventory
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EbayOfferDetailsWithId implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'EbayOfferDetailsWithId';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes
        = [
            'availableQuantity'              => 'int',
            'categoryId'                     => 'string',
            'charity'                        => Charity::class,
            'extendedProducerResponsibility' => ExtendedProducerResponsibility::class,
            'hideBuyerDetails'               => 'bool',
            'includeCatalogProductDetails'   => 'bool',
            'listingDescription'             => 'string',
            'listingDuration'                => 'string',
            'listingPolicies'                => ListingPolicies::class,
            'listingStartDate'               => 'string',
            'lotSize'                        => 'int',
            'merchantLocationKey'            => 'string',
            'pricingSummary'                 => PricingSummary::class,
            'quantityLimitPerBuyer'          => 'int',
            'secondaryCategoryId'            => 'string',
            'storeCategoryNames'             => 'string[]',
            'tax'                            => Tax::class,
        ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats
        = [
            'availableQuantity'              => 'int32',
            'categoryId'                     => null,
            'charity'                        => null,
            'extendedProducerResponsibility' => null,
            'hideBuyerDetails'               => null,
            'includeCatalogProductDetails'   => null,
            'listingDescription'             => null,
            'listingDuration'                => null,
            'listingPolicies'                => null,
            'listingStartDate'               => null,
            'lotSize'                        => 'int32',
            'merchantLocationKey'            => null,
            'pricingSummary'                 => null,
            'quantityLimitPerBuyer'          => 'int32',
            'secondaryCategoryId'            => null,
            'storeCategoryNames'             => null,
            'tax'                            => null,
        ];
    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap
        = [
            'availableQuantity'              => 'availableQuantity',
            'categoryId'                     => 'categoryId',
            'charity'                        => 'charity',
            'extendedProducerResponsibility' => 'extendedProducerResponsibility',
            'hideBuyerDetails'               => 'hideBuyerDetails',
            'includeCatalogProductDetails'   => 'includeCatalogProductDetails',
            'listingDescription'             => 'listingDescription',
            'listingDuration'                => 'listingDuration',
            'listingPolicies'                => 'listingPolicies',
            'listingStartDate'               => 'listingStartDate',
            'lotSize'                        => 'lotSize',
            'merchantLocationKey'            => 'merchantLocationKey',
            'pricingSummary'                 => 'pricingSummary',
            'quantityLimitPerBuyer'          => 'quantityLimitPerBuyer',
            'secondaryCategoryId'            => 'secondaryCategoryId',
            'storeCategoryNames'             => 'storeCategoryNames',
            'tax'                            => 'tax',
        ];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters
        = [
            'availableQuantity'              => 'setAvailableQuantity',
            'categoryId'                     => 'setCategoryId',
            'charity'                        => 'setCharity',
            'extendedProducerResponsibility' => 'setExtendedProducerResponsibility',
            'hideBuyerDetails'               => 'setHideBuyerDetails',
            'includeCatalogProductDetails'   => 'setIncludeCatalogProductDetails',
            'listingDescription'             => 'setListingDescription',
            'listingDuration'                => 'setListingDuration',
            'listingPolicies'                => 'setListingPolicies',
            'listingStartDate'               => 'setListingStartDate',
            'lotSize'                        => 'setLotSize',
            'merchantLocationKey'            => 'setMerchantLocationKey',
            'pricingSummary'                 => 'setPricingSummary',
            'quantityLimitPerBuyer'          => 'setQuantityLimitPerBuyer',
            'secondaryCategoryId'            => 'setSecondaryCategoryId',
            'storeCategoryNames'             => 'setStoreCategoryNames',
            'tax'                            => 'setTax',
        ];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters
        = [
            'availableQuantity'              => 'getAvailableQuantity',
            'categoryId'                     => 'getCategoryId',
            'charity'                        => 'getCharity',
            'extendedProducerResponsibility' => 'getExtendedProducerResponsibility',
            'hideBuyerDetails'               => 'getHideBuyerDetails',
            'includeCatalogProductDetails'   => 'getIncludeCatalogProductDetails',
            'listingDescription'             => 'getListingDescription',
            'listingDuration'                => 'getListingDuration',
            'listingPolicies'                => 'getListingPolicies',
            'listingStartDate'               => 'getListingStartDate',
            'lotSize'                        => 'getLotSize',
            'merchantLocationKey'            => 'getMerchantLocationKey',
            'pricingSummary'                 => 'getPricingSummary',
            'quantityLimitPerBuyer'          => 'getQuantityLimitPerBuyer',
            'secondaryCategoryId'            => 'getSecondaryCategoryId',
            'storeCategoryNames'             => 'getStoreCategoryNames',
            'tax'                            => 'getTax',
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
        $this->container['availableQuantity'] = $data['availableQuantity'] ?? null;
        $this->container['categoryId'] = $data['categoryId'] ?? null;
        $this->container['charity'] = $data['charity'] ?? null;
        $this->container['extendedProducerResponsibility'] = $data['extendedProducerResponsibility'] ?? null;
        $this->container['hideBuyerDetails'] = $data['hideBuyerDetails'] ?? null;
        $this->container['includeCatalogProductDetails'] = $data['includeCatalogProductDetails'] ?? null;
        $this->container['listingDescription'] = $data['listingDescription'] ?? null;
        $this->container['listingDuration'] = $data['listingDuration'] ?? null;
        $this->container['listingPolicies'] = $data['listingPolicies'] ?? null;
        $this->container['listingStartDate'] = $data['listingStartDate'] ?? null;
        $this->container['lotSize'] = $data['lotSize'] ?? null;
        $this->container['merchantLocationKey'] = $data['merchantLocationKey'] ?? null;
        $this->container['pricingSummary'] = $data['pricingSummary'] ?? null;
        $this->container['quantityLimitPerBuyer'] = $data['quantityLimitPerBuyer'] ?? null;
        $this->container['secondaryCategoryId'] = $data['secondaryCategoryId'] ?? null;
        $this->container['storeCategoryNames'] = $data['storeCategoryNames'] ?? null;
        $this->container['tax'] = $data['tax'] ?? null;
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
     * Gets availableQuantity
     *
     * @return int
     */
    public function getAvailableQuantity()
    {
        return $this->container['availableQuantity'];
    }

    /**
     * Sets availableQuantity
     *
     * @param  int  $availableQuantity  This integer value sets the quantity of the inventory item that will be available through the offer. Quantity must be set to <code>1</code> or more in order for the inventory item to be purchasable. This value should not be more than the quantity that is specified for the inventory item record. For auction listings, this value must be <code>1</code>. <br/><br/>If this field exists for the current unpublished or published offer, it should be provided again in the <strong>updateOffer</strong> call, even if the value is not changing. If this particular field is omitted in an <strong>updateOffer</strong> call, the general available quantity set for the inventory item record may be used instead, and this may not be accurate if the inventory item is being sold across multiple marketplaces.
     *
     * @return $this
     */
    public function setAvailableQuantity($availableQuantity)
    {
        $this->container['availableQuantity'] = $availableQuantity;

        return $this;
    }

    /**
     * Gets categoryId
     *
     * @return string
     */
    public function getCategoryId()
    {
        return $this->container['categoryId'];
    }

    /**
     * Sets categoryId
     *
     * @param  string  $categoryId  The unique identifier of the eBay category that the inventory item is/will be listed under. This field is not immediately required for an unpublished offer, but will be required before publishing the offer. Sellers can use the <a href=\"https://developer.ebay.com/api-docs/commerce/taxonomy/resources/category_tree/methods/getCategorySuggestions\" target=\"_blank\">getCategorySuggestions</a> method of the Taxonomy API to retrieve suggested category ID values. The seller passes in a query string like \"<em>iPhone 6</em>\", and category ID values for suggested categories are returned in the response.<br/><br/>If this field exists for the current unpublished offer, it should be provided again in the <strong>updateOffer</strong> call, even if the eBay category is not changing. For a published offer (aka active eBay listing), this field must be provided or an error may occur. The eBay category of an active eBay listing cannot be changed once the listing has one or more sales, or if the listing is scheduled to end in less than 12 hours.
     *
     * @return $this
     */
    public function setCategoryId($categoryId)
    {
        $this->container['categoryId'] = $categoryId;

        return $this;
    }

    /**
     * Gets charity
     *
     * @return Charity
     */
    public function getCharity()
    {
        return $this->container['charity'];
    }

    /**
     * Sets charity
     *
     * @param  Charity  $charity  charity
     *
     * @return $this
     */
    public function setCharity($charity)
    {
        $this->container['charity'] = $charity;

        return $this;
    }

    /**
     * Gets extendedProducerResponsibility
     *
     * @return ExtendedProducerResponsibility
     */
    public function getExtendedProducerResponsibility()
    {
        return $this->container['extendedProducerResponsibility'];
    }

    /**
     * Sets extendedProducerResponsibility
     *
     * @param  ExtendedProducerResponsibility  $extendedProducerResponsibility  extendedProducerResponsibility
     *
     * @return $this
     */
    public function setExtendedProducerResponsibility($extendedProducerResponsibility)
    {
        $this->container['extendedProducerResponsibility'] = $extendedProducerResponsibility;

        return $this;
    }

    /**
     * Gets hideBuyerDetails
     *
     * @return bool
     */
    public function getHideBuyerDetails()
    {
        return $this->container['hideBuyerDetails'];
    }

    /**
     * Sets hideBuyerDetails
     *
     * @param  bool  $hideBuyerDetails  This field is included and set to <code>true</code> if the seller wishes to update a published or unpublished offer with the private listing feature. Alternatively, the seller could also remove the private listing feature (if already set for a published or unpublished offer) by including this field and setting it to <code>false</code>. <br><br> Sellers may want to use this option when they believe that a listing's potential bidders/buyers would not want their obfuscated user IDs (and feedback scores) exposed to other users.
     *
     * @return $this
     */
    public function setHideBuyerDetails($hideBuyerDetails)
    {
        $this->container['hideBuyerDetails'] = $hideBuyerDetails;

        return $this;
    }

    /**
     * Gets includeCatalogProductDetails
     *
     * @return bool
     */
    public function getIncludeCatalogProductDetails()
    {
        return $this->container['includeCatalogProductDetails'];
    }

    /**
     * Sets includeCatalogProductDetails
     *
     * @param  bool  $includeCatalogProductDetails  This field indicates whether or not eBay product catalog details are applied to a listing. A value of <code>true</code> indicates the listing corresponds to the eBay product associated with the provided product identifier. The product identifier is provided in <strong>createOrReplaceInventoryItem</strong>.<p><span class=\"tablenote\"><strong>Note:</strong> Though the <strong>includeCatalogProductDetails</strong> parameter is not required to be submitted in the request, the parameter defaults to 'true' if omitted.</span></p>
     *
     * @return $this
     */
    public function setIncludeCatalogProductDetails($includeCatalogProductDetails)
    {
        $this->container['includeCatalogProductDetails'] = $includeCatalogProductDetails;

        return $this;
    }

    /**
     * Gets listingDescription
     *
     * @return string
     */
    public function getListingDescription()
    {
        return $this->container['listingDescription'];
    }

    /**
     * Sets listingDescription
     *
     * @param  string  $listingDescription  The text in this field is (published offers), or will become (unpublished offers) the description of the eBay listing. This field is not immediately required for an unpublished offer, but will be required before publishing the offer. Note that if the <strong>listingDescription</strong> field was omitted in the <strong>createOffer</strong> call for the offer, the offer entity should have picked up the text provided in the <strong>product.description</strong> field of the inventory item record, or if the inventory item is part of a group, the offer entity should have picked up the text provided in the <strong>description</strong> field of the inventory item group record.<br/><br/>HTML tags and markup can be used in listing descriptions, but each character counts toward the max length limit.<br/><br/><span class=\"tablenote\"> <strong>Note:</strong> To ensure that their short listing description is optimized when viewed on mobile devices, sellers should strongly consider using eBay's <a href=\"https://pages.ebay.com/sell/itemdescription/customizeyoursummary.html\" target=\"_blank\">View Item description summary feature</a> when listing their items. Keep in mind that the 'short' listing description is what prospective buyers first see when they view the listing on a mobile device. The 'full' listing description is also available to mobile users when they click on the short listing description, but the full description is not automatically optimized for viewing in mobile devices, and many users won't even drill down to the full description.<br><br> Using HTML div and span tag attributes, this feature allows sellers to customize and fully control the short listing description that is displayed to prospective buyers when viewing the listing on a mobile device. The short listing description on mobile devices is limited to 800 characters, and whenever the full listing description (provided in this field, in UI, or seller tool) exceeds this limit, eBay uses a special algorithm to derive the best possible short listing description within the 800-character limit. However, due to some short listing description content being removed, it is definitely not ideal for the seller, and could lead to a bad buyer experience and possibly to a Significantly not as described (SNAD) case, since the buyer may not get complete details on the item when viewing the short listing description. See the eBay help page for more details on using the HTML div and span tags.</span><br/><br/>If this field exists for the current unpublished offer, it should be provided again in the <strong>updateOffer</strong> call, even if the text is not changing. For a published offer (aka active eBay listing), this field must be provided or an error may occur.<br><br><strong>Max length</strong>: 500000 (which includes HTML markup/tags)
     *
     * @return $this
     */
    public function setListingDescription($listingDescription)
    {
        $this->container['listingDescription'] = $listingDescription;

        return $this;
    }

    /**
     * Gets listingDuration
     *
     * @return string
     */
    public function getListingDuration()
    {
        return $this->container['listingDuration'];
    }

    /**
     * Sets listingDuration
     *
     * @param  string  $listingDuration  This field indicates the number of days that the listing will be active. For fixed-price listings, this value must be set to <code>GTC</code>, but auction listings support different listing durations.<br /><br /> The GTC (Good 'Til Cancelled) listings are automatically renewed each calendar month until the seller decides to end the listing.<br /><br /><span class=\"tablenote\"> <strong>Note:</strong> If the listing duration expires for an auction offer without a winning bidder, the listing then becomes available as a fixed-price offer and listing duration will be <code>GTC</code>.</span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:ListingDurationEnum'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setListingDuration($listingDuration)
    {
        $this->container['listingDuration'] = $listingDuration;

        return $this;
    }

    /**
     * Gets listingPolicies
     *
     * @return ListingPolicies
     */
    public function getListingPolicies()
    {
        return $this->container['listingPolicies'];
    }

    /**
     * Sets listingPolicies
     *
     * @param  ListingPolicies  $listingPolicies  listingPolicies
     *
     * @return $this
     */
    public function setListingPolicies($listingPolicies)
    {
        $this->container['listingPolicies'] = $listingPolicies;

        return $this;
    }

    /**
     * Gets listingStartDate
     *
     * @return string
     */
    public function getListingStartDate()
    {
        return $this->container['listingStartDate'];
    }

    /**
     * Sets listingStartDate
     *
     * @param  string  $listingStartDate  This field can be used with an unpublished offer if the seller wants to specify a time in the future that the listing will become active on eBay. The timestamp supplied in this field should be in UTC format, and it should be far enough in the future so that the seller will have enough time to publish the listing with the <strong>publishOffer</strong> method.<br><br> This field is optional, and it doesn't apply to offers where the corresponding listing is already active. If this field is not provided, the listing starts immediately after a successful <strong>publishOffer</strong> method.
     *
     * @return $this
     */
    public function setListingStartDate($listingStartDate)
    {
        $this->container['listingStartDate'] = $listingStartDate;

        return $this;
    }

    /**
     * Gets lotSize
     *
     * @return int
     */
    public function getLotSize()
    {
        return $this->container['lotSize'];
    }

    /**
     * Sets lotSize
     *
     * @param  int  $lotSize  This field is only applicable if the listing is a lot listing. A lot listing is a listing that has multiple quantity of the same item, such as four identical tires being sold as a single offer, or it can be a mixed lot of similar items, such as used clothing items or an assortment of baseball cards. Whether the lot listing involved identical items or a mixed lot, the integer value passed into this field is the total number of items in the lot. Lots can be used for auction and fixed-price listings.
     *
     * @return $this
     */
    public function setLotSize($lotSize)
    {
        $this->container['lotSize'] = $lotSize;

        return $this;
    }

    /**
     * Gets merchantLocationKey
     *
     * @return string
     */
    public function getMerchantLocationKey()
    {
        return $this->container['merchantLocationKey'];
    }

    /**
     * Sets merchantLocationKey
     *
     * @param  string  $merchantLocationKey  The unique identifier of a merchant's inventory location (where the inventory item in the offer is located). A <strong>merchantLocationKey</strong> value is established when the merchant creates an inventory location using the <strong>createInventoryLocation</strong> call. To get more information about inventory locations, the <strong>getInventoryLocation</strong> call can be used.<br/><br/>This field is not initially required upon first creating an offer, but will become required before an offer can be published.<br/><br/><b>Max length</b>: 36
     *
     * @return $this
     */
    public function setMerchantLocationKey($merchantLocationKey)
    {
        $this->container['merchantLocationKey'] = $merchantLocationKey;

        return $this;
    }

    /**
     * Gets pricingSummary
     *
     * @return PricingSummary
     */
    public function getPricingSummary()
    {
        return $this->container['pricingSummary'];
    }

    /**
     * Sets pricingSummary
     *
     * @param  PricingSummary  $pricingSummary  pricingSummary
     *
     * @return $this
     */
    public function setPricingSummary($pricingSummary)
    {
        $this->container['pricingSummary'] = $pricingSummary;

        return $this;
    }

    /**
     * Gets quantityLimitPerBuyer
     *
     * @return int
     */
    public function getQuantityLimitPerBuyer()
    {
        return $this->container['quantityLimitPerBuyer'];
    }

    /**
     * Sets quantityLimitPerBuyer
     *
     * @param  int  $quantityLimitPerBuyer  This field is only applicable and set if the seller wishes to set a restriction on the purchase quantity per seller. If this field is set by the seller for the offer, then each distinct buyer may purchase up to, but not exceeding the quantity specified for this field. So, if this field's value is <code>5</code>, each buyer may purchase between one to five of these products, and the purchases can occur in one multiple-quantity purchase, or over multiple transactions. If a buyer attempts to purchase one or more of these products, and the cumulative quantity will take the buyer beyond the quantity limit, that buyer will be blocked from that purchase.<br><br>If this field currently exists for an unpublished or published offer, it should be provided again in an <strong>updateOffer</strong> call, even if the value is not changing.<br/>
     *
     * @return $this
     */
    public function setQuantityLimitPerBuyer($quantityLimitPerBuyer)
    {
        $this->container['quantityLimitPerBuyer'] = $quantityLimitPerBuyer;

        return $this;
    }

    /**
     * Gets secondaryCategoryId
     *
     * @return string
     */
    public function getSecondaryCategoryId()
    {
        return $this->container['secondaryCategoryId'];
    }

    /**
     * Sets secondaryCategoryId
     *
     * @param  string  $secondaryCategoryId  The unique identifier for a secondary category. This field is applicable if the seller decides to list the item under two categories. Sellers can use the <a href=\"/api-docs/commerce/taxonomy/resources/category_tree/methods/getCategorySuggestions\" target=\"_blank\">getCategorySuggestions</a> method of the Taxonomy API to retrieve suggested category ID values. A fee may be charged when adding a secondary category to a listing. <br/><br/><span class=\"tablenote\"><strong>Note:</strong> You cannot list <strong>US eBay Motors</strong> vehicles in two categories. However, you can list <strong>Parts & Accessories</strong> in two categories.</span>
     *
     * @return $this
     */
    public function setSecondaryCategoryId($secondaryCategoryId)
    {
        $this->container['secondaryCategoryId'] = $secondaryCategoryId;

        return $this;
    }

    /**
     * Gets storeCategoryNames
     *
     * @return string[]
     */
    public function getStoreCategoryNames()
    {
        return $this->container['storeCategoryNames'];
    }

    /**
     * Sets storeCategoryNames
     *
     * @param  string[]  $storeCategoryNames  This container is used if the seller would like to place the inventory item into one or two store categories that the seller has set up for their eBay store. The string value(s) passed in to this container will be the full path(s) to the store categories, as shown below:<br> <pre><code>\"storeCategoryNames\": [<br/> \"/Fashion/Men/Shirts\", <br/> \"/Fashion/Men/Accessories\" ], </pre></code>If this field currently exists for an unpublished or published offer, it should be provided again in an <strong>updateOffer</strong> call, even if the eBay categories are not changing.
     *
     * @return $this
     */
    public function setStoreCategoryNames($storeCategoryNames)
    {
        $this->container['storeCategoryNames'] = $storeCategoryNames;

        return $this;
    }

    /**
     * Gets tax
     *
     * @return Tax
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param  Tax  $tax  tax
     *
     * @return $this
     */
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;

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
