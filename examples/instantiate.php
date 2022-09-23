<?php
require_once('../vendor/autoload.php');

use KaioSouza\PixPhp\Constants\MandatoryConfig;
use KaioSouza\PixPhp\Constants\OptionalConfig;
use KaioSouza\PixPhp\PixGenerator;

$pix = new PixGenerator([
    MandatoryConfig::PIX_KEY => 'teste@teste.com',
    MandatoryConfig::MERCHANT_NAME => 'Tester',
    OptionalConfig::MERCHANT_CITY => 'SAO PAULO', // 'SAO PAULO' is the DefaultValue
    OptionalConfig::CURRENCY => '986', // 986 = BRL | is the DefaultValue
    OptionalConfig::COUNTRY_CODE => 'BR', // 'BR' is the default Alpha2 value
]);
