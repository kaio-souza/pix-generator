# PIX GENERATOR
A simple library to generate media / data to Copy and Paste Pix

## Requeriments
* To generate Images, the ext php-gd needs to be enable

## Instatiate Class

Using Constants to Params (more secure, in cases of update)
```php
$pix = new PixGenerator([
    MandatoryConfig::PIX_KEY => 'teste@teste.com',
    MandatoryConfig::MERCHANT_NAME => 'Tester',
]);
```

Using String

```php
$pix = new PixGenerator([
   'pix_key' => 'teste@teste.com',
   'merchant_name' => 'Tester',
]);
```

More Params
```php

$pix = new PixGenerator([
    MandatoryConfig::PIX_KEY => 'teste@teste.com',
    MandatoryConfig::MERCHANT_NAME => 'Tester',
    OptionalConfig::MERCHANT_CITY => 'SAO PAULO', // 'SAO PAULO' is the DefaultValue
    OptionalConfig::CURRENCY => '986', // 986 = BRL | is the DefaultValue
    OptionalConfig::COUNTRY_CODE => 'BR', // 'BR' is the default Alpha2 value
]);
```
* The currency code is fill with ISO4217 [Click Here to see ISO4217 Currency List](./utils/CURRENCIES.MD)
* The Country Code is fill with ISO3166-1 alpha 2

## Get QRCode Text
```php
echo $pix->getQrCodeText(20, 'Teste Lala');
// returns 00020126510014br.gov.bcb.pix0115teste@teste.com0210Teste Lala520400005303986540520,005802BR5906Tester6002BR62270523bca37b925af47abd511393463041FC2
```
## Get QRCode Image
```php
// returns QRCode PNG output
$code = $pix->getQrCode(20, 'Teste Lala');
// Save the output on file
file_put_contents('qr.png', $code);
```
or
```php
$code = $pix->getBase64QrCode('14,50', 'Teste Lala');

// show QRCODE on HTML img tag
echo "<img src='data:image/png;base64, {$code}' />";
```

** The amount accepts a comma or dots to separate the decimal places