<?php

namespace SellingPartnerApi\Tests\Traits;

use SellingPartnerApi\Endpoint\Endpoint;
use SellingPartnerApi\SellingPartner;

trait Sp
{
    /**
     * @var SellingPartner
     */
    protected $sp;

    /**
     * @param $sandbox
     * @return void
     */
    public function initSellingPartner($sandbox = true)
    {
        Endpoint::$sandbox = $sandbox;
        if ($this->sp) {
            return;
        }

        $this->sp = SellingPartner::instance();
    }
}