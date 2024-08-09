<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\BackgroundController;

Route::get('/', function () {
    return view('web.homepage');
})->name('homepage');

Route::get('/homepage', function () {
    return view('web.homepage');
})->name('homepage');

Route::get('/citizen-charter', function () {
    return view('web.citizen-charter');
})->name('citizen-charter');

Route::get('/citizen-charter1', function () {
    return view('web.citizen-charter1');
})->name('citizen-charter1');

Route::get('/citizen-charter2', function () {
    return view('web.citizen-charter2');
})->name('citizen-charter2');

Route::get('/admin', [AdminController::class, 'index'])->name('admin');

// FileController Routes
Route::post('/admin', [FileController::class, 'store'])->name('admin.store');
Route::get('/admin/edit/{id}', [FileController::class, 'edit'])->name('admin.edit');
Route::put('/admin/update/{id}', [FileController::class, 'update'])->name('admin.update');
Route::delete('/admin/delete/{id}', [FileController::class, 'destroy'])->name('admin.destroy');


Route::post('/upload-background', [BackgroundController::class, 'upload'])->name('upload.background');

