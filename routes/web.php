<?php

use App\Http\Controllers\KbController;
use App\Http\Controllers\ToddlerController;
use App\Http\Controllers\PosyanduController;
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
    return view('backend/master');
});


//route data Kb
Route::get('/kb/index', [KbController::class, 'index'])->name('kb-index');
Route::get('/kb/create', [KbController::class, 'create'])->name('kb-create');
Route::post('kb/store', [KbController::class, 'store'])->name('kb-store');
Route::get('/kb/edit{id}', [KbController::class, 'edit'])->name('kb-edit');
Route::put('/kb/update{id}', [KbController::class, 'update'])->name('kb-update');
Route::delete('/kb/delete{id}', [KbController::class, 'destroy'])->name('kb-delete');

//route data Balita
Route::get('/balita/create', [BalitaController::class, 'create'])->name('balita-create');
Route::get('/balita/index', [ToddlerController::class, 'index'])->name('toddler-index');

//route data Posyandu
Route::get('/posyandu/index', [PosyanduController::class, 'index'])->name('posyandu-index');
Route::get('/posyandu/create', [PosyanduController::class, 'create'])->name('posyandu-create');
Route::post('posyandu/store', [PosyanduController::class, 'store'])->name('posyandu-store');
Route::delete('/posyandu/delete{id}', [PosyanduController::class, 'destroy'])->name('posyandu-delete');
Route::get('/posyandu/edit{id}', [PosyanduController::class, 'edit'])->name('posyandu-edit');
Route::put('/posyandu/update{id}', [PosyanduController::class, 'update'])->name('posyandu-update');
