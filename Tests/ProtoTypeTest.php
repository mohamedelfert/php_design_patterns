<?php

namespace Tests;

use Creational\ProtoType\AutomaticCar;
use Creational\ProtoType\ManualCar;
use PHPUnit\Framework\TestCase;

class ProtoTypeTest extends TestCase
{
    public function testCanCreateAutomaticCar()
    {
        $autoCar = new AutomaticCar();
        for ($i = 1; $i <= 15; $i++) {
            $newCar = clone $autoCar;
            $this->assertInstanceOf(AutomaticCar::class, $newCar);
        }
    }

    public function testCanCreateManualCar()
    {
        $manualCar = new ManualCar();
        for ($i = 1; $i <= 15; $i++) {
            $newCar = clone $manualCar;
            $this->assertInstanceOf(ManualCar::class, $newCar);
        }
    }
}