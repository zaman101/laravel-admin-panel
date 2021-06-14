<?php

use App\Http\Controllers\Backend\CurdController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Backend Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/dashboard', function () {
    return view('backend.pages.dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('crud', CurdController::class)->except(['show']);