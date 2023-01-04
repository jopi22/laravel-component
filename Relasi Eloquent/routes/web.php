<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengeluaranCTRL;
use App\Http\Controllers\rusakController;

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

Route::get('pengeluaran', [PengeluaranCTRL::class, 'get']);
Route::get('rusak', [rusakController::class, 'index']);
Route::get('motor', [rusakController::class, 'motor']);
Route::get('motor/{motor}', [rusakController::class, 'rekap_motor'])->name('rekap');
