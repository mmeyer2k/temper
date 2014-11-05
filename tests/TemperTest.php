<?php

class TemperTest extends PHPUnit_Framework_TestCase
{

    public function testFunctions()
    {
        $temper = new Dopecode\Temper\Temper('1234');
        $this->assertTrue($temper->destroy());
        $this->assertTrue(strlen($temper->path()) > 0);
    }

}
