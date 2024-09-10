<?php

declare(strict_types=1);

namespace App\controllers;

use App\interface\ShapeInterface;
use App\Enums\ShapeType;

// Класс для представления фигур
abstract class Shape implements ShapeInterface 
{
  protected ShapeType $type;

  public abstract function getArea(): float;

  public function getType(): ShapeType 
  {
    return $this->type;
  }
}
