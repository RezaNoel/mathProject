<?php

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
    return view('mycal');
});
use App\Http\Controllers\CalculatorController;

Route::post('/calculateBMI', [CalculatorController::class, 'calculateBMI'])->name('calculateBMI');
Route::post('/calculateRectangle', [CalculatorController::class, 'calculateRectangle'])->name('calculateRectangle');
Route::post('/calculate', [CalculatorController::class, 'calculate'])->name('calculate');
Route::post('/calculateFactorial', [CalculatorController::class, 'calculateFactorial'])->name('calculateFactorial');
