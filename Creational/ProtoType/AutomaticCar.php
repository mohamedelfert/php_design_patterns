<?php

namespace Creational\ProtoType;

class AutomaticCar extends ProtoTypeCar
{
    protected $model = 'Automatic';

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}