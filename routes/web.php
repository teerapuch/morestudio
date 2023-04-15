<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/vehicle', function () {
    return view('vehicle');
})->middleware(['auth', 'verified'])->name('vehicle');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/answer/1', [AnswerController::class, 'answer1']);
    Route::get('/answer/2', [AnswerController::class, 'answer2']);
    Route::get('/answer/3/1', [AnswerController::class, 'answer3_1']);
    Route::get('/answer/3/2', [AnswerController::class, 'answer3_2']);
    Route::get('/answer/3/3', [AnswerController::class, 'answer3_3']);
});

Route::post('/answer/3/4', [AnswerController::class, 'answer3_4']);
Route::post('/answer/3/5/1', [AnswerController::class, 'answer3_5_1']);
Route::post('/answer/3/5/2', [AnswerController::class, 'answer3_5_2']);

require __DIR__.'/auth.php';
