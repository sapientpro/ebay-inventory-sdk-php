<?php

namespace SapientPro\EbayInventorySDK\Models;

use SapientPro\EbayInventorySDK\Enums\ListingDurationEnum;

/**
 * This type provides details of an offer,
 * and is used by the base request payload of the <strong>updateOffer</strong> call.
 * Every field that is currently set with the unpublished/published offer
 * must also be passed into the <strong>updateOffer</strong> call,
 * even those fields whose values are not changing.
 * Note that for published offers, a successful <strong>updateOffer</strong>
 * call will actually update the active eBay listing with whatever changes were made.
 */
class EbayOfferDetailsWithId implements EbayModelInterface
{
    /** This integer value sets the quantity of the inventory item that will be available through the offer. Quantity must be set to <code>1</code> or more in order for the inventory item to be purchasable. This value should not be more than the quantity that is specified for the inventory item record. For auction listings, this value must be <code>1</code>. <br><br>If this field exists for the current unpublished or published offer, it should be provided again in the <strong>updateOffer</strong> call, even if the value is not changing. If this particular field is omitted in an <strong>updateOffer</strong> call, the general available quantity set for the inventory item record may be used instead, and this may not be accurate if the inventory item is being sold across multiple marketplaces. */
    public int $availableQuantity;

    /** The unique identifier of the eBay category that the inventory item is/will be listed under. This field is not immediately required for an unpublished offer, but will be required before publishing the offer. Sellers can use the <a href="/api-docs/commerce/taxonomy/resources/category_tree/methods/getCategorySuggestions " target="_blank">getCategorySuggestions</a> method of the Taxonomy API to retrieve suggested category ID values. The seller passes in a query string like "<em>iPhone 6</em>", and category ID values for suggested categories are returned in the response.<br><br>If this field exists for the current unpublished offer, it should be provided again in the <strong>updateOffer</strong> call, even if the eBay category is not changing. For a published offer (aka active eBay listing), this field must be provided or an error may occur. The eBay category of an active eBay listing cannot be changed once the listing has one or more sales, or if the listing is scheduled to end in less than 12 hours. */
    public string $categoryId;

    /**
     * This container is used if the seller wishes to update a published or unpublished offer
     * with a charitable organization that will receive a percentage of sale proceeds
     * for each sale generated by the eBay listing.
     * This container consists of the <strong>charityId</strong> field to identify the charitable organization,
     * and the <strong>donationPercentage</strong> field
     * that indicates the percentage of the sales proceeds
     * that will be donated to the charitable organization for each sale.
     * Both fields in this container are conditionally required for charitable listings.
     * @var Charity
     */
    public Charity $charity;

    /**
     * This container provides IDs for the producer
     * or importer related to the new item, packaging, added documentation, or an eco-participation fee.
     * In some markets, such as in France, this may be the importer of the item.
     * This container is supported by a limited number of sites and specific categories.
     * Use the "/api-docs/sell/metadata/resources/marketplace/methods/getExtendedProducerResponsibilityPolicies"
     * method of the <strong>Sell Metatdata API</strong> to retrieve valid categories for a site.
     * @var ExtendedProducerResponsibility
     */
    public ExtendedProducerResponsibility $extendedProducerResponsibility;

    /** This field is included and set to <code>true</code> if the seller wishes to update a published or unpublished offer with the private listing feature. Alternatively, the seller could also remove the private listing feature (if already set for a published or unpublished offer) by including this field and setting it to <code>false</code>. <br><br> Sellers may want to use this option when they believe that a listing's potential bidders/buyers would not want their obfuscated user IDs (and feedback scores) exposed to other users. */
    public bool $hideBuyerDetails;

    /** This field indicates whether or not eBay product catalog details are applied to a listing. A value of <code>true</code> indicates the listing corresponds to the eBay product associated with the provided product identifier. The product identifier is provided in <strong>createOrReplaceInventoryItem</strong>.<p><span class="tablenote"><strong>Note:</strong> Though the <strong>includeCatalogProductDetails</strong> parameter is not required to be submitted in the request, the parameter defaults to 'true' if omitted.</span></p> */
    public bool $includeCatalogProductDetails;

