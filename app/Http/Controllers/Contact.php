<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class Contact extends Controller {
    public function show(): View {
        return view('site/contact');
    }
}