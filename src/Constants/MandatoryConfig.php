<?php


namespace KaioSouza\PixPhp\Constants;


class MandatoryConfig
{
    public const PIX_KEY = 'pix_key';
    public const MERCHANT_NAME = 'merchant_name';


    public static function getConstants()
    {
        $oClass = new \ReflectionClass(__CLASS__);
        return $oClass->getConstants();
    }
}