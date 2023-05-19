<?php

namespace SapientPro\EbayInventorySDK\Models;

/**
 * This type is used by the base response of the <strong>bulkGetInventoryItem</strong> method.
 */
class BulkGetInventoryItemResponse implements EbayModelInterface
{
    /**
     * This is the base container of the <strong>bulkGetInventoryItem</strong> response.
     * The results of each attempted inventory item retrieval is captured under this container.
     * @var GetInventoryItemResponse[]
     */
    public array $responses;
}