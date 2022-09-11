<?php

namespace Creational\Factory;

class BMWBrandFactory implements BrandFactoryInterface
{
    public function buildBrand()
    {
        // TODO: Implement buildBrand() method.
        return new BMWBrand();
    }
}