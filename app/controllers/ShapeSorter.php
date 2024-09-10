<?php

declare(strict_types=1);

namespace App\controllers;

use App\controllers\ShapeCollection;

// Сортировщик фигур по площади
class ShapeSorter
{
    public static function sortByArea(ShapeCollection $collection): void 
    {
      usort($collection->shapes, function ($shape1, $shape2) { 
        return $shape1->getArea() - $shape2->getArea();
      });
    }
  }