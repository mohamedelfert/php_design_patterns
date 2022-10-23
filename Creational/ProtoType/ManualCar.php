<?php

namespace Creational\ProtoType;

class ManualCar extends ProtoTypeCar
{
    protected $model = 'Manual';

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}