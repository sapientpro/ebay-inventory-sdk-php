<?php

namespace SapientPro\EbayInventorySDK\Models;

use SapientPro\EbayInventorySDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * This type is used to identify a motor vehicle that is compatible with the corresponding inventory item (the SKU that is passed in as part of the call URI). The motor vehicle can be identified through an eBay Product ID or a K-Type value. The <strong>gtin</strong> field (for inputting Global Trade Item Numbers) is for future use only. If a motor vehicle is found in the eBay product catalog, the motor vehicle properties (engine, make, model, trim, and year) will automatically get picked up for that motor vehicle.<br><br><span class="tablenote"> <strong>Note:</strong> Currently, parts compatibility is only applicable for motor vehicles, but it is possible that the Product Compatibility feature is expanded to other (non-vehicle) products in the future.</span>
 */
class ProductIdentifier implements EbayModelInterface
{
    use FillsModel;

    /** This field can be used if the seller already knows the eBay catalog product ID (ePID) associated with the motor vehicle that is to be added to the compatible product list. If this eBay catalog product ID is found in the eBay product catalog, the motor vehicle properties (e.g. make, model, year, engine, and trim) will automatically get picked up for that motor vehicle. */
    #[Assert\Type('string')]
    public ?string $epid = null;

    /** This field can be used if the seller knows the Global Trade Item Number for the motor vehicle that is to be added to the compatible product list. If this GTIN value is found in the eBay product catalog, the motor vehicle properties (e.g. make, model, year, engine, and trim will automatically get picked up for that motor vehicle.<br><br><span class="tablenote"> <strong>Note:</strong> This field is for future use.</span> */
    #[Assert\Type('string')]
    public ?string $gtin = null;

    /** This field can be used if the seller knows the K Type Number for the motor vehicle that is to be added to the compatible product list. If this K Type value is found in the eBay product catalog, the motor vehicle properties (e.g. make, model, year, engine, and trim) will automatically get picked up for that motor vehicle. <br><br>Only the AU, DE, ES, FR, IT, and UK marketplaces support the use of K Type Numbers. */
    #[Assert\Type('string')]
    public ?string $ktype = null;
}
