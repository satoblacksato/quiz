<?php

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/users/create', [\App\Http\Controllers\UserController::class, 'create'])->middleware(['auth'])->name('users.create');
Route::post('/users/create', [\App\Http\Controllers\UserController::class, 'store'])->middleware(['auth'])->name('users.store');

Route::get('/users', [\App\Http\Controllers\UserController::class, 'index'])->middleware(['auth'])->name('users.index');
Route::get('/users/{user}', [\App\Http\Controllers\UserController::class, 'show'])->middleware(['auth'])->name('users.show');

Route::post('/users-update/{user}', [\App\Http\Controllers\UserController::class, 'update'])->middleware(['auth'])->name('users.update');
Route::delete('/users/{user}', [\App\Http\Controllers\UserController::class, 'destroy'])->middleware(['auth'])->name('users.destroy');


Route::get('/emails', \App\Http\Controllers\Emails\ViewController::class)->middleware(['auth'])->name('emails');
Route::post('/emails', \App\Http\Controllers\Emails\SendController::class)->middleware(['auth'])->name('emails.send');

Route::post('/dependencies/{type}/{id?}',\App\Http\Controllers\DependenciesController::class)
    ->middleware(['auth'])->where(['type'=>'states|cities']);

Route::post('/paint-select-in-grid/{city}',\App\Http\Controllers\PaintSelectsInGridController::class)
    ->middleware(['auth'])->where(['city'=>'[0-9]+']);