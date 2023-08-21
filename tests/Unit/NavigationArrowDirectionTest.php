<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Helper\NavigationArrowDirection;

class NavigationArrowDirectionTest extends TestCase {
    public function test_getDegreeForRotation_UP(): void {
        $rotationDegree = NavigationArrowDirection::UP
            ->getDegreeForRotation();
        $this->assertTrue($rotationDegree == 180);
    }
    
    public function test_getDegreeForRotation_RIGHT(): void {
        $rotationDegree = NavigationArrowDirection::RIGHT
            ->getDegreeForRotation();
        $this->assertTrue($rotationDegree == 270);
    }

    public function test_getDegreeForRotation_DOWN(): void {
        $rotationDegree = NavigationArrowDirection::DOWN
            ->getDegreeForRotation();
        $this->assertTrue($rotationDegree == 0);
    }

    public function test_getDegreeForRotation_LEFT(): void {
        $rotationDegree = NavigationArrowDirection::LEFT
            ->getDegreeForRotation();
        $this->assertTrue($rotationDegree == 90);
    }
}