<?php

namespace App\View\Components;

use App\Helpers\NavigationArrowDirection;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavigationArrow extends Component {

    public function __construct(
        public NavigationArrowDirection $rotation,
        public string $linkLocation,
        public string $iconOnHover
    ) { }

    public function render(): View|Closure|string {
        return view('components.navigation-arrow');
    }
}