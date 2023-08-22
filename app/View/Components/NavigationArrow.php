<?php

namespace App\View\Components;

use App\Helper\NavigationArrowDirection;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavigationArrow extends Component {
    public NavigationArrowDirection $rotation;

    public string $linkLocation;

    public function __construct(NavigationArrowDirection $rotation, string $linkLocation) {
        $this->rotation = $rotation;
        $this->linkLocation = $linkLocation;
    }

    public function render(): View|Closure|string {
        return view('components.navigation-arrow');
    }
}