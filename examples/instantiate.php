<?php
require_once('../vendor/autoload.php');

use KaioSouza\PixPhp\Constants\MandatoryConfig;
use KaioSouza\PixPhp\Constants\OptionalConfig;
use KaioSouza\PixPhp\PixGenerator;

$pix = new PixGenerator([
    MandatoryConfig::PIX_KEY => '14f5ee7e-0c45-48f6-ae46-a3af44ca62e1',
    MandatoryConfig::MERCHANT_NAME => 'Tester',
    OptionalConfig::MERCHANT_CITY => 'SAO PAULO', // 'SAO PAULO' is the DefaultValue
    OptionalConfig::CURRENCY => '986', // 986 = BRL | is the DefaultValue
    OptionalConfig::COUNTRY_CODE => 'BR', // 'BR' is the default Alpha2 value
]);
