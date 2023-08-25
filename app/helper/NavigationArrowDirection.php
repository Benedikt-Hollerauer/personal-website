<?php

declare(strict_types=1);

namespace App\Helper;

use PhpParser\Node\Expr\Cast\String_;

enum NavigationArrowDirection {   
    case UP;
    case RIGHT;
    case DOWN;
    case LEFT;

    public function getDegreeForRotation(): int {
        return match ($this) {
            self::UP => 180,
            self::RIGHT => 270,
            self::DOWN => 0,
            self::LEFT => 90
        };
    }

    public function getRotationName(): string {
        return match ($this) {
            self::UP => 'top',
            self::RIGHT => 'right',
            self::DOWN => 'bottom',
            self::LEFT => 'left'
        };
    }
}