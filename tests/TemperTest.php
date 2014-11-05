<?php

class TemperTest extends PHPUnit_Framework_TestCase
{

    private $temper = null;

    public function testConstruct()
    {
        $this->temper = new Dopecode\Temper\Temper('1234');
    }

    public function testDestroy()
    {
        $this->assertTrue($this->temper->destroy());
    }

    public function testPath()
    {
        $this->assertTrue(strlen($this->temper->path()) > 0);
    }

}
