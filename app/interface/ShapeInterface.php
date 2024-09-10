<?php

declare(strict_types=1);

namespace App\interface;

use App\Enums\ShapeType;

interface ShapeInterface 
{
    public function getType(): ShapeType;
    public function getArea(): float;
    public function getDescription(): string;
}
