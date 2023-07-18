<?php

namespace SellingPartnerApi\Endpoint;

/**
 * Europe (Spain, UK, France, Belgium, Netherlands, Germany, Italy, Sweden,
 * South Africa, Poland, Saudi Arabia, Egypt, Turkey, United Arab Emirates,
 * and India marketplaces)
 */
class EU extends BaseEndpoint
{
    /**
     * @inheritdoc
     * @return string
     */
    public function getHost()
    {
        if ($this->inSandbox()) {
            $host = 'https://sandbox.sellingpartnerapi-eu.amazon.com';
        } else {
            $host = 'https://sellingpartnerapi-eu.amazon.com';
        }

        return $host;
    }

    /**
     * @inheritdoc
     * @return string
     */
    public function getRegion()
    {
        return 'eu-west-1';
    }
}