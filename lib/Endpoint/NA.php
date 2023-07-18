<?php

namespace SellingPartnerApi\Endpoint;

/**
 * Selling region in North America (Canada, US, Mexico, and Brazil marketplaces)
 */
class NA extends BaseEndpoint
{
    /**
     * @inheritdoc
     * @return string
     */
    public function getHost()
    {
        if ($this->inSandbox()) {
            $host = 'https://sandbox.sellingpartnerapi-na.amazon.com';
        } else {
            $host = 'https://sellingpartnerapi-na.amazon.com';
        }

        return $host;
    }

    /**
     * @inheritdoc
     * @return string
     */
    public function getRegion()
    {
        return 'us-east-1';
    }
}