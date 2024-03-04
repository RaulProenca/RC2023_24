<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/atleta/create', [App\Http\Controllers\AtletaController::class, 'create'])->name('atleta.create');
Route::get('/atleta', [App\Http\Controllers\AtletaController::class,'index'])->name('atleta.index');
Route::post('/atleta', [App\Http\Controllers\AtletaController::class,'store'])->name('atleta.store');
//Route::get('/atleta/{atleta}', [App\Http\Controllers\AtletaController::class,'show'])->name('atleta.show');
Route::get('/atleta/{atleta}/edit', [App\Http\Controllers\AtletaController::class,'edit'])->name('atleta.edit');
Route::put('/atleta/{atleta}', [App\Http\Controllers\AtletaController::class,'update'])->name('atleta.update');
Route::delete('/atleta/{atleta}', [App\Http\Controllers\AtletaController::class,'destroy'])->name('atleta.destroy');
