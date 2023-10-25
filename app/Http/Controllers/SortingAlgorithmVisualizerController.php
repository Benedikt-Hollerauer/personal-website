<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class SortingAlgorithmVisualizerController extends Controller {
    
    public function show(): View {
        return view('sites.sorting-algorithm-visualizer');
    }
}