    /** The text in this field is (published offers), or will become (unpublished offers) the description of the eBay listing. This field is not immediately required for an unpublished offer, but will be required before publishing the offer. Note that if the <strong>listingDescription</strong> field was omitted in the <strong>createOffer</strong> call for the offer, the offer entity should have picked up the text provided in the <strong>product.description</strong> field of the inventory item record, or if the inventory item is part of a group, the offer entity should have picked up the text provided in the <strong>description</strong> field of the inventory item group record.<br><br>HTML tags and markup can be used in listing descriptions, but each character counts toward the max length limit.<br><br><span class="tablenote"> <strong>Note:</strong> To ensure that their short listing description is optimized when viewed on mobile devices, sellers should strongly consider using eBay's <a href="https://pages.ebay.com/sell/itemdescription/customizeyoursummary.html " target="_blank">View Item description summary feature</a> when listing their items. Keep in mind that the 'short' listing description is what prospective buyers first see when they view the listing on a mobile device. The 'full' listing description is also available to mobile users when they click on the short listing description, but the full description is not automatically optimized for viewing in mobile devices, and many users won't even drill down to the full description.<br><br> Using HTML div and span tag attributes, this feature allows sellers to customize and fully control the short listing description that is displayed to prospective buyers when viewing the listing on a mobile device. The short listing description on mobile devices is limited to 800 characters, and whenever the full listing description (provided in this field, in UI, or seller tool) exceeds this limit, eBay uses a special algorithm to derive the best possible short listing description within the 800-character limit. However, due to some short listing description content being removed, it is definitely not ideal for the seller, and could lead to a bad buyer experience and possibly to a Significantly not as described (SNAD) case, since the buyer may not get complete details on the item when viewing the short listing description. See the eBay help page for more details on using the HTML div and span tags.</span><br><br>If this field exists for the current unpublished offer, it should be provided again in the <strong>updateOffer</strong> call, even if the text is not changing. For a published offer (aka active eBay listing), this field must be provided or an error may occur.<br><br><strong>Max length</strong>: 500000 (which includes HTML markup/tags) */
    public string $listingDescription;

    /**
     * This field indicates the number of days that the listing will be active.
     * For fixed-price listings, this value must be set to <code>GTC</code>,
     * but auction listings support different listing durations.
     * <br><br> The GTC (Good 'Til Cancelled) listings are automatically renewed each calendar month
     * until the seller decides to end the listing.
     * <br><br><span class="tablenote"> <strong>Note:</strong>
     * If the listing duration expires for an auction offer without a winning bidder,
     * the listing then becomes available as a fixed-price offer and listing duration will be <code>GTC</code>.</span>
     * For implementation help, refer to
     * https://developer.ebay.com/api-docs/sell/inventory/types/slr:ListingDurationEnum
     *
     * @var ListingDurationEnum
     */
    public ListingDurationEnum $listingDuration;

    /**
     * This container sets listing policies that will be used to construct the listing.
     * Listing policies include business policies, custom listing policies, and fields that override shipping costs,
     * enable eBay Plus eligibility, or enable the Best Offer feature.
     * This container is not initially required when creating an offer
     * but will become required before the offer can be published.
     * Busines policies (payment, return, fulfillment policies) will always be required before publishing an offer.
     * Other policies, including the seller created compliance policies and seller created take-back policy,
     * will be required as needed by the marketplace, category, or product.
     * <br><br>This container is required for updating published offers,
     * regardless of whether or not the business policies are being changed.
     * For an unpublished offer, this field is not necessarily required,
     * but will be required before an offer can be published.
     * <br><br>It is required that the seller be opted in to
     * Business Policies before being able to create live eBay listings through the Inventory API.
     * Sellers can opt-in to Business Policies through
     * My eBay or by using the Account API's <strong>optInToProgram</strong> call.
     * Similarly, payment, return, and fulfillment business policies may be created/managed in
     * My eBay or by using the business policy calls of the <strong>Account API</strong>.
     * @var ListingPolicies
     */
    public ListingPolicies $listingPolicies;

    /** This field can be used with an unpublished offer if the seller wants to specify a time in the future that the listing will become active on eBay. The timestamp supplied in this field should be in UTC format, and it should be far enough in the future so that the seller will have enough time to publish the listing with the <strong>publishOffer</strong> method.<br><br> This field is optional, and it doesn't apply to offers where the corresponding listing is already active. If this field is not provided, the listing starts immediately after a successful <strong>publishOffer</strong> method. */
    public string $listingStartDate;

    /** This field is only applicable if the listing is a lot listing. A lot listing is a listing that has multiple quantity of the same item, such as four identical tires being sold as a single offer, or it can be a mixed lot of similar items, such as used clothing items or an assortment of baseball cards. Whether the lot listing involved identical items or a mixed lot, the integer value passed into this field is the total number of items in the lot. Lots can be used for auction and fixed-price listings. */
    public int $lotSize;

