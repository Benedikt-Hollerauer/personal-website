<?php

namespace App\View\Components;

use App\Helper\NavigationArrowDirection;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavigationArrow extends Component {
    public NavigationArrowDirection $rotation;
    
    public function __construct($rotation) {
        $this->rotation = $rotation;
    }

    public function render(): View|Closure|string {
        return view('components.navigation-arrow');
    }
}