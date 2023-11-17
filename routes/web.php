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

// projects subdomain route group
Route::domain('projects.' . env('APP_URL'))->group(function() {
    Route::get(
        '/sorting-algorithm-visualizer',
        [ SortingAlgorithmVisualizerController::class, 'show' ]
    )->name('projects.sorting-algorithm-visualizer');
});