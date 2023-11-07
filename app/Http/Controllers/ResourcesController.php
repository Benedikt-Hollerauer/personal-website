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
        return Storage::download('benedikt-hollerauer-cv.pdf');
    }

    public function getLinuxCertificateDownload(): StreamedResponse {
        return Storage::download('linux-essentials-certificate.pdf');
    }

    public function getScalaEssentialsCertificateDownload(): StreamedResponse {
        return Storage::download('benedikt-hollerauer-scala-essentials-certificate.pdf');
    }

    public function getScalaAdvancedCertificateDownload(): StreamedResponse {
        return Storage::download('benedikt-hollerauer-scala-advanced-certificate.pdf');
    }

    public function getEuropassDownload(): StreamedResponse {
        return Storage::download('benedikt-hollerauer-europass.pdf');
    }
}