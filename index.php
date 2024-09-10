<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use App\Controllers\ShapeCollection;
use App\Controllers\ShapeFactory;
use App\Controllers\ShapeSorter;

$collection = new ShapeCollection();

for ($i = 0; $i < 5; $i++) {
    $collection->addShape(ShapeFactory::createRandomShape());
}

ShapeSorter::sortByArea($collection);

foreach ($collection->getShapes() as $shape) {
    echo $shape->getDescription() . "<br>";
}
