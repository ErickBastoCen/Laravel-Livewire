<?php

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
    return view('dashboard');
})->name('dashboard');

Route::get('/counter', function () {
    return view('livewire.counter');
});

Route::get('/map', function () {
    return view('livewire.school-map');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/formalities', function () {
    return view('data.formalities');
})->name('formalities');

Route::get('/staff', function () {
    return view('data.staff');
})->name('staff');
