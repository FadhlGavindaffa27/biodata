<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesertadidikR;
use App\Http\Controllers\GuruR;
use App\Http\Controllers\PesertadidikPDF;
use App\Http\Controllers\UserC;

Route::resource('pesertadidik', PesertadidikR::class);
Route::resource('guru', GuruR::class);
Route::resource('pesertadidik', PesertadidikR::class);
Route::get('pdf', [PesertadidikPDF::class, 'pdf']);



Route::get('/', function () {
    return view('dashboard');
})->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Route::get('register', [UserC::class, 'register'])->name('register');
Route::get('login', [UserC::class, 'login'])->name('login');
Route::post('login', [UserC::class, 'login_action'])->name('login.action');
Route::post('register', [UserC::class, 'register_action'])->name('register.action');
Route::get('logout', [UserC::class, 'logout'])->name('logout');