<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\authcontroller;
use App\Http\Controllers\OsisController;
use App\Http\Controllers\SiswaController;
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
    return view('home');
});

 Route::get('/sesi',[authcontroller::class,'index'])->name('auth');
 Route::post('/sesi',[authcontroller::class,'login']);
 Route::get('/reg',[authcontroller::class,'create'])->name('registrasi');
 Route::post('/reg',[authcontroller::class,'register']);
 
 Route::get('regter', function () {
     return view('register');
    });
    
Route::get('/admin',[AdminController::class,'index'])->name('admin');
Route::get('/osis',[OsisController::class,'index'])->name('osis');
Route::get('/pembina',[PembinaController::class,'index'])->name('pembina');
Route::get('/siswa',[SiswaController::class,'index'])->name('siswa');


Route::get('/verify{verify_key}',[authcontroller::class,'verify']);

Route::get('/logout',[authcontroller::class,'logout'])->name('logout');