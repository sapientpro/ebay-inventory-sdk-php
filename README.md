# eBayInventorySdk
The Inventory API is used to create and manage inventory, and then to publish and manage this inventory on an eBay marketplace. There are also methods in this API that will convert eligible, active eBay listings into the Inventory API model.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.16.2
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

- PHP 8.1 and later
- ext-curl and ext-json extensions enabled

## Installation & Usage

Install the package using composer:

```sh
composer require sapientpro/ebay-account-sdk-php
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
use SapientPro\EbayInventorySDK\Configuration;
use SapientPro\EbayInventorySDK\Api\InventoryItemApi;
use SapientPro\EbayInventorySDK\Models\BulkInventoryItem;

// Configure OAuth2 access token for authorization: api_auth
$config = Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new InventoryItemApi(
    config: $config
);
// you can create and fill a Model class that implements EbayModelInterface using fromArray() method
// exception will be thrown if a property does not exist in the model class
$body = BulkInventoryItem::fromArray([]);

try {
    $result = $apiInstance->bulkCreateOrReplaceInventoryItem($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryItemApi->bulkCreateOrReplaceInventoryItem: ', $e->getMessage(), PHP_EOL;
}
```

## Creating Models

Some SDK methods require `$body` variable as a parameter. It refers to a Model class that implements EbayModelInterface.
There are several ways to create a Model class:

### fromArray()
You can create a Model class using fromArray() method.
It will throw an exception if a property does not exist in the model class.

If the model has a property of type that implements EbayModelInterface, you must create an instance of that class using fromArray() method.
In this example, the property `price` is of type `ConvertedAmount` that also implements EbayModelInterface.

```php
Item::fromArray([
    'price' => ConvertedAmount::fromArray([
        'value' => '6.90',
        'currency' => CurrencyCodeEnum::USD
    )]
])
```
### fromPlainArray()

It is also possible to create a Model from plain associative array.
The previous example can be rewritten as follows:

```php
Item::fromPlainArray([
    'price' => [
        'value' => '6.90',
        'currency' => CurrencyCodeEnum::USD
    ]
])
```

### fromJson()

It is also possible to create a Model from JSON string.

```php
Item::fromJson('{"price": {"value": "6.90", "currency": "USD"}}')
```

## Documentation for API Endpoints

All URIs are relative to *https://api.ebay.com/sell/inventory/v1*

