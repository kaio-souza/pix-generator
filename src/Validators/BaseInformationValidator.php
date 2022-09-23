<?php


namespace KaioSouza\PixPhp\Validators;


use KaioSouza\PixPhp\Constants\MandatoryConfig;
use KaioSouza\PixPhp\Exceptions\ConfigException;

class BaseInformationValidator
{
    public static function validate($data)
    {
        foreach (MandatoryConfig::getConstants() as $config) {
            if(!isset($data[$config])){
                throw new ConfigException($config);
            }
        }
    }
}