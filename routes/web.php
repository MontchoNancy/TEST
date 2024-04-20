<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeirdTechController;
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

Route::get('/',[WeirdTechController::class,'index'] )->name('index');

Route::get('/apropos',[WeirdTechController::class,'apropos'] )->name('apropos');
Route::get('/service',[WeirdTechController::class,'service'] )->name('service');
Route::get('/contact',[WeirdTechController::class,'contact'] )->name('contact');