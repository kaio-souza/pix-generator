<?php
require_once('instantiate.php');

$code = $pix->getBase64QrCode('14,50', 'Teste Lala');

// save QRCODE on file qr.png
echo "<img src='data:image/png;base64, {$code}' />";