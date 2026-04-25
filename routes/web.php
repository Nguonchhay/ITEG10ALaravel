<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('pages.home');

Route::get('/about-us', function () {
    return view('pages.about');
})->name('pages.about');

// Route::get('/meet-our-experts', function () {
//     return view('pages.doctors');
// })->name('pages.doctors');

Route::get('/doctors', [App\Http\Controllers\DoctorController::class, 'index'])->name('pages.doctors');
Route::get('/doctors/create', [App\Http\Controllers\DoctorController::class, 'create'])->name('pages.doctors.create');
Route::post('/doctors', [App\Http\Controllers\DoctorController::class, 'store'])->name('pages.doctors.store');
Route::get('/doctors/{doctor}/edit', [App\Http\Controllers\DoctorController::class, 'edit'])->name('pages.doctors.edit');
Route::put('/doctors/{doctor}/update', [App\Http\Controllers\DoctorController::class, 'update'])->name('pages.doctors.update');
Route::delete('/doctors/{doctor}/destroy', [App\Http\Controllers\DoctorController::class, 'destroy'])->name('pages.doctors.delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
