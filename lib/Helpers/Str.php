<?php

namespace SellingPartnerApi\Helpers;

class Str
{
    /**
     * @param $path
     * @param $origin
     * @return bool
     */
    public static function isPathMatch($path, $origin)
    {
        if (stripos($origin, '{') === false) {
            return $path === $origin;
        }

        $originPathPattern = preg_replace('/\{[\w]+\}/', '[\w]+', $origin);
        $originPathPattern = sprintf("/^%s$/", str_replace('/', "\/", $originPathPattern));
        $matches = [];
        preg_match($originPathPattern, $path, $matches);
        if (!$matches) {
            return false;
        }

        return $matches[0] === $path;
    }
}