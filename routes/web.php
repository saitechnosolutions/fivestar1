<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

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
    return view('pages.home');
});

Route::view('gallery','pages.gallery');
Route::view('contact','pages.contact');
Route::view('aboutus','pages.aboutus');
Route::view('videos','pages.videos');
// Route::view('events','pages.events');
Route::resource('/events',EventController::class);
Route::GET('eventdetail/{id}',[EventController::class,'eventdetail']);
Route::POST('formsubmit',[ContactController::class,'formsubmit']);
