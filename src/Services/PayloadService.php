<?php


namespace KaioSouza\PixPhp\Services;


use KaioSouza\PixPhp\Constants\MandatoryConfig;
use KaioSouza\PixPhp\Constants\OptionalConfig;
use KaioSouza\PixPhp\Constants\PayloadCode;
use KaioSouza\PixPhp\Constants\PayloadConstants;
use KaioSouza\PixPhp\Entities\Payload;
use KaioSouza\PixPhp\Helpers\Helper;
use KaioSouza\PixPhp\Helpers\PayloadHelper;

class PayloadService
{
    private $payload;

    public function __construct($data)
    {
        $this->payload = new Payload();

        $this->payload->setMerchantName($data[MandatoryConfig::MERCHANT_NAME]);
        $this->payload->setPixKey($data[MandatoryConfig::PIX_KEY]);

        if (isset($data[OptionalConfig::MERCHANT_CITY])) {
            $this->payload->setMerchantCity($data[OptionalConfig::MERCHANT_CITY]);
        }
        if (isset($data[OptionalConfig::CURRENCY])) {
            $this->payload->setMerchantCity($data[OptionalConfig::CURRENCY]);
        }
        if (isset($data[OptionalConfig::COUNTRY_CODE])) {
            $this->payload->setMerchantCity($data[OptionalConfig::COUNTRY_CODE]);
        }


    }

    public function getPayload($amount, $description)
    {
        $payload =
            Helper::makeValue(PayloadCode::FORMAT_INDICATOR, PayloadConstants::VERSION) .
            PayloadHelper::getMerchantAccountInformation($this->payload, $description) .
            Helper::makeValue(PayloadCode::MERCHANT_CATEGORY_CODE, $this->payload->getMerchantCategoryCode()) .
            Helper::makeValue(PayloadCode::TRANSACTION_CURRENCY, $this->payload->getCurrencyCode()) .
            Helper::makeValue(PayloadCode::TRANSACTION_AMOUNT, Helper::formatAmount($amount)) .
            Helper::makeValue(PayloadCode::COUNTRY_CODE, $this->payload->getCountryCode()) .
            Helper::makeValue(PayloadCode::MERCHANT_NAME, $this->payload->getMerchantName()) .
            Helper::makeValue(PayloadCode::MERCHANT_CITY, $this->payload->getMerchantCity()) .
            PayloadHelper::getAdditionalDataFieldTemplate($this->payload);

        return $payload . PayloadHelper::getCRC16($payload);
    }
}