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

    private function setUpGetRotationNameTests(NavigationArrowDirection $navigationArrowDirection, string $shouldBeRotation) {
        $rotationDegree = $navigationArrowDirection
            ->getRotationName();
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

    public function test_getRotationName_UP(): void {
        $this->setUpGetRotationNameTests(
            NavigationArrowDirection::UP,
            'top'
        );
    }

    public function test_getRotationName_RIGHT(): void {
        $this->setUpGetRotationNameTests(
            NavigationArrowDirection::RIGHT,
            'right'
        );
    }

    public function test_getRotationName_DOWN(): void {
        $this->setUpGetRotationNameTests(
            NavigationArrowDirection::DOWN,
            'bottom'
        );
    }

    public function test_getRotationName_LEFT(): void {
        $this->setUpGetRotationNameTests(
            NavigationArrowDirection::LEFT,
            'left'
        );
    }
}