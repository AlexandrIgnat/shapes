<?php

declare(strict_types=1);

namespace App\controllers;

use App\Enums\ShapeType;

// Класс для представления квадрата
class Square extends Shape 
{
  private float $side;

  public function __construct(float $side) 
  {
    $this->type = ShapeType::Square;
    $this->side = $side;
  }

  public function getArea(): float 
  {
    return pow($this->side, 2);
  }

  public function getDescription(): string 
  {
    return "Квадрат,{$this->side}*{$this->side}";
  }

}
