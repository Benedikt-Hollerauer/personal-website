<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ProjectsController extends Controller {
    public function show(): View {
        return view('sites.projects');
    }
}