<?php

namespace SellingPartnerApi\Helpers;

class Api
{
    /**
     * @param $name
     * @return string
     */
    public static function findClassByName($name)
    {
        $dirname = ucfirst(rtrim($name, 'Api'));
        $classname = ucfirst($name);
        $class = "\SellingPartnerApi\Api\\$dirname\\$classname";
        if (class_exists($class)) {
            return $class;
        }

        $map = self::getClassNameMap();
        if (empty($map[$classname])) {
            throw new \RuntimeException("api $name not exists");
        }

        return $map[$classname];
    }

    /**
     * @return array
     */
    private static function getClassNameMap()
    {
        return [
            'AplusContent20201101Api' => '\SellingPartnerApi\Api\AplusContent20201101\AplusContentApi',
            'Catalog20201201Api' => '\SellingPartnerApi\Api\CatalogItems20201201\CatalogApi',
            'Catalog20220401Api' => '\SellingPartnerApi\Api\CatalogItems20220401\CatalogApi',
            'CatalogV0Api' => '\SellingPartnerApi\Api\CatalogItemsV0\CatalogApi',
            'Definitions20200901Api' => '\SellingPartnerApi\Api\DefinitionsProductTypes20200901\DefinitionsApi',
            'EasyShip20220323Api' => '\SellingPartnerApi\Api\EasyShip20220323\EasyShipApi',
            'FbaSmallAndLightApi' => '\SellingPartnerApi\Api\FbaSmallandLight\SmallAndLightApi',
            'Feeds20200904Api' => '\SellingPartnerApi\Api\Feeds20200904\FeedsApi',
            'Feeds20210630Api' => '\SellingPartnerApi\Api\Feeds20210630\FeedsApi',
            'FinancesV0Api' => '\SellingPartnerApi\Api\FinancesV0\DefaultApi',
            'FbaInboundV0Api' => '\SellingPartnerApi\Api\FulfillmentInboundV0\FbaInboundApi',
            'FbaOutbound20200701Api' => '\SellingPartnerApi\Api\FulfillmentOutbound20200701\FbaOutboundApi',
            'Listings20200901Api' => '\SellingPartnerApi\Api\ListingsItems20200901\ListingsApi',
            'Listings20210801Api' => '\SellingPartnerApi\Api\ListingsItems20210801\ListingsApi',
            'ListingsRestrictions20210801Api' => '\SellingPartnerApi\Api\ListingsRestrictions20210801\ListingsApi',
            'MerchantFulfillmentV0Api' => '\SellingPartnerApi\Api\MerchantFulfillmentV0\MerchantFulfillmentApi',
            'ShipmentApi' => '\SellingPartnerApi\Api\OrdersV0\ShipmentApi',
            'ProductFeesV0Api' => '\SellingPartnerApi\Api\ProductFeesV0\FeesApi',
            'ProductPricing20220501Api' => '\SellingPartnerApi\Api\ProductPricing20220501\ProductPricingApi',
            'ProductPricingV0Api' => '\SellingPartnerApi\Api\ProductPricingV0\ProductPricingApi',
            'Offers20221107Api' => '\SellingPartnerApi\Api\Replenishment20221107\OffersApi',
            'Sellingpartners20221107Api' => '\SellingPartnerApi\Api\Replenishment20221107\SellingpartnersApi',
            'Reports20200904Api' => '\SellingPartnerApi\Api\Reports20200904\ReportsApi',
            'Reports20210630Api' => '\SellingPartnerApi\Api\Reports20210630\ReportsApi',
            'ShipmentInvoicingV0Api' => '\SellingPartnerApi\Api\ShipmentInvoicingV0\ShipmentInvoiceApi',
            'Tokens20210301Api' => '\SellingPartnerApi\Api\Tokens20210301\TokensApi',
            'Uploads20201101Api' => '\SellingPartnerApi\Api\Uploads20201101\UploadsApi',
            'VendorDirectFulfillmentInventoryV1Api' => '\SellingPartnerApi\Api\VendorDirectFulfillmentInventoryV1\UpdateInventoryApi',
            'VendorDirectFulfillmentOrders20211228Api' => '\SellingPartnerApi\Api\VendorDirectFulfillmentOrders20211228\VendorOrdersApi',
            'VendorDirectFulfillmentOrdersV1Api' => '\SellingPartnerApi\Api\VendorDirectFulfillmentOrdersV1\VendorOrdersApi',
            'VendorDirectInvoiceV1Api' => '\SellingPartnerApi\Api\VendorDirectFulfillmentPaymentsV1\VendorInvoiceApi',
            'VendorDFSandboxApi' => '\SellingPartnerApi\Api\VendorDirectFulfillmentSandboxData20211028\VendorDFSandboxApi',
            'VendorDFSandboxtransactionstatusApi' => '\SellingPartnerApi\Api\VendorDirectFulfillmentSandboxData20211028\VendorDFSandboxtransactionstatusApi',
            'CustomerInvoices20211228Api' => '\SellingPartnerApi\Api\VendorDirectFulfillmentShipping20211228\CustomerInvoicesApi',
            'VendorShipping20211228Api' => '\SellingPartnerApi\Api\VendorDirectFulfillmentShipping20211228\VendorShippingApi',
            'VendorShippingLabels20211228Api' => '\SellingPartnerApi\Api\VendorDirectFulfillmentShipping20211228\VendorShippingLabelsApi',
            'CustomerInvoicesV1Api' => '\SellingPartnerApi\Api\VendorDirectFulfillmentShippingV1\CustomerInvoicesApi',
            'VendorShippingV1Api' => '\SellingPartnerApi\Api\VendorDirectFulfillmentShippingV1\VendorShippingApi',
            'VendorShippingLabelsV1Api' => '\SellingPartnerApi\Api\VendorDirectFulfillmentShippingV1\VendorShippingLabelsApi',
            'VendorTransaction20211228Api' => '\SellingPartnerApi\Api\VendorDirectFulfillmentTransactions20211228\VendorTransactionApi',
            'VendorTransactionV1Api' => '\SellingPartnerApi\Api\VendorDirectFulfillmentTransactionsV1\VendorTransactionApi',
            'VendorPaymentsApi' => '\SellingPartnerApi\Api\VendorInvoices\VendorPaymentsApi',
            'VendorShippingApi' => '\SellingPartnerApi\Api\VendorShipments\VendorShippingApi',
            'VendorTransactionApi' => '\SellingPartnerApi\Api\VendorTransactionStatus\VendorTransactionApi',
        ];
    }
}