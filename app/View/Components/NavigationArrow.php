<?php

namespace App\View\Components;

use App\Helper\NavigationArrowDirection;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavigationArrow extends Component
{
    public int $rotation;
    /**
     * Create a new component instance.
     */
    public function __construct($rotation)
    {
        $this->rotation = $rotation;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navigation-arrow');
    }
}