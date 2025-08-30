<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\CompetationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::view('/about', 'aboutus')->name('aboutus');
Route::get('/services', function () {
    return view('services', [
        'services' => \App\Models\Service::all()
    ]);
})->name('services');
Route::get('/events', function () {
    return view('events', [
        'events' => \App\Models\Events::all()
    ]);
})->name('events');
Route::get('/competitions', function () {
    return view('competitions', [
        'competitions' => \App\Models\Competation::all()
    ]);
})->name('competitions');
Route::view('/acheievement-awards', 'acheievement-awards')->name('acheievement-awards');
// Route::view('/gallery', 'gallery')->name('gallery');

Route::get('/gallery-info', function () {

    // dd('This is the gallery page.');
    $galleries = \App\Models\Gallery::all();

    // dd($galleries[0]->images);

    return view('gallery', [
        'galleries' => \App\Models\Gallery::all(),
        'gallery' => $galleries[0] ?? null,
    ]);
})->name('gallery');
Route::view('/contact', 'contact')->name('contact');

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');


Route::prefix("admin")->name("admin.")->group(function () {
    Route::get('/login', function () {
        return view('admin.login');
    });

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::post('/login', [AuthController::class, 'authenticate'])->name('login');

    Route::resource('/information', InformationController::class);
    Route::resource('/events', EventsController::class);
    Route::resource('/galleries', GalleryController::class);
    Route::resource('/services', ServiceController::class);
    Route::resource('/competations', CompetationController::class);
    Route::resource('/carousels', CarouselController::class);
    Route::get('/dashboard', [InformationController::class, 'dashboard'])->name('information')->name("dashboard");
});
