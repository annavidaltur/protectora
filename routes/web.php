<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\ContactanosController;
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
})->name('home');


Route::get('animales', [AnimalController::class, 'index'])->name('animals.index');

Route::get('animales/{animal}', [AnimalController::class, 'show'])->name('animals.show');

Route::get('contacto', [ContactanosController::class, 'index'])->name('contactanos.index');

Route::post('contacto', [ContactanosController::class, 'store'])->name('contactanos.store');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