    /** The unique identifier of a merchant's inventory location (where the inventory item in the offer is located). A <strong>merchantLocationKey</strong> value is established when the merchant creates an inventory location using the <strong>createInventoryLocation</strong> call. To get more information about inventory locations, the <strong>getInventoryLocation</strong> call can be used.<br><br>This field is not initially required upon first creating an offer, but will become required before an offer can be published.<br><br><b>Max length</b>: 36 */
    public string $merchantLocationKey;

    /**
     * This container shows the listing price for the product offer, and if applicable,
     * the settings for the Minimum Advertised Price and Strikethrough Pricing features.
     * The Minimum Advertised Price feature is only available on the US site.
     * Strikethrough Pricing is available on the
     * US, eBay Motors, UK, Germany, Canada (English and French), France, Italy, and Spain sites.
     * <br><br>This container is required for updating published offers,
     * regardless of whether or not the pricing information is being changed or not.
     * For an unpublished offer, this container is not necessarily required,
     * but an offer price will be required before an offer can be published,
     * and if a <strong>pricingSummary</strong> container already exists for an unpublished offer,
     * it must be provided again, even if the values are not changing.
     * @var PricingSummary
     */
    public PricingSummary $pricingSummary;

    /** This field is only applicable and set if the seller wishes to set a restriction on the purchase quantity per seller. If this field is set by the seller for the offer, then each distinct buyer may purchase up to, but not exceeding the quantity specified for this field. So, if this field's value is <code>5</code>, each buyer may purchase between one to five of these products, and the purchases can occur in one multiple-quantity purchase, or over multiple transactions. If a buyer attempts to purchase one or more of these products, and the cumulative quantity will take the buyer beyond the quantity limit, that buyer will be blocked from that purchase.<br><br>If this field currently exists for an unpublished or published offer, it should be provided again in an <strong>updateOffer</strong> call, even if the value is not changing.<br> */
    public int $quantityLimitPerBuyer;

    /**
     * <span class="tablenote">This container, as well as its child containers and fields,
     * will not be available until March 1, 2023.
     * </span><br><br>This container is used by the seller to provide hazardous material related information
     * and the repair score for the listing.
     * @var Regulatory
     */
    public Regulatory $regulatory;

    /** The unique identifier for a secondary category. This field is applicable if the seller decides to list the item under two categories. Sellers can use the <a href="/api-docs/commerce/taxonomy/resources/category_tree/methods/getCategorySuggestions" target="_blank">getCategorySuggestions</a> method of the Taxonomy API to retrieve suggested category ID values. A fee may be charged when adding a secondary category to a listing. <br><br><span class="tablenote"><strong>Note:</strong> You cannot list <strong>US eBay Motors</strong> vehicles in two categories. However, you can list <strong>Parts & Accessories</strong> in two categories.</span> */
    public string $secondaryCategoryId;

    /**
     * This container is used if the seller would like to place the inventory item into
     * one or two store categories that the seller has set up for their eBay store.
     * The string value(s) passed in to this container will be the full path(s) to the store categories, as shown below:
     * <pre><code>
     * "storeCategoryNames": [<br> "/Fashion/Men/Shirts", <br> "/Fashion/Men/Accessories" ],
     * </pre></code>
     * If this field currently exists for an unpublished or published offer,
     * it should be provided again in an <strong>updateOffer</strong> call,
     * even if the eBay categories are not changing.
     * @var string[]
     */
    public array $storeCategoryNames;

    /**
     * This container is only applicable and used if a sales tax table,
     * a Value-Added Tax (VAT) rate, or a tax exception category code will be applied to the offer.
     * Only Business Sellers can apply VAT to their listings.
     * It is possible that the <strong>applyTax</strong> field will be included with a value of <code>true</code>,
     * but a buyer's purchase will not involve sales tax.
     * A sales tax rate must be set up in the seller's sales tax table for the buyer's
     * state/tax jurisdiction in order for that buyer to be subject to sales tax.
     * Sales tax rates for different jurisdictions can be added/modified in the
     * Payment Preferences section of My eBay, or the seller can use the sales tax calls of the Account API.
     * <br><br>If tax information currently exists for an unpublished or published offer,
     * it should be provided again in an <strong>updateOffer</strong> call,
     * even if none of the tax settings are changing.
     * <br><br>See the https://pages.ebay.com/help/pay/checkout-tax-table.html
     * help page for more information on setting up and using a sales tax table.
     * @var Tax
     */
    public Tax $tax;
}