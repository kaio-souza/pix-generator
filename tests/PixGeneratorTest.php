<?php


use KaioSouza\PixPhp\PixGenerator;
use PHPUnit\Framework\TestCase;

class PixGeneratorTest extends TestCase
{
    public function testConfigMissing()
    {
        $this->expectException(\KaioSouza\PixPhp\Exceptions\ConfigException::class);
        $instance = new PixGenerator([]);
    }
}