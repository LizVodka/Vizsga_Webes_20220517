<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\KategoriaController;

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

Route::get('/dashboard', [TestController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::get('/kategoria', [KategoriaController::class, 'index']);

require __DIR__.'/auth.php';
