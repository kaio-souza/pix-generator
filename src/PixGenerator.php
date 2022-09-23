<?php


namespace KaioSouza\PixPhp;


use KaioSouza\PixPhp\Helpers\Helper;
use KaioSouza\PixPhp\Services\PayloadService;
use KaioSouza\PixPhp\Validators\BaseInformationValidator;

class PixGenerator
{
    private $payloadService;

    public function __construct($data)
    {
        BaseInformationValidator::validate($data);
        $this->payloadService = new PayloadService($data);
    }

    public function getQrCodeText($amount, $description = 'pix')
    {
        return $this->payloadService->getPayload($amount, $description);
    }

    public function getQrCode($amount, $description = 'pix')
    {
        $qrText = $this->getQrCodeText($amount, $description);
        return Helper::getQrCodeFromText($qrText);
    }
}