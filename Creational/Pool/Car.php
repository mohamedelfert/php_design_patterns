<?php

namespace Creational\Pool;

use DateTime;

class Car
{
    private $rentAt;

    public function __construct()
    {
        $this->rentAt = new DateTime();
    }

    public function run()
    {
        return "Car Is Run Now";
    }
}