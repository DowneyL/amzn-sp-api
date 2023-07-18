<?php

namespace SellingPartnerApi\Endpoint;

/**
 * @method static \SellingPartnerApi\Contracts\Endpoint\Endpoint NA()
 * @method static \SellingPartnerApi\Contracts\Endpoint\Endpoint EU()
 * @method static \SellingPartnerApi\Contracts\Endpoint\Endpoint FE()
 */
class Endpoint
{
    /**
     * @var bool
     */
    public static $sandbox = false;

    /**
     * @param $name
     * @param $arguments
     * @return mixed
     */
    public static function __callStatic($name, $arguments)
    {
        $name = strtoupper($name);
        $endpoint = "\SellingPartnerApi\Endpoint\\$name";
        if (!class_exists($endpoint)) {
            throw new \RuntimeException("Endpoint $name not exists!");
        }
        $sandbox = static::$sandbox;
        if (isset($arguments[0])) {
            $sandbox = (bool)$arguments[0];
        }

        return new $endpoint($sandbox);
    }
}
