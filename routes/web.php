<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MealController;

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

Route::get('/', [MealController::class, 'index']);


Route::resource('dishes', MealController::class);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
});

// Route::post('inserData', [MealController::class, 'store']);
Route::get('dashboard', [MealController::class, 'show'])->name('dashboard');
Route::delete('dishes/delete/{dish}', [MealController::class, 'destroy']);

Route::resource('meal', MealController::class);
