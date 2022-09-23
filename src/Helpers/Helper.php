<?php

namespace KaioSouza\PixPhp\Helpers;

use Mpdf\QrCode\Output;
use Mpdf\QrCode\QrCode;

class Helper
{
    public static function makeValue($id, $value)
    {
        $pad = str_pad(strlen($value), 2, '0', STR_PAD_LEFT);
        return $id . $pad . $value;
    }

    public static function formatAmount($amount)
    {
        $amount = str_replace('.', '', $amount);
        $amount = str_replace(',', '.', $amount);
        return number_format($amount, 2, ',', '.');
    }

    public static function uniqueId($l = 23)
    {
        return substr(md5(uniqid(mt_rand(), true)), 0, $l);
    }

    public static function filterDescription($text)
    {
        return mb_strimwidth($text, 0, 19, "");
    }

    public static function getQrCodeFromText($payload, $width = 400)
    {
        $objQrcode = new QrCode($payload);
        return (new Output\Png)->output($objQrcode, $width);
    }
}