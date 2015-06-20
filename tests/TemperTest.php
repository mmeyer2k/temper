<?php

class TemperTest extends PHPUnit_Framework_TestCase
{

    public function testFunctions()
    {
        $temper = new \Temper\Temper('1234');
        $this->assertTrue(strlen($temper->path()) > 0);
        $this->assertTrue($temper->destroy());
    }

}
