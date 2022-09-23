<?php


namespace KaioSouza\PixPhp\Exceptions;


use Throwable;

class ConfigException extends \Exception
{
    public function __construct($field = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct("{$field} config param missing", $code, $previous);
    }
}