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
    return view('home');
});

// CREO UNA NUOVA ROTTA (ROUTES)

Route::get('/', function () {
    return view('larablade',
    ['creator' => 'Massimo'],
    ['framework' => 'Larablade']
    );
});



