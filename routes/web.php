<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Supplier\WasteSupply;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});


Route::get('dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');

Route::middleware(['auth:sanctum', 'verified', 'isSupplier'])->namespace('App\Http\Controllers\Supplier')->group(function () {
    Route::get('supply-waste', 'WasteSupply@index')->name('supply-waste');
});
