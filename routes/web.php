<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmploiController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DemandeController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('offres', [EmploiController::class, 'index'])->name('offres.index');
Route::view('login', 'auth.login')->name('login');
Route::view('register', 'auth.register')->name('register');
Route::view('/contact', 'pages.contact')->name('contact');

Route::get('emploi/create/demande/{id}', [EmploiController::class, 'create'])->name('emploi.create.demande')->middleware('auth');
Route::post('request/store/{emploi}', DemandeController::class)->name('request.store');

Route::post('register',[AuthController::class,'register'])->name('register.store');
Route::post('login', [AuthController::class, 'login'])->name('login.store');

