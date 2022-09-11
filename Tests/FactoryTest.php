<?php

namespace Tests;

use Creational\Factory\BenzBrand;
use Creational\Factory\BenzBrandFactory;
use Creational\Factory\BMWBrand;
use Creational\Factory\BMWBrandFactory;
use PHPUnit\Framework\TestCase;

class FactoryTest extends TestCase
{
    public function testCanBuildeBMWBrand()
    {
        $brandFactory = new BMWBrandFactory();
        $myBrand = $brandFactory->buildBrand();
        $this->assertInstanceOf(BMWBrand::class, $myBrand);
    }

    public function testCanBuildeBenzBrand()
    {
        $brandFactory = new BenzBrandFactory();
        $myBrand = $brandFactory->buildBrand();
        $this->assertInstanceOf(BenzBrand::class, $myBrand);
    }
}