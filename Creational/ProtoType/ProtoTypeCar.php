<?php

namespace Creational\ProtoType;

abstract class ProtoTypeCar
{
    protected $model;

    private $flag;

    abstract function __clone();

    public function getFlag()
    {
        return $this->flag;
    }

    public function setFlag()
    {
        return $this->flag;
    }
}