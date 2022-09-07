<?php

namespace Creational\Builder;

use Creational\Builder\Models\BMWCar;
use Creational\Builder\Models\Car;

class BMWCarBuilder implements CarBuilderInterface
{
    /**
     * @var Car $type
     */
    private $type;

    public function createCar()
    {
        // TODO: Implement createCar() method.
        $this->type = new BMWCar();
    }

    public function addBody()
    {
        // TODO: Implement addBody() method.
        $this->type->setParts('BMW-BODY', 'bmw-body');
    }

    public function addDoors()
    {
        // TODO: Implement addDoors() method.
        $this->type->setParts('BMW-DOORS', 'bmw-doors');
    }

    public function addEngine()
    {
        // TODO: Implement addEngine() method.
        $this->type->setParts('BMW-ENGINE', 'bmw-engine');
    }

    public function addWheels()
    {
        // TODO: Implement addWheels() method.
        $this->type->setParts('BMW-WHEELS', 'bmw-wheels');
    }

    public function getCar()
    {
        // TODO: Implement getCar() method.
        return $this->type;
    }
}