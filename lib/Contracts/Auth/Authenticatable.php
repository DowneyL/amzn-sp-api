<?php

namespace SellingPartnerApi\Contracts\Auth;

use Psr\Http\Message\RequestInterface;

interface Authenticatable
{
    /**
     * @return Authenticatable
     */
    public function auth();
}