<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Structural\Adapter\Car;
use Structural\Adapter\NormalEngine;
use Structural\Adapter\TurboEngine;
use Structural\Adapter\TurboEngineAdapter;

class AdapterTest extends TestCase
{
    public function testCanStartNormalEngine()
    {
        $engine = new NormalEngine();
        $car = new Car($engine);

        $this->assertEquals('Normal Engine Start', $car->start());
    }

    public function testCanStartTurboEngine()
    {
        $engine = new TurboEngine();
        $adapter = new TurboEngineAdapter($engine);
        $car = new Car($adapter);

        $this->assertEquals('Turbo Engine Start', $car->start());
    }
}