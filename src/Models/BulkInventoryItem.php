<?php

namespace SapientPro\EbayInventorySDK\Models;

/**
 * The base request of the <strong>bulkCreateOrReplaceInventoryItem</strong> method.
 */
class BulkInventoryItem implements EbayModelInterface
{
    /**
     * The details of each inventory item that is being created or updated is passed in under this container.
     * Up to 25 inventory item records can be created and/or updated
     * with one <strong>bulkCreateOrReplaceInventoryItem</strong> call.
     * @var InventoryItemWithSkuLocale[]
     */
    public array $requests;
}