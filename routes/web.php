<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ResourcesController;
use App\Http\Controllers\SortingAlgorithmVisualizerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// home
Route::get(
    '/',
    [ HomeController::class, 'show' ]
)->name('home.show');

// contact
Route::get(
    '/contact',
    [ ContactController::class, 'show' ]
)->name('contact.show');

Route::post(
    '/contact',
    [ ContactController::class, 'store' ]
)->name('contact.store');

Route::get(
    '/email-sent-success',
    [ ContactController::class, 'emailSentSuccess' ]
)->name('contact.email-sent-success');

Route::get(
    '/email-sent-failure',
    [ ContactController::class, 'emailSentFailure' ]
)->name('contact.email-sent-failure');

// projects
Route::get(
    '/projects',
    [ ProjectsController::class, 'show' ]
)->name('projects.show');

// about
Route::get(
    '/about',
    [ AboutController::class, 'show' ]
)->name('about.show');

// resources
Route::get(
    '/resources',
    [ ResourcesController::class, 'show' ]
)->name('resources.show');

// download resources
Route::get(
    '/downloadCV',
    [ ResourcesController::class, 'getCVDownload' ]
)->name('resources.downloadCV');

Route::get(
    '/downloadGermanCV',
    [ ResourcesController::class, 'getGermanCVDownload' ]
)->name('resources.downloadGermanCV');

Route::get(
    '/downloadLinuxCertificate',
    [ ResourcesController::class, 'getLinuxCertificateDownload' ]
)->name('resources.downloadLinuxCertificate');

Route::get(
    '/downloadScalaEssentialsCertificate',
    [ ResourcesController::class, 'getScalaEssentialsCertificateDownload' ]
)->name('resources.downloadScalaEssentialsCertificate');

Route::get(
    '/downloadScalaAdvancedCertificate',
    [ ResourcesController::class, 'getScalaAdvancedCertificateDownload' ]
)->name('resources.downloadScalaAdvancedCertificate');

Route::get(
    '/downloadEuropass',
    [ ResourcesController::class, 'getEuropassDownload' ]
)->name('resources.downloadEuropass');

Route::get(
    '/downloadWorkAndApprenticeshipCertificate',
    [ ResourcesController::class, 'getWorkAndApprenticeshipCertificateDownload' ]
)->name('resources.WorkAndApprenticeshipCertificate');

Route::get(
    '/downloadFinalExamCertificate',
    [ ResourcesController::class, 'getFinalExamCertificateDownload' ]
)->name('resources.FinalExamCertificate');

// resources download failure
Route::get(
    '/resource-download-failure',
    [ ResourcesController::class, 'resourceDownloadFailure' ]
)->name('resources.resource-download-failure');

// Concrete projects
Route::get(
    '/sorting-algorithm-visualizer',
    [ SortingAlgorithmVisualizerController::class, 'show' ]
)->name('sorting-algorithm-visualizer');