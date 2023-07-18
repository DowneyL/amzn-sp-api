<?php

namespace SellingPartnerApi\Endpoint;

use SellingPartnerApi\Contracts\Endpoint\Endpoint as EndpointContract;

abstract class BaseEndpoint implements EndpointContract
{
    /**
     * @var bool
     */
    protected $sandbox;

    /**
     * @param $sandbox
     */
    public function __construct($sandbox = false)
    {
        $this->sandbox = $sandbox;
    }

    /**
     * Is in the sandbox
     * @return bool
     */
    public function inSandbox()
    {
        return $this->sandbox;
    }

    /**
     * Endpoint
     * @return string
     */
    abstract public function getHost();

    /**
     * Region
     * @return string
     */
    abstract public function getRegion();
}