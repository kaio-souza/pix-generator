<?php
require_once('instantiate.php');

$code = $pix->getQrCode(20, 'Teste Lala');

print_r($code);