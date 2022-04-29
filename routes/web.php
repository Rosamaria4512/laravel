<?php

use App\Http\Controllers\Practica1Controller;
use App\Http\Controllers\practica2Controller;
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
    return view('welcome');
});

Route::get('/practica1', [Practica1Controller::class, 'verFormulariopractica1'])
->name('ejercicio1');

Route::POST('resultado_pr1',[Practica1Controller::class, 'resltadodepractica1'])
->name('resultado_pr1');

Route::get('/practica2', [practica2Controller::class, 'practica2'])
->name('practica2');

Route::POST('resultado_pr2',[practica2Controller::class, 'resultado_pr2'])
->name('resultado_pr2');