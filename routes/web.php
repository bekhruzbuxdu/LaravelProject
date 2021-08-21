<?php

use App\Http\Controllers\HunterController;
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

Route::get('/hunter', [HunterController::class, 'index'])->name('hunter.index');
Route::get('/create', [HunterController::class, 'create'])->name('hunter.create');
Route::post('hunter/store', [HunterController::class, 'store'])->name('hunter.store');
