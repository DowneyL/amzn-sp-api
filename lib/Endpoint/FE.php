<?php

namespace SellingPartnerApi\Endpoint;

/**
 * Far East (Singapore, Australia, and Japan marketplaces)
 */
class FE extends BaseEndpoint
{
    /**
     * @inheritdoc
     * @return string
     */
    public function getHost()
    {
        if ($this->inSandbox()) {
            $host = 'https://sandbox.sellingpartnerapi-fe.amazon.com';
        } else {
            $host = 'https://sellingpartnerapi-fe.amazon.com';
        }

        return $host;
    }

    /**
     * @inheritdoc
     * @return string
     */
    public function getRegion()
    {
        return 'us-west-2';
    }
}