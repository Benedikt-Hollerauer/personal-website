<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ResourcesController extends Controller {
    public function show(): View {
        return view('sites.resources');
    }
}
