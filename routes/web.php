<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\AirportController;
use App\Http\Controllers\AirportController;
use App\Http\Controllers\AirportRunwayController;
use App\Http\Controllers\RunwaySurfaceController;



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
    $items = App\Models\RunwaySurface::all();

    return view('dashboard', compact('items'));
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', function () {
    $items = App\Models\RunwaySurface::all();

    return view('dashboard', compact('items'));
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::resource('airport', AirportController::class);
Route::resource('runway', AirportRunwayController::class);
Route::resource('surface', RunwaySurfaceController::class);