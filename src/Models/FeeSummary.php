<?php

namespace SapientPro\EbayInventorySDK\Models;

use SapientPro\EbayInventorySDK\Enums\MarketplaceEnum;

/**
 * This type is used to display the expected listing fees for each unpublished offer
 * specified in the request of the <strong>getListingFees</strong> call.
 */
class FeeSummary implements EbayModelInterface
{
    /**
     * This container is an array of listing fees that can be expected to be applied to
     * an offer on the specified eBay marketplace (<strong>marketplaceId</strong> value).
     * Many fee types will get returned even when they are <code>0.0</code>.
     * <br><br>See the https://pages.ebay.com/help/sell/fees.html help page for more information on listing fees.
     * @var Fee[]
     */
    public array $fees;

    /**
     * This is the unique identifier of the eBay site for which  listing fees for the offer are applicable.
     * For implementation help, refer to https://developer.ebay.com/api-docs/sell/inventory/types/slr:MarketplaceEnum
     */
    public MarketplaceEnum $marketplaceId;

    /**
     * This container will contain an array of errors and/or warnings
     * when a call is made, and errors and/or warnings occur.
     * @var Error[]
     */
    public array $warnings;
}