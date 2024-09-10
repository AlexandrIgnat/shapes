<?php

declare(strict_types=1);

namespace App\controllers;

use App\Enums\ShapeType;

// Класс для представления круга
class Circle extends Shape 
{
    private float $radius;

    public function __construct(float $radius) 
    {
        $this->type = ShapeType::Circle;
        $this->radius = $radius;
    }

    public function getArea(): float 
    {
        return pi() * pow($this->radius, 2);
    }

    public function getDescription(): string 
    {
        return "Круг,r{$this->radius}";
    }
}
