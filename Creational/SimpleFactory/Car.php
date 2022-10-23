<?php

namespace Creational\SimpleFactory;

class Car
{
    private $type;
    private $color;

    public function __construct(string $type,string $color)
    {
        $this->type = $type;
        $this->color = $color;
    }
}