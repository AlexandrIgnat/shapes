<?php

declare(strict_types=1);

namespace App\controllers;

use App\Enums\ShapeType;

// Класс для представления прямоугольника
class Rectangle extends Shape 
{
  private float $width;
  private float $height;

  public function __construct(float $width, float $height) 
  {
    $this->type = ShapeType::Rectangle;
    $this->width = $width;
    $this->height = $height;
  }

  public function getArea(): float 
  {
    return $this->width * $this->height;
  }

  public function getDescription(): string 
  {
    return "Прямоугольник, {$this->width}*{$this->height}";
  }
}
