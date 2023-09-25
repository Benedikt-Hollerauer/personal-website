<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SiteHeading extends Component {
    public string $siteHeading;
    /**
     * Create a new component instance.
     */
    public function __construct(string $siteHeading) {
        $this->siteHeading = $siteHeading;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string {
        return view('components.site-heading');
    }
}
