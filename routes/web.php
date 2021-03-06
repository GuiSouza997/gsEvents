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
use App\Http\Controllers\EventController;

Route::get('/events/create', [EventController::class, 'create']);
Route::get('/', [EventController::class, 'index']);
Route::post('/events', [EventController::class, 'store']);
Route::put('/events', [EventController::class, 'store']);
Route::get('/events/{id}', [EventController::class, 'show']);

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/products', function () {
    return view('products', ['name' => 'BGS']);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
