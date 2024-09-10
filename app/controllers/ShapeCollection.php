<?php

declare(strict_types=1);

namespace App\controllers;

use App\interface\ShapeInterface;

// Коллекция фигур
class ShapeCollection 
{
  public array $shapes;

  public function __construct() 
  {
    $this->shapes = [];
  }

  public function addShape(ShapeInterface $shape): void 
  {
    $this->shapes[] = $shape;
  }

  public function getShapes(): array 
  {
    return $this->shapes;
  }
}
