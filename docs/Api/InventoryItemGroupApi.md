# SapientPro\EbayInventorySDK\InventoryItemGroupApi

All URIs are relative to *https://api.ebay.com/sell/inventory/v1*

| Method                                                                                              | HTTP request                                             | Description |
|-----------------------------------------------------------------------------------------------------|----------------------------------------------------------|-------------|
| [**createOrReplaceInventoryItemGroup**](InventoryItemGroupApi.md#createorreplaceinventoryitemgroup) | **PUT** /inventory_item_group/{inventoryItemGroupKey}    |             |
| [**deleteInventoryItemGroup**](InventoryItemGroupApi.md#deleteinventoryitemgroup)                   | **DELETE** /inventory_item_group/{inventoryItemGroupKey} |             |
| [**getInventoryItemGroup**](InventoryItemGroupApi.md#getinventoryitemgroup)                         | **GET** /inventory_item_group/{inventoryItemGroupKey}    |             |

# **createOrReplaceInventoryItemGroup**
> SapientPro\EbayInventorySDK\Models\BaseResponse createOrReplaceInventoryItemGroup($body, $contentLanguage, $inventoryItemGroupKey)

<span class=\"tablenote\"><strong>Note:</strong> Each listing can be revised up to 250 times in one calendar day. If this revision threshold is reached, the seller will be blocked from revising the item until the next calendar day.</span><br /><br />This call creates a new inventory item group or updates an existing inventory item group. It is up to sellers whether they want to create a complete inventory item group record right from the start, or sellers can provide only some information with the initial <strong>createOrReplaceInventoryItemGroup</strong> call, and then make one or more additional <strong>createOrReplaceInventoryItemGroup</strong> calls to complete the inventory item group record. Upon first creating an inventory item group record, the only required elements are  the <strong>inventoryItemGroupKey</strong> identifier in the call URI, and the members of the inventory item group specified through the <strong>variantSKUs</strong> array in the request payload. <br><br>In the case of updating/replacing an existing inventory item group, this call does a complete replacement of the existing inventory item group record, so all fields (including the member SKUs) that make up the inventory item group are required, regardless of whether their values changed. So, when replacing/updating an inventory item group record, it is advised that the seller run a <strong>getInventoryItemGroup</strong> call for that inventory item group to see all of its current values/settings/members before attempting to update the record. And if changes are made to an inventory item group that is part of a live, multiple-variation eBay listing, these changes automatically update the eBay listing. For example, if a SKU value is removed from the inventory item group, the corresponding product variation will be removed from the eBay listing as well.<br/><br/> In addition to the required inventory item group identifier and member SKUs, other key information that is set with this call include: <ul> <li>Title and description of the inventory item group. The string values provided in these fields will actually become the listing title and listing description of the listing once the first SKU of the inventory item group is published successfully</li> <li>Common aspects that inventory items in the qroup share</li> <li>Product aspects that vary within each product variation</li> <li>Links to images demonstrating the variations of the product, and these images should correspond to the product aspect that is set with the <strong>variesBy.aspectsImageVariesBy</strong> field</li> </ul> <p>In addition to the <code>authorization</code> header, which is required for all eBay REST API calls, the <strong>createOrReplaceInventoryItemGroup</strong> call also requires the <code>Content-Language</code> header, that sets the natural language that will be used in the field values of the request payload. For US English, the code value passed in this header should be <code>en-US</code>. To view other supported <code>Content-Language</code> values, and to read more about all supported HTTP headers for eBay REST API calls, see the <a href=\"/api-docs/static/rest-request-components.html#HTTP\">HTTP request headers</a> topic in the <strong>Using eBay RESTful APIs</strong> document.</p>

### Example
```php
<?php
use SapientPro\EbayInventorySDK\Configuration;
use SapientPro\EbayInventorySDK\Api\InventoryItemGroupApi;
use SapientPro\EbayInventorySDK\Models\InventoryItemGroup;

// Configure OAuth2 access token for authorization: api_auth
$config = Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new EBay\Inventory\Api\InventoryItemGroupApi(
    config: $config
);
$body = new InventoryItemGroup::fromArray([
'aspects' => [
    'pattern' => [
        'solid'
    ],
    'sleeves' => [
        'short'
    ]
],
'title' => 'Men\'s Solid Polo Shirts',
'description' => 'Men\'s solid polo shirts in five colors (Green, Blue, Red, Black, and White), and sizes ranges from small to XL.',
'imageUrls' => [
    'https://i*****g.com/0**********/**********1.jpg'
],
'variantSKUs' => [
    "M**S-GrS",
    "M**S-GrM",
    "M**S-GrL",
    "M**S-GrXL",
    "M**S-BlS",
    "M**S-BlM",
    "M**S-BlL",
    "M**S-BlXL",
    "M**S-RdS",
    "M**S-RdM",
    "M**S-RdL",
    "M**S-RdXL",
    "M**S-BkS",
    "M**S-BkM",
    "M**S-BkL",
    "M**S-BkXL",
    "M**S-WhS",
    "M**S-WhM",
    "M**S-WhL",
    "M**S-WhXL"
]
]);
$inventoryItemGroupKey = "inventoryItemGroupKey_example"; // string | Unique identifier of the inventory item group. This identifier is supplied by the seller. The <strong>inventoryItemGroupKey</strong> value for the inventory item group to create/update is passed in at the end of the call URI. This value cannot be changed once it is set.

try {
    $result = $apiInstance->createOrReplaceInventoryItemGroup($body, \SapientPro\EbayInventorySDK\Enums\LocaleEnum::de_AT, $inventoryItemGroupKey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryItemGroupApi->createOrReplaceInventoryItemGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name                      | Type                                                                                        | Description                                                                                                                                                                                                                                                                                | Notes |
|---------------------------|---------------------------------------------------------------------------------------------|--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|-------|
| **body**                  | [**SapientPro\EbayInventorySDK\Models\InventoryItemGroup**](../Model/InventoryItemGroup.md) | Details of the inventory Item Group                                                                                                                                                                                                                                                        |       |
| **contentLanguage**       | **\SapientPro\EbayInventorySDK\Enums\LocaleEnum**                                           | This request header sets the natural language that will be provided in the field values of the request payload.                                                                                                                                                                            |       |
| **inventoryItemGroupKey** | **string**                                                                                  | Unique identifier of the inventory item group. This identifier is supplied by the seller. The &lt;strong&gt;inventoryItemGroupKey&lt;/strong&gt; value for the inventory item group to create/update is passed in at the end of the call URI. This value cannot be changed once it is set. |       |

### Return type

[**SapientPro\EbayInventorySDK\Models\BaseResponse**](../Model/BaseResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteInventoryItemGroup**
> deleteInventoryItemGroup($inventoryItemGroupKey)

This call deletes the inventory item group for a given <strong>inventoryItemGroupKey</strong> value.

### Example
```php
<?php
use SapientPro\EbayInventorySDK\Configuration;
use SapientPro\EbayInventorySDK\Api\InventoryItemGroupApi;

// Configure OAuth2 access token for authorization: api_auth
$config = Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new EBay\Inventory\Api\InventoryItemGroupApi(
    config: $config
);
$inventoryItemGroupKey = "inventoryItemGroupKey_example"; // string | The unique identifier of an inventory item group. This value is assigned by the seller when an inventory item group is created. The <strong>inventoryItemGroupKey</strong> value for the inventory item group to delete is passed in at the end of the call URI.

try {
    $apiInstance->deleteInventoryItemGroup($inventoryItemGroupKey);
} catch (Exception $e) {
    echo 'Exception when calling InventoryItemGroupApi->deleteInventoryItemGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name                      | Type       | Description                                                                                                                                                                                                                                                                  | Notes |
|---------------------------|------------|------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|-------|
| **inventoryItemGroupKey** | **string** | The unique identifier of an inventory item group. This value is assigned by the seller when an inventory item group is created. The &lt;strong&gt;inventoryItemGroupKey&lt;/strong&gt; value for the inventory item group to delete is passed in at the end of the call URI. |       |

### Return type

void (empty response body)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInventoryItemGroup**
> SapientPro\EbayInventorySDK\Models\InventoryItemGroup getInventoryItemGroup($inventoryItemGroupKey)

This call retrieves the inventory item group for a given <strong>inventoryItemGroupKey</strong> value. The <strong>inventoryItemGroupKey</strong> value is passed in at the end of the call URI.

### Example
```php
<?php
use SapientPro\EbayInventorySDK\Configuration;
use SapientPro\EbayInventorySDK\Api\InventoryItemGroupApi;

// Configure OAuth2 access token for authorization: api_auth
$config = EBay\Inventory\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new InventoryItemGroupApi(
    config: $config
);
$inventoryItemGroupKey = "inventoryItemGroupKey_example"; // string | The unique identifier of an inventory item group. This value is assigned by the seller when an inventory item group is created. The <strong>inventoryItemGroupKey</strong> value for the inventory item group to retrieve is passed in at the end of the call URI.

try {
    $result = $apiInstance->getInventoryItemGroup($inventoryItemGroupKey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryItemGroupApi->getInventoryItemGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name                      | Type       | Description                                                                                                                                                                                                                                                                    | Notes |
|---------------------------|------------|--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|-------|
| **inventoryItemGroupKey** | **string** | The unique identifier of an inventory item group. This value is assigned by the seller when an inventory item group is created. The &lt;strong&gt;inventoryItemGroupKey&lt;/strong&gt; value for the inventory item group to retrieve is passed in at the end of the call URI. |       |

### Return type

[**SapientPro\EbayInventorySDK\Models\InventoryItemGroup**](../Model/InventoryItemGroup.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

