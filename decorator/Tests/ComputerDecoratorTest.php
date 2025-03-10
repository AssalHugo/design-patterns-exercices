<?php

namespace Test;

use App\GPU;
use App\OLEDScreen;
use PHPUnit\Framework\TestCase;

use App\Laptop;

class ComputerDecoratorTest extends TestCase
{
    public function testBasicLaptop()
    {
        $laptop = new Laptop();
        
        $this->assertSame(400, $laptop->getPrice());
        $this->assertSame("A laptop computer", $laptop->getDescription());
    }

    public function testLaptopWithGPU()
    {
        $laptopWithGPU = new GPU(new Laptop());

        $this->assertSame(700, $laptopWithGPU->getPrice());
        $this->assertSame("A laptop computer with a Graphic Card", $laptopWithGPU->getDescription());
    }

    public function testLaptopWithOLEDScreen()
    {
        $laptoWithOLEDScreen = new OLEDScreen(new Laptop());

        $this->assertSame(600, $laptoWithOLEDScreen->getPrice());
        $this->assertSame("A laptop computer with an OLED screen", $laptoWithOLEDScreen->getDescription());
    }
}