<?php

use App\Http\Controllers\FertileController;
use App\Http\Controllers\KbController;
use App\Http\Controllers\LpController;
use App\Http\Controllers\PostpartumController;
use App\Http\Controllers\ToddlerController;
use App\Http\Controllers\PosyanduController;
use App\Http\Controllers\PregnantController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UptoddlerController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('backend.landingPage');
// });

Route::get('/', [LpController::class, 'imageScroll'])->name('image-lp');

//route data Kb
Route::get('/kb/index', [KbController::class, 'index'])->name('kb-index');
Route::get('/kb/create', [KbController::class, 'create'])->name('kb-create');
Route::post('kb/store', [KbController::class, 'store'])->name('kb-store');
Route::get('/kb/edit{id}', [KbController::class, 'edit'])->name('kb-edit');
Route::put('/kb/update{id}', [KbController::class, 'update'])->name('kb-update');
Route::delete('/kb/delete{id}', [KbController::class, 'destroy'])->name('kb-delete');

//route data Balita
Route::get('/balita/create', [ToddlerController::class, 'create'])->name('todller-create');
Route::get('/balita/index', [ToddlerController::class, 'index'])->name('toddler-index');
Route::post('balita/store', [ToddlerController::class, 'store'])->name('toddler-store');
Route::delete('/balita/delete{id}', [ToddlerController::class, 'destroy'])->name('toddler-delete');
Route::get('/balita/edit{id}', [ToddlerController::class, 'edit'])->name('toddler-edit');
Route::put('/balita/update{id}', [ToddlerController::class, 'update'])->name('toddler-update');

//route data Posyandu
Route::get('/posyandu/index', [PosyanduController::class, 'index'])->name('posyandu-index');
Route::get('/posyandu/create', [PosyanduController::class, 'create'])->name('posyandu-create');
Route::post('posyandu/store', [PosyanduController::class, 'store'])->name('posyandu-store');
Route::delete('/posyandu/delete{id}', [PosyanduController::class, 'destroy'])->name('posyandu-delete');
Route::get('/posyandu/edit{id}', [PosyanduController::class, 'edit'])->name('posyandu-edit');
Route::put('/posyandu/update{id}', [PosyanduController::class, 'update'])->name('posyandu-update');

//route data layanan
Route::get('/service/index', [ServiceController::class, 'index'])->name('service-index');
Route::get('/service/create', [ServiceController::class, 'create'])->name('service-create');
Route::post('service/store', [ServiceController::class, 'store'])->name('service-store');
Route::delete('/service/delete{id}', [ServiceController::class, 'destroy'])->name('service-delete');
Route::get('/service/edit{id}', [ServiceController::class, 'edit'])->name('service-edit');
Route::put('/service/update{id}', [ServiceController::class, 'update'])->name('service-update');

//route data ibu hamil
Route::get('/pregnant/index', [PregnantController::class, 'index'])->name('pregnant-index');
Route::get('/pregnant/create', [PregnantController::class, 'create'])->name('pregnant-create');
Route::post('pregnant/store', [PregnantController::class, 'store'])->name('pregnant-store');
Route::delete('/pregnant/delete{id}', [PregnantController::class, 'destroy'])->name('pregnant-delete');
Route::get('/pregnant/edit{id}', [PregnantController::class, 'edit'])->name('pregnant-edit');
Route::put('/pregnant/update{id}', [PregnantController::class, 'update'])->name('pregnant-update');

//route data ibu nifas
Route::get('/postpartum/index', [PostpartumController::class, 'index'])->name('postpartum-index');
Route::get('/postpartum/create', [PostpartumController::class, 'create'])->name('postpartum-create');
Route::post('postpartum/store', [PostpartumController::class, 'store'])->name('postpartum-store');
Route::delete('/postpartum/delete{id}', [PostpartumController::class, 'destroy'])->name('postpartum-delete');
Route::get('/postpartum/edit{id}', [PostpartumController::class, 'edit'])->name('postpartum-edit');
Route::put('/postpartum/update{id}', [PostpartumController::class, 'update'])->name('postpartum-update');

//route data PUS
Route::get('/fertile/index', [FertileController::class, 'index'])->name('fertile-index');
Route::get('/fertile/create', [FertileController::class, 'create'])->name('fertile-create');
Route::post('fertile/store', [FertileController::class, 'store'])->name('fertile-store');
Route::get('/fertile/edit{id}', [FertileController::class, 'edit'])->name('fertile-edit');
Route::put('/fertile/update{id}', [FertileController::class, 'update'])->name('fertile-update');
Route::delete('/fertile/delete{id}', [FertileController::class, 'destroy'])->name('fertile-delete');

//statistik
Route::get('/statistik/index', [UptoddlerController::class, 'index'])->name('chart-index');

//exportPDF
Route::get('/export/toddler', [ToddlerController::class, 'exportpdf'])->name('toddler-pdf');


Route::get('/add/user', [UserController::class, 'addUser'])->name('add-user');
Route::get('/user/index', [UserController::class, 'indexUser'])->name('user-index');
Route::delete('/user/delete{id}', [UserController::class, 'destroyUser'])->name('user-delete');
Route::post('user/store', [UserController::class, 'store'])->name('user-store');

//laporan
Route::get('/report/index', [ReportController::class, 'index'])->name('report-index');
Route::get('/report/view{id}', [ReportController::class, 'view'])->name('report-view');
Route::get('/report/create', [ReportController::class, 'create'])->name('report-create');
Route::post('report/store', [ReportController::class, 'store'])->name('report-store');
Route::delete('/report/delete{id}', [ReportController::class, 'destroy'])->name('report-delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
