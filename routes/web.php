<?php

use App\Http\Controllers\WorkController;
use App\Http\Controllers\PhpController;
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

Route::get('/works', [WorkController::class, 'index']);
Route::get('/works/create', [WorkController::class, 'create']);
Route::post('/works', [WorkController::class, 'store']);
Route::get('/works/{id}', [WorkController::class, 'show']);
Route::get('/works/delete/{id}', [WorkController::class, 'delete']);







Route::get('/php', [PhpController::class, 'php']);