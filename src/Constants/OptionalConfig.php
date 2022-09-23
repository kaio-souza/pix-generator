<?php


namespace KaioSouza\PixPhp\Constants;


class OptionalConfig
{
    public const CURRENCY = 'currency';
    public const COUNTRY_CODE = 'country_code';
    public const MERCHANT_CITY = 'merchant_city';


    public static function getConstants()
    {
        $oClass = new \ReflectionClass(__CLASS__);
        return $oClass->getConstants();
    }
}