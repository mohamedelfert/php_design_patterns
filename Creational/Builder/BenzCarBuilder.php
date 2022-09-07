<?php

namespace Creational\Builder;

use Creational\Builder\Models\BenzCar;
use Creational\Builder\Models\Car;

class BenzCarBuilder implements CarBuilderInterface
{
    /**
     * @var Car $type
     */
    private $type;

    public function createCar()
    {
        // TODO: Implement createCar() method.
        $this->type = new BenzCar();
    }

    public function addBody()
    {
        // TODO: Implement addBody() method.
        $this->type->setParts('Benz-BODY', 'benz-body');
    }

    public function addDoors()
    {
        // TODO: Implement addDoors() method.
        $this->type->setParts('Benz-DOORS', 'benz-doors');
    }

    public function addEngine()
    {
        // TODO: Implement addEngine() method.
        $this->type->setParts('Benz-ENGINE', 'benz-engine');
    }

    public function addWheels()
    {
        // TODO: Implement addWheels() method.
        $this->type->setParts('Benz-WHEELS', 'benz-wheels');
    }

    public function getCar()
    {
        // TODO: Implement getCar() method.
        return $this->type;
    }
}