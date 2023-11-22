<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Storage;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ResourcesController extends Controller {

    public function show(): View {
        return view('sites.resources');
    }

    private static function handleDownload(string $filePath) {
        try {
            return Storage::download($filePath);
        } catch (\Exception $e) {
            return redirect("resource-download-failure")
                ->with("failure","There was an error downloading. Please try again!");
        }
    }

    public function resourceDownloadFailure(): View {
        return view('sites.resource-downloaded', [
            'message' => "⛔ An error occured while downloading. ⛔"
        ]);
    }
    
    public function getCVDownload() {
        return self::handleDownload('benedikt-hollerauer-cv.pdf');
    }

    public function getLinuxCertificateDownload() {
        return self::handleDownload('linux-essentials-certificate.pdf');
    }

    public function getScalaEssentialsCertificateDownload() {
        return self::handleDownload('benedikt-hollerauer-scala-essentials-certificate.pdf');
    }

    public function getScalaAdvancedCertificateDownload() {
        return self::handleDownload('benedikt-hollerauer-scala-advanced-certificate.pdf');
    }

    public function getEuropassDownload() {
        return self::handleDownload('benedikt-hollerauer-europass.pdf');
    }
}