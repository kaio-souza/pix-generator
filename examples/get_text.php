<?php
require_once('instantiate.php');

$code = $pix->getQrCodeText(20, 'Teste QR Code');

// output the QRCODE base text
print_r($code);