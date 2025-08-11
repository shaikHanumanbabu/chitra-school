<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\InformationController;
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
Route::view('/services', 'services')->name('services');
Route::get('/events', function () {
    return view('events', [
        'events' => \App\Models\Events::all()
    ]);
})->name('events');
Route::view('/competitions', 'competitions')->name('competitions');
Route::view('/acheievement-awards', 'acheievement-awards')->name('acheievement-awards');
Route::view('/gallery', 'gallery')->name('gallery');
Route::view('/contact', 'contact')->name('contact');

Route::prefix("admin")->name("admin.")->group(function () {
    Route::get('/login', function () {
        return view('admin.login');
    });

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::post('/login', [AuthController::class, 'authenticate'])->name('login');

    Route::resource('/information', InformationController::class);
    Route::resource('/events', EventsController::class);
    Route::resource('/galleries', GalleryController::class);
    Route::get('/dashboard', [InformationController::class, 'dashboard'])->name('information')->name("dashboard");
});
