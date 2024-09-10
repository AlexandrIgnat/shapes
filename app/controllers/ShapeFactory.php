<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Enums\ShapeType;
use App\Interfaces\ShapeInterface;

final class ShapeFactory
{
    public static function createRandomShape(): mixed
    {
        $shapeTypes = ShapeType::cases();
        $randomShapeType = $shapeTypes[array_rand($shapeTypes)];

        return match ($randomShapeType) {
            ShapeType::Circle => new Circle(random_int(1, 10)),
            ShapeType::Square => new Square(random_int(1, 10)),
            ShapeType::Rectangle => new Rectangle(random_int(1, 10), random_int(1, 10)),
        };
    }
}
