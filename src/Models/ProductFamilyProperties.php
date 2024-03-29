<?php

namespace SapientPro\EbayInventorySDK\Models;

use SapientPro\EbayInventorySDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * This type is used to specify the details of a motor vehicle that is compatible with the inventory item specified through the SKU value in the call URI.
 */
class ProductFamilyProperties implements EbayModelInterface
{
    use FillsModel;

    /** This field indicates the specifications of the engine, including its size, block type, and fuel type. An example is <code>2.7L V6 gas DOHC naturally aspirated</code>. This field is conditionally required, but should be supplied if known/applicable. */
    #[Assert\Type('string')]
    public ?string $engine = null;

    /** This field indicates the make of the vehicle (e.g. <code>Toyota</code>). This field is always required to identify a motor vehicle. */
    #[Assert\Type('string')]
    public ?string $make = null;

    /** This field indicates the model of the vehicle (e.g. <code>Camry</code>). This field is always required to identify a motor vehicle. */
    #[Assert\Type('string')]
    public ?string $model = null;

    /** This field indicates the trim of the vehicle (e.g. <code>2-door Coupe</code>). This field is conditionally required, but should be supplied if known/applicable. */
    #[Assert\Type('string')]
    public ?string $trim = null;

    /** This field indicates the year of the vehicle (e.g. <code>2016</code>). This field is always required to identify a motor vehicle. */
    #[Assert\Type('string')]
    public ?string $year = null;
}
