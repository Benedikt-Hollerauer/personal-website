<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Storage;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ResourcesController extends Controller {

    public function show(): View {
        return view('sites.resources');
    }
    
    public function getCVDownload(): StreamedResponse {
        return Storage::download('test.png');
    }

    public function getLinuxCertificateDownload(): StreamedResponse {
        return Storage::download('linux-essentials-certificate.pdf');
    }
}