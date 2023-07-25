<?php

namespace SellingPartnerApi\Helpers;

class Date
{
    /**
     * @return \DateTime|null
     */
    public static function utcDateTime()
    {
        try {
            $dateTime = new \DateTime('now', new \DateTimeZone('UTC'));
        } catch (\Exception $e)  {
            $dateTime = null;
        }

        return $dateTime;
    }

    /**
     * @param $format
     * @return string
     */
    public static function utcDateFormat($format = 'Y-m-d')
    {
        return self::utcDateTime()->format($format);
    }

    /**
     * @param $format
     * @return string
     */
    public static function utcDateTimeFormat($format = 'Y-m-d\TH:i:s\Z')
    {
        return self::utcDateTime()->format($format);
    }

    /**
     * @param $dateString
     * @param $format
     * @return string
     */
    public static function utcDateTimeFormatWithInterval($dateString, $format = 'Y-m-d\TH:i:s\Z')
    {
        return self::utcDateTime()->add(\DateInterval::createFromDateString($dateString))->format($format);
    }
}