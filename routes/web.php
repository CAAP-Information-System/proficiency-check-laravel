<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProficiencyController;

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

Route::get('/', function () {
    return view('welcome');
});
// Display all proficiency
Route::get('/proficiency', [ProficiencyController::class, 'index'])->name('proficiency.index');

// Show the form for creating a new proficiency
Route::get('/proficiency/create', [ProficiencyController::class, 'create'])->name('proficiency.create');

// Store a newly created proficiency in the database
Route::post('/proficiency', [ProficiencyController::class, 'store'])->name('proficiency.store');

// Display the specified proficiency
Route::get('/proficiency/{id}', [ProficiencyController::class, 'show'])->name('proficiency.show');

// Show the form for editing the specified proficiency
Route::get('/proficiency/{id}/edit', [ProficiencyController::class, 'edit'])->name('proficiency.edit');

// Update the specified proficiency in the database
Route::put('/proficiency/{id}', [ProficiencyController::class, 'update'])->name('proficiency.update');

// Remove the specified proficiency from the database
Route::delete('/proficiency/{id}', [ProficiencyController::class, 'destroy'])->name('proficiency.destroy');
