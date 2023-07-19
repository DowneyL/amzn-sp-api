<?php

namespace SellingPartnerApi\Contracts\Auth;

use SellingPartnerApi\Http\Request;

interface Signable
{
    /**
     * @return Request
     */
    public function sign(Request $request);
}