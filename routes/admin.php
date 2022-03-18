
<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\SpecieController;
use Illuminate\Support\Facades\Route;

// Dashboard
Route::get('', [HomeController::class, 'index'])->name('admin.home');

// Cambio de resource a manual porque no me cogía la varia $specie 
// Route::resource('species', SpecieController::class)->except('show')->names('admin.species');
Route::get('species', [SpecieController::class, 'index'])->name('admin.species.index');

Route::get('species/create', [SpecieController::class, 'create'])->name('admin.species.create');

Route::post('species', [SpecieController::class, 'store'])->name('admin.species.store');

Route::get('species/{specie}/edit', [SpecieController::class, 'edit'])->name('admin.species.edit');

Route::put('species/{specie}', [SpecieController::class, 'update'])->name('admin.species.update');

Route::delete('species/{specie}', [SpecieController::class, 'destroy'])->name('admin.species.destroy');