| Class                     | Method                                                                                                             | HTTP request                                                     | Description |
|---------------------------|--------------------------------------------------------------------------------------------------------------------|------------------------------------------------------------------|-------------|
| *InventoryItemApi*        | [**bulkCreateOrReplaceInventoryItem**](docs/Api/InventoryItemApi.md#bulkcreateorreplaceinventoryitem)              | **POST** /bulk_create_or_replace_inventory_item                  |             |
| *InventoryItemApi*        | [**bulkGetInventoryItem**](docs/Api/InventoryItemApi.md#bulkgetinventoryitem)                                      | **POST** /bulk_get_inventory_item                                |             |
| *InventoryItemApi*        | [**bulkUpdatePriceQuantity**](docs/Api/InventoryItemApi.md#bulkupdatepricequantity)                                | **POST** /bulk_update_price_quantity                             |             |
| *InventoryItemApi*        | [**createOrReplaceInventoryItem**](docs/Api/InventoryItemApi.md#createorreplaceinventoryitem)                      | **PUT** /inventory_item/{sku}                                    |             |
| *InventoryItemApi*        | [**deleteInventoryItem**](docs/Api/InventoryItemApi.md#deleteinventoryitem)                                        | **DELETE** /inventory_item/{sku}                                 |             |
| *InventoryItemApi*        | [**getInventoryItem**](docs/Api/InventoryItemApi.md#getinventoryitem)                                              | **GET** /inventory_item/{sku}                                    |             |
| *InventoryItemApi*        | [**getInventoryItems**](docs/Api/InventoryItemApi.md#getinventoryitems)                                            | **GET** /inventory_item                                          |             |
| *InventoryItemGroupApi*   | [**createOrReplaceInventoryItemGroup**](docs/Api/InventoryItemGroupApi.md#createorreplaceinventoryitemgroup)       | **PUT** /inventory_item_group/{inventoryItemGroupKey}            |             |
| *InventoryItemGroupApi*   | [**deleteInventoryItemGroup**](docs/Api/InventoryItemGroupApi.md#deleteinventoryitemgroup)                         | **DELETE** /inventory_item_group/{inventoryItemGroupKey}         |             |
| *InventoryItemGroupApi*   | [**getInventoryItemGroup**](docs/Api/InventoryItemGroupApi.md#getinventoryitemgroup)                               | **GET** /inventory_item_group/{inventoryItemGroupKey}            |             |
| *ListingApi*              | [**bulkMigrateListing**](docs/Api/ListingApi.md#bulkmigratelisting)                                                | **POST** /bulk_migrate_listing                                   |             |
| *LocationApi*             | [**createInventoryLocation**](docs/Api/LocationApi.md#createinventorylocation)                                     | **POST** /location/{merchantLocationKey}                         |             |
| *LocationApi*             | [**deleteInventoryLocation**](docs/Api/LocationApi.md#deleteinventorylocation)                                     | **DELETE** /location/{merchantLocationKey}                       |             |
| *LocationApi*             | [**disableInventoryLocation**](docs/Api/LocationApi.md#disableinventorylocation)                                   | **POST** /location/{merchantLocationKey}/disable                 |             |
| *LocationApi*             | [**enableInventoryLocation**](docs/Api/LocationApi.md#enableinventorylocation)                                     | **POST** /location/{merchantLocationKey}/enable                  |             |
| *LocationApi*             | [**getInventoryLocation**](docs/Api/LocationApi.md#getinventorylocation)                                           | **GET** /location/{merchantLocationKey}                          |             |
| *LocationApi*             | [**getInventoryLocations**](docs/Api/LocationApi.md#getinventorylocations)                                         | **GET** /location                                                |             |
| *LocationApi*             | [**updateInventoryLocation**](docs/Api/LocationApi.md#updateinventorylocation)                                     | **POST** /location/{merchantLocationKey}/update_location_details |             |
| *OfferApi*                | [**bulkCreateOffer**](docs/Api/OfferApi.md#bulkcreateoffer)                                                        | **POST** /bulk_create_offer                                      |             |
| *OfferApi*                | [**bulkPublishOffer**](docs/Api/OfferApi.md#bulkpublishoffer)                                                      | **POST** /bulk_publish_offer                                     |             |
| *OfferApi*                | [**createOffer**](docs/Api/OfferApi.md#createoffer)                                                                | **POST** /offer                                                  |             |
| *OfferApi*                | [**deleteOffer**](docs/Api/OfferApi.md#deleteoffer)                                                                | **DELETE** /offer/{offerId}                                      |             |
| *OfferApi*                | [**getListingFees**](docs/Api/OfferApi.md#getlistingfees)                                                          | **POST** /offer/get_listing_fees                                 |             |
| *OfferApi*                | [**getOffer**](docs/Api/OfferApi.md#getoffer)                                                                      | **GET** /offer/{offerId}                                         |             |
| *OfferApi*                | [**getOffers**](docs/Api/OfferApi.md#getoffers)                                                                    | **GET** /offer                                                   |             |
| *OfferApi*                | [**publishOffer**](docs/Api/OfferApi.md#publishoffer)                                                              | **POST** /offer/{offerId}/publish/                               |             |
| *OfferApi*                | [**publishOfferByInventoryItemGroup**](docs/Api/OfferApi.md#publishofferbyinventoryitemgroup)                      | **POST** /offer/publish_by_inventory_item_group/                 |             |
| *OfferApi*                | [**updateOffer**](docs/Api/OfferApi.md#updateoffer)                                                                | **PUT** /offer/{offerId}                                         |             |
| *OfferApi*                | [**withdrawOffer**](docs/Api/OfferApi.md#withdrawoffer)                                                            | **POST** /offer/{offerId}/withdraw                               |             |
| *OfferApi*                | [**withdrawOfferByInventoryItemGroup**](docs/Api/OfferApi.md#withdrawofferbyinventoryitemgroup)                    | **POST** /offer/withdraw_by_inventory_item_group                 |             |
| *ProductCompatibilityApi* | [**createOrReplaceProductCompatibility**](docs/Api/ProductCompatibilityApi.md#createorreplaceproductcompatibility) | **PUT** /inventory_item/{sku}/product_compatibility              |             |
| *ProductCompatibilityApi* | [**deleteProductCompatibility**](docs/Api/ProductCompatibilityApi.md#deleteproductcompatibility)                   | **DELETE** /inventory_item/{sku}/product_compatibility           |             |
| *ProductCompatibilityApi* | [**getProductCompatibility**](docs/Api/ProductCompatibilityApi.md#getproductcompatibility)                         | **GET** /inventory_item/{sku}/product_compatibility              |             |

## Documentation For Models

 - [Address](docs/Model/Address.md)
 - [Amount](docs/Model/Amount.md)
 - [Availability](docs/Model/Availability.md)
 - [AvailabilityDistribution](docs/Model/AvailabilityDistribution.md)
 - [AvailabilityWithAll](docs/Model/AvailabilityWithAll.md)
 - [BaseResponse](docs/Model/BaseResponse.md)
 - [BestOffer](docs/Model/BestOffer.md)
 - [BulkEbayOfferDetailsWithKeys](docs/Model/BulkEbayOfferDetailsWithKeys.md)
 - [BulkGetInventoryItem](docs/Model/BulkGetInventoryItem.md)
 - [BulkGetInventoryItemResponse](docs/Model/BulkGetInventoryItemResponse.md)
 - [BulkInventoryItem](docs/Model/BulkInventoryItem.md)
 - [BulkInventoryItemResponse](docs/Model/BulkInventoryItemResponse.md)
 - [BulkMigrateListing](docs/Model/BulkMigrateListing.md)
 - [BulkMigrateListingResponse](docs/Model/BulkMigrateListingResponse.md)
 - [BulkOffer](docs/Model/BulkOffer.md)
 - [BulkOfferResponse](docs/Model/BulkOfferResponse.md)
 - [BulkPriceQuantity](docs/Model/BulkPriceQuantity.md)
 - [BulkPriceQuantityResponse](docs/Model/BulkPriceQuantityResponse.md)
 - [BulkPublishResponse](docs/Model/BulkPublishResponse.md)
 - [Charity](docs/Model/Charity.md)
 - [Compatibility](docs/Model/Compatibility.md)
 - [CompatibleProduct](docs/Model/CompatibleProduct.md)
 - [Dimension](docs/Model/Dimension.md)
 - [EbayOfferDetailsWithAll](docs/Model/EbayOfferDetailsWithAll.md)
 - [EbayOfferDetailsWithId](docs/Model/EbayOfferDetailsWithId.md)
 - [EbayOfferDetailsWithKeys](docs/Model/EbayOfferDetailsWithKeys.md)
 - [Error](docs/Model/Error.md)
 - [ErrorParameter](docs/Model/ErrorParameter.md)
 - [ExtendedProducerResponsibility](docs/Model/ExtendedProducerResponsibility.md)
 - [Fee](docs/Model/Fee.md)
 - [FeeSummary](docs/Model/FeeSummary.md)
 - [FeesSummaryResponse](docs/Model/FeesSummaryResponse.md)
 - [FormatAllocation](docs/Model/FormatAllocation.md)
 - [GeoCoordinates](docs/Model/GeoCoordinates.md)
 - [GetInventoryItem](docs/Model/GetInventoryItem.md)
 - [GetInventoryItemResponse](docs/Model/GetInventoryItemResponse.md)
 - [Interval](docs/Model/Interval.md)
 - [InventoryItem](docs/Model/InventoryItem.md)
 - [InventoryItemGroup](docs/Model/InventoryItemGroup.md)
 - [InventoryItemListing](docs/Model/InventoryItemListing.md)
 - [InventoryItemResponse](docs/Model/InventoryItemResponse.md)
 - [InventoryItemWithSkuLocale](docs/Model/InventoryItemWithSkuLocale.md)
 - [InventoryItemWithSkuLocaleGroupKeys](docs/Model/InventoryItemWithSkuLocaleGroupKeys.md)
 - [InventoryItemWithSkuLocaleGroupid](docs/Model/InventoryItemWithSkuLocaleGroupid.md)
 - [InventoryItems](docs/Model/InventoryItems.md)
 - [InventoryLocation](docs/Model/InventoryLocation.md)
 - [InventoryLocationFull](docs/Model/InventoryLocationFull.md)
 - [InventoryLocationResponse](docs/Model/InventoryLocationResponse.md)
 - [ListingDetails](docs/Model/ListingDetails.md)
 - [ListingPolicies](docs/Model/ListingPolicies.md)
 - [Location](docs/Model/Location.md)
 - [LocationDetails](docs/Model/LocationDetails.md)
 - [LocationResponse](docs/Model/LocationResponse.md)
 - [MigrateListing](docs/Model/MigrateListing.md)
 - [MigrateListingResponse](docs/Model/MigrateListingResponse.md)
 - [NameValueList](docs/Model/NameValueList.md)
 - [OfferKeyWithId](docs/Model/OfferKeyWithId.md)
 - [OfferKeysWithId](docs/Model/OfferKeysWithId.md)
 - [OfferPriceQuantity](docs/Model/OfferPriceQuantity.md)
 - [OfferResponse](docs/Model/OfferResponse.md)
 - [OfferResponseWithListingId](docs/Model/OfferResponseWithListingId.md)
 - [OfferSkuResponse](docs/Model/OfferSkuResponse.md)
 - [Offers](docs/Model/Offers.md)
 - [OperatingHours](docs/Model/OperatingHours.md)
 - [PackageWeightAndSize](docs/Model/PackageWeightAndSize.md)
 - [PickupAtLocationAvailability](docs/Model/PickupAtLocationAvailability.md)
 - [PriceQuantity](docs/Model/PriceQuantity.md)
 - [PriceQuantityResponse](docs/Model/PriceQuantityResponse.md)
 - [PricingSummary](docs/Model/PricingSummary.md)
 - [Product](docs/Model/Product.md)
 - [ProductFamilyProperties](docs/Model/ProductFamilyProperties.md)
 - [ProductIdentifier](docs/Model/ProductIdentifier.md)
 - [PublishByInventoryItemGroupRequest](docs/Model/PublishByInventoryItemGroupRequest.md)
 - [PublishResponse](docs/Model/PublishResponse.md)
 - [ShipToLocationAvailability](docs/Model/ShipToLocationAvailability.md)
 - [ShipToLocationAvailabilityWithAll](docs/Model/ShipToLocationAvailabilityWithAll.md)
 - [ShippingCostOverride](docs/Model/ShippingCostOverride.md)
 - [SpecialHours](docs/Model/SpecialHours.md)
 - [Specification](docs/Model/Specification.md)
 - [Tax](docs/Model/Tax.md)
 - [TimeDuration](docs/Model/TimeDuration.md)
 - [VariesBy](docs/Model/VariesBy.md)
 - [Version](docs/Model/Version.md)
 - [Weight](docs/Model/Weight.md)
 - [WithdrawByInventoryItemGroupRequest](docs/Model/WithdrawByInventoryItemGroupRequest.md)
 - [WithdrawResponse](docs/Model/WithdrawResponse.md)

## Authorization

## api_auth

- **Type**: OAuth
- **Flow**: accessCode
- **Authorization URL**: https://auth.ebay.com/oauth2/authorize
- **Scopes**: 
 - **https://api.ebay.com/oauth/api_scope/sell.inventory**: View and manage your inventory and offers
 - **https://api.ebay.com/oauth/api_scope/sell.inventory.readonly**: View your inventory and offers
