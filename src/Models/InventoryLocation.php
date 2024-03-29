<?php

namespace SapientPro\EbayInventorySDK\Models;

use SapientPro\EbayInventorySDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * This type is used by the <strong>updateInventoryLocation</strong> call to update operating hours,
 * special hours, phone number, and other minor details of an inventory location.
 */
class InventoryLocation implements EbayModelInterface
{
    use FillsModel;

    /** This text field is used by the merchant to provide/update additional information about an inventory location. Whatever text is passed in this field will replace the current text string defined for this field. If the text will not change, the same text should be passed in once again. <br><br><b>Max length</b>: 256 */
    #[Assert\Type('string')]
    public ?string $locationAdditionalInformation = null;

    /** This text field is generally used by the merchant to provide/update special pickup instructions for a store inventory location. Although this field is optional, it is recommended that merchants provide this field to create a pleasant and easy pickup experience for In-Store Pickup and Click and Collect orders. If this field is not included in the call request payload, eBay will use the default pickup instructions contained in the merchant's profile (if available). Whatever text is passed in this field will replace the current text string defined for this field. If the text will not change, the same text should be passed in once again. <br><br><b>Max length</b>: 1000 */
    #[Assert\Type('string')]
    public ?string $locationInstructions = null;

    /** This text field is used by the merchant to provide/update the Website address (URL) associated with the inventory location. The URL that is passed in this field will replace any other URL that may be defined for this field. <br><br><b>Max length</b>: 512 */
    #[Assert\Type('string')]
    public ?string $locationWebUrl = null;

    /** This text field is used by the merchant to update the name of the inventory location. This name should be a human-friendly name as it will be in In-Store Pickup and Click and Collect listings. A name is not required for warehouse inventory locations. For store inventory locations, this field is not immediately required, but will be required before an offer enabled with the In-Store Pickup or Click and Collect capability can be published. So, if the seller omitted this field in the <strong>createInventoryLocation</strong> call, it is required for an <strong>updateInventoryLocation</strong> call. The name that is passed in this field will replace any other name that may be defined for this field. */
    #[Assert\Type('string')]
    public ?string $name = null;

    /**
     * This container is used to provide/update the regular operating hours for a store location during the
     * days of the week. A <strong>dayOfWeekEnum</strong> field and an <strong>intervals</strong> container
     * will be needed for each day of the week that the store location is open. Note that if operating hours
     * are already set for an inventory location for a specific day of the week, whatever is set through an
     * <strong>updateInventoryLocation</strong> call will override those existing hours.
     *
     * @var OperatingHours[]|null
     */
    #[Assert\Type('array')]
    public ?array $operatingHours = null;

    /** This text field is used by the merchant to provide/update the phone number for the inventory location. The phone number that is passed in this field will replace any other phone number that may be defined for this field. <br><br><b>Max length</b>: 36 */
    #[Assert\Type('string')]
    public ?string $phone = null;

    /**
     * This container is used to provide/update the special operating hours for a store location on a specific
     * date, such as a holiday. The special hours specified for the specific date will override the normal
     * operating hours for that particular day of the week. If special hours have already been set up for an
     * inventory location, specifying special hours through an <strong>updateInventoryLocation</strong> call
     * will only add to the list, unless the date(s) used are the same special date(s) already set up, in
     * which case, the special hours set up through the <strong>updateInventoryLocation</strong> call will
     * override the existing special hours.
     *
     * @var SpecialHours[]
     */
    #[Assert\Type('array')]
    public ?array $specialHours;
}
