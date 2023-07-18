<?php

namespace SellingPartnerApi\Contracts\Auth;

use Psr\Http\Message\RequestInterface;

interface Signable
{
    /**
     * @return RequestInterface
     */
    public function sign(RequestInterface $request);
}