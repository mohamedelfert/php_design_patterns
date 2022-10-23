<?php

namespace Tests;

use Creational\SimpleFactory\Car;
use Creational\SimpleFactory\SimpleFactoryCar;
use PHPUnit\Framework\TestCase;

class SimpleFactory extends TestCase
{
    public function testCanCreateBMWCar()
    {
        $factory = new SimpleFactoryCar();
        $BMWCar = $factory->create('BMW','Black');
        $this->assertInstanceOf(Car::class, $BMWCar);
    }

    public function testCanCreateBenzCar()
    {
        $factory = new SimpleFactoryCar();
        $BenzCar = $factory->create('Benz','Red');
        $this->assertInstanceOf(Car::class, $BenzCar);
    }
}