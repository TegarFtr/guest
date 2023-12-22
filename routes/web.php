<?php

// use App\Http\Controllers\EventController;
// use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EventController;

Route::get('/', function () { return redirect('home'); });
Route::get('/home', [FrontendController::class,'home']);
Route::get('/events', [FrontendController::class,'events'])->name('events');
Route::post('/events-cek', [FrontendController::class, 'eventscek'])->name('check.guest');
Route::get('/contactus', [FrontendController::class,'contactus']);
Route::get('/aboutus', [FrontendController::class,'aboutus']);
Route::get('/form', [FrontendController::class,'form']);
Route::get('/after', [FrontendController::class,'after'])->name('after');

Route::get('/login', [LoginController::class,'login'])->name('login');
Route::post('/login', [LoginController::class,'loginProses']);
Route::get('/signup', [LoginController::class,'signup']);
Route::post('/signup', [LoginController::class,'registrasi']);
Route::get('/enterevent', [FrontendController::class,'enterevent']);
Route::post('/enterevent', [FrontendController::class,'entereventproses']);
// Route::resource('/crud', [EventController::class,'index']);

Route::resource('/event', EventController::class);






