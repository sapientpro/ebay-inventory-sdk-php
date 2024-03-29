<?php

namespace SapientPro\EbayInventorySDK\Models;

use SapientPro\EbayInventorySDK\Models\Concerns\FillsModel;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * A complex type that is used to provide the physical address of a location, and it geo-coordinates.
 */
class Location implements EbayModelInterface
{
    use FillsModel;

    /**
     * The <strong>address</strong> container is always returned in <strong>getInventoryLocation</strong>/
     * <strong>getInventoryLocations</strong> calls. Except in the case of an inventory location that supports In-Store
     * Pickup inventory, a full address is not a requirement when setting up an inventory location.
     *
     * @var Address
     */
    #[Assert\Type(Address::class)]
    public Address $address;

    /**
     * This container displays the Global Positioning System (GPS) latitude and longitude coordinates for the inventory location.
     * This container is only returned if the geo-coordinates are set for an inventory location.
     *
     * @var GeoCoordinates|null
     */
    #[Assert\Type(GeoCoordinates::class)]
    public ?GeoCoordinates $geoCoordinates;

    /** A unique eBay-assigned ID for the location. <br><br> <span class="tablenote"> <strong>Note:</strong> This field should not be confused with the seller-defined <b>merchantLocationKey</b> value. It is the <b>merchantLocationKey</b> value which is used to identify an inventory location when working with inventory location API calls. The <strong>locationId</strong> value is only used internally by eBay.</span> */
    #[Assert\Type('string')]
    public ?string $locationId = null;
}
