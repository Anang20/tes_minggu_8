<?php

namespace Gabung;

use Gabung\Shape;

class Triangle extends Shape
{
    private $base = 10;
    private $height = 12;

    public function getArea()
    {
        return .5*$this->base*$this->height;
    }
}
