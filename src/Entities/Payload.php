<?php


namespace KaioSouza\PixPhp\Entities;


use KaioSouza\PixPhp\Helpers\Helper;

class Payload
{
    private $pixKey;
    private $merchantName;
    private $merchantCity;
    private $merchantCategoryCode;
    private $currencyCode;
    private $countryCode;
    private $reference;

    public function __construct()
    {
        $this->setCurrencyCode('986');
        $this->setMerchantCategoryCode('0000');
        $this->setCountryCode('BR');
    }

    /**
     * @return mixed
     */
    public function getPixKey()
    {
        return $this->pixKey;
    }

    /**
     * @param mixed $pixKey
     * @return Payload
     */
    public function setPixKey($pixKey)
    {
        $this->pixKey = $pixKey;
        return $this;
    }


    /**
     * @return mixed
     */
    public function getMerchantName()
    {
        return $this->merchantName;
    }

    /**
     * @param mixed $merchantName
     * @return Payload
     */
    public function setMerchantName($merchantName)
    {
        $this->merchantName = $merchantName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMerchantCity()
    {
        return $this->merchantCity;
    }

    /**
     * @param mixed $merchantCity
     * @return Payload
     */
    public function setMerchantCity($merchantCity)
    {
        $this->merchantCity = $merchantCity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReference()
    {
        return $this->reference ?? Helper::uniqueId();
    }

    /**
     * @param mixed $reference
     * @return Payload
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMerchantCategoryCode()
    {
        return $this->merchantCategoryCode;
    }

    /**
     * @param mixed $merchantCategoryCode
     * @return Payload
     */
    public function setMerchantCategoryCode($merchantCategoryCode)
    {
        $this->merchantCategoryCode = $merchantCategoryCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * @param mixed $currencyCode
     * @return Payload
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param mixed $countryCode
     * @return Payload
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }


}