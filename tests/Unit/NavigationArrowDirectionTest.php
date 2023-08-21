<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Helper\NavigationArrowDirection;

class NavigationArrowDirectionTest extends TestCase {
    private function setUpGetDegreeForRotationTests(NavigationArrowDirection $navigationArrowDirection, int $shouldBeRotation) {
        $rotationDegree = $navigationArrowDirection
            ->getDegreeForRotation();
        $this->assertTrue($rotationDegree == $shouldBeRotation);
    }

    public function test_getDegreeForRotation_UP(): void {
        $this->setUpGetDegreeForRotationTests(
            NavigationArrowDirection::UP,
            180
        );
    }
    
    public function test_getDegreeForRotation_RIGHT(): void {
        $this->setUpGetDegreeForRotationTests(
            NavigationArrowDirection::RIGHT,
            270
        );
    }

    public function test_getDegreeForRotation_DOWN(): void {
        $this->setUpGetDegreeForRotationTests(
            NavigationArrowDirection::DOWN,
            0
        );
    }

    public function test_getDegreeForRotation_LEFT(): void {
        $this->setUpGetDegreeForRotationTests(
            NavigationArrowDirection::LEFT,
            90
        );
    }
}