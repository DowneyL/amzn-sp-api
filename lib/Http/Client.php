<?php

namespace SellingPartnerApi\Http;

use GuzzleHttp\Client as GuzzleHttpClient;
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Psr7\Query as GuzzleHttpQuery;
use Psr\Http\Message\RequestInterface;
use SellingPartnerApi\SellingPartner;
use SellingPartnerApi\Http\Query as SellingPartnerQuery;

class Client extends GuzzleHttpClient
{
    /**
     * @var SellingPartner
     */
    protected $sp;

    /**
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        if (empty($config['selling_partner']) || !($config['selling_partner'] instanceof SellingPartner)) {
            $config['selling_partner'] = SellingPartner::instance();
        }
        parent::__construct($config);
        $this->sp = $config['selling_partner'];
    }

    /**
     * Asynchronously send an HTTP request.
     *
     * @param array $options Request options to apply to the given
     *                       request and to the transfer. See \GuzzleHttp\RequestOptions.
     *
     * @return PromiseInterface
     * @throws \Exception
     */
    public function sendAsync(RequestInterface $request, array $options = [])
    {
        $request = Request::transfer($request);
        $request = $this->sp->sign($request, $options);

        return parent::sendAsync($request, $options);
    }
}