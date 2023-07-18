<?php

namespace SellingPartnerApi\Contracts\Endpoint;

interface Endpoint
{
    /**
     * Endpoint
     * @return string
     */
    public function getHost();

    /**
     * Region
     * @return string
     */
    public function getRegion();

    /**
     * Is in the sandbox
     * @return bool
     */
    public function inSandbox();
}