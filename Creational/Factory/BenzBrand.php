<?php

namespace Creational\Factory;

class BenzBrand implements CarBrandInterface
{
    public function createBrand()
    {
        // TODO: Implement createBrand() method.
        return "This Is Mercedes (Benz) Brand";
    }
}