<?php

namespace SellingPartnerApi\Helpers;

class Api
{
    /**
     * @param $name
     * @return string
     */
    public static function findClassByName($name)
    {
        $dirname = ucfirst(rtrim($name, 'Api'));
        $classname = ucfirst($name);
        $class = "\SellingPartnerApi\Api\\$dirname\\$classname";
        if (class_exists($class)) {
            return $class;
        }

        $map = self::getClassNameMap();
        if (empty($map[$classname])) {
            throw new \RuntimeException("api $name not exists");
        }

        return $map[$classname];
    }

    /**
     * @return array
     */
    private static function getClassNameMap()
    {
        // TODO add more
        return [
            'TokensApi' => '\SellingPartnerApi\Api\Tokens20210301\TokensApi',
        ];
    }
}