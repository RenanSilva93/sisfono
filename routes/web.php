<?php

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
    return view('pages.dashboard');
})->name('dashboard');

Route::get('/paciente', function () {
    return view('pages.paciente.paciente');
})->name('paciente');

Route::get('/perfil', function () {
    return view('pages.perfil.perfil');
})->name('perfil');

//Route::get('/', ['users' => 'Controllers@method']);
