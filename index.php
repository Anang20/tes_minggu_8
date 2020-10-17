<?php

require "vendor/autoload.php";

use Gabung\Square;
use Gabung\Triangle;
use Gabung\Circle;

echo (new Square())->getArea().PHP_EOL;
echo (new Triangle())->getArea().PHP_EOL;
echo (new Circle())->getArea().PHP_EOL;