<?php

namespace Creational\SimpleFactory;

class SimpleFactoryCar
{
    public function create(string $type,string $color)
    {
        return new Car($type,$color);
    }
}