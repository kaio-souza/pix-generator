<?php
require_once('instantiate.php');

$code = $pix->getQrCodeText(20, 'Teste Lala');

print_r($code);