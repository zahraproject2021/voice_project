<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\AdminController;

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

Route::middleware(['auth', 'isMentor'])->group(function () {

    Route::get('candidate/{candidateId}',[MentorController::class, 'candidateDetails']);
    Route::get('/',[MentorController::class, 'show']);
    Route::get('/dashboard',[MentorController::class, 'show'])->name('dashboard');

});

Route::middleware(['auth', 'isAdmin'])->group(function () {

    Route::get('admin',[AdminController::class, 'show']);

});


require __DIR__.'/auth.php';
