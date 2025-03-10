<?php

namespace App;

class OLEDScreen implements Computer
{
    protected $computer;

    /**
     * @param $computer
     */
    public function __construct($computer)
    {
        $this->computer = $computer;
    }


    public function getPrice(): int
    {
        return $this->computer->getPrice() + 200;
    }

    public function getDescription(): string
    {
        return $this->computer->getDescription() . ' with an OLED screen';
    }
}