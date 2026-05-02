<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('pages.home');

Route::get('/about-us', function () {
    return view('pages.about');
})->name('pages.about');

Route::get('/doctors', [App\Http\Controllers\DoctorController::class, 'index'])->name('pages.doctors');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group([
    'prefix' => 'backends',
], function() {
    Route::group([
        'prefix' => 'doctors',
    ], function() {
        Route::get('/', [App\Http\Controllers\Backends\DoctorController::class, 'index'])->name('backends.doctors.index');
        Route::get('/create', [App\Http\Controllers\Backends\DoctorController::class, 'create'])->name('backends.doctors.create');
        Route::post('/', [App\Http\Controllers\Backends\DoctorController::class, 'store'])->name('backends.doctors.store');
        Route::get('/{doctor}/edit', [App\Http\Controllers\Backends\DoctorController::class, 'edit'])->name('backends.doctors.edit');
        Route::put('/{doctor}/update', [App\Http\Controllers\Backends\DoctorController::class, 'update'])->name('backends.doctors.update');
        Route::delete('/{doctor}/destroy', [App\Http\Controllers\Backends\DoctorController::class, 'destroy'])->name('backends.doctors.delete');

    });
});