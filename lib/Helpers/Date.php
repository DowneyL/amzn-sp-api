<?php

namespace SellingPartnerApi\Helpers;

class Date
{
    /**
     * @return string
     * @throws \Exception
     */
    public static function utcDate($format = 'Ymd')
    {
        return (new \DateTime('now', new \DateTimeZone('UTC')))->format($format);
    }

    /**
     * @return string
     * @throws \Exception
     */
    public static function utcDatetime($format = 'Ymd\THis\Z')
    {
        return (new \DateTime('now', new \DateTimeZone('UTC')))->format($format);
    }
}