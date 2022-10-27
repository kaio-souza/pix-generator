<?php
require_once('instantiate.php');

$code = $pix->getQrCode('14,50', 'Teste Lala');

// save QRCODE on file qr.png
file_put_contents('qr.png', $code);