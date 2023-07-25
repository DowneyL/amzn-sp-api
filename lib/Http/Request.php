<?php

namespace SellingPartnerApi\Http;

use GuzzleHttp\Psr7\Query as GuzzleHttpQuery;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\StreamInterface;
use Psr\Http\Message\UriInterface;
use SellingPartnerApi\Http\Query as SellingPartnerQuery;

class Request implements RequestInterface
{
    /**
     * @var RequestInterface
     */
    protected $request;

    /**
     * @param RequestInterface $request
     * @param $transfer
     */
    public function __construct(RequestInterface $request, $transfer = true)
    {
        $this->request = $request;
        if ($transfer) {
            return self::transfer($request);
        }
    }

    /**
     * transfer request into a selling partner request
     * @param RequestInterface $request
     * @return RequestInterface
     */
    public static function transfer(RequestInterface $request)
    {
        $query = $request->getUri()->getQuery();
        $query = GuzzleHttpQuery::parse($query);
        $query = SellingPartnerQuery::build($query);
        $uri = $request->getUri()->withQuery($query);
        $request = $request->withUri($uri);

        return new self($request, false);
    }

    /**
     * @inheritDoc
     */
    public function getProtocolVersion()
    {
        return $this->request->getProtocolVersion();
    }

    /**
     * @inheritDoc
     */
    public function withProtocolVersion($version)
    {

        return $this->request->withProtocolVersion($version);
    }

    /**
     * @inheritDoc
     */
    public function getHeaders()
    {
        return $this->request->getHeaders();
    }

    /**
     * @inheritDoc
     */
    public function hasHeader($name)
    {
        return $this->request->hasHeader($name);
    }

    /**
     * @inheritDoc
     */
    public function getHeader($name)
    {
        return $this->request->getHeader($name);
    }

    /**
     * @inheritDoc
     */
    public function getHeaderLine($name)
    {
        return $this->request->getHeaderLine($name);
    }

    /**
     * @inheritDoc
     */
    public function withHeader($name, $value)
    {
        return $this->request->withHeader($name, $value);
    }

    /**
     * @inheritDoc
     */
    public function withAddedHeader($name, $value)
    {
        return $this->request->withAddedHeader($name, $value);
    }

    /**
     * @inheritDoc
     */
    public function withoutHeader($name)
    {
        return $this->request->withoutHeader($name);
    }

    /**
     * @inheritDoc
     */
    public function getBody()
    {
        return $this->request->getBody();
    }

    /**
     * @inheritDoc
     */
    public function withBody(StreamInterface $body)
    {
        return $this->request->withBody($body);
    }

    /**
     * @inheritDoc
     */
    public function getRequestTarget()
    {
        return $this->request->getRequestTarget();
    }

    /**
     * @inheritDoc
     */
    public function withRequestTarget($requestTarget)
    {
        return $this->request->withRequestTarget($requestTarget);
    }

    /**
     * @inheritDoc
     */
    public function getMethod()
    {
        return $this->request->getMethod();
    }

    /**
     * @inheritDoc
     */
    public function withMethod($method)
    {
        return $this->request->withMethod($method);
    }

    /**
     * @inheritDoc
     */
    public function getUri()
    {
        return $this->request->getUri();
    }

    /**
     * @inheritDoc
     */
    public function withUri(UriInterface $uri, $preserveHost = false)
    {
        return $this->request->withUri($uri, $preserveHost);
    }
}