<?php


namespace KaioSouza\PixPhp\Helpers;


use KaioSouza\PixPhp\Constants\PayloadCode;
use KaioSouza\PixPhp\Entities\Payload;

class PayloadHelper
{
    public static function getCRC16($payload)
    {
        $payload .= PayloadCode::CRC16 . '04';

        $result = 0xFFFF;

        if (($length = strlen($payload)) > 0) {
            for ($offset = 0; $offset < $length; $offset++) {
                $result ^= (ord($payload[$offset]) << 8);
                for ($bitwise = 0; $bitwise < 8; $bitwise++) {
                    if (($result <<= 1) & 0x10000) $result ^= 0x1021;
                    $result &= 0xFFFF;
                }
            }
        }

        return PayloadCode::CRC16 . '04' . strtoupper(dechex($result));
    }

    public static function getMerchantAccountInformation(Payload $payload, $descriptionText)
    {
        $gui = Helper::makeValue(PayloadCode::MERCHANT_ACCOUNT_INFORMATION_GUI, 'br.gov.bcb.pix');
        $key = Helper::makeValue(PayloadCode::MERCHANT_ACCOUNT_INFORMATION_KEY, $payload->getPixKey());

        $description =
            strlen($descriptionText) ?
                Helper::makeValue(PayloadCode::MERCHANT_ACCOUNT_INFORMATION_DESCRIPTION, $descriptionText) :
                '';

        return Helper::makeValue(PayloadCode::MERCHANT_ACCOUNT_INFORMATION, $gui . $key . $description);
    }

    public static function getAdditionalDataFieldTemplate(Payload $payload)
    {
        $reference = Helper::makeValue(PayloadCode::ADDITIONAL_DATA_FIELD_TEMPLATE_REFERENCE, $payload->getReference());
        return Helper::makeValue(PayloadCode::ADDITIONAL_DATA_FIELD_TEMPLATE, $reference);
    }

}