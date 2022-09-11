<?php

namespace Creational\Factory;

class BenzBrandFactory implements BrandFactoryInterface
{
    public function buildBrand()
    {
        // TODO: Implement buildBrand() method.
        return new BenzBrand();
    }
}