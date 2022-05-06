<?php

use App\Http\Controllers\ejercicio2Controller;
use App\Http\Controllers\ejercicio3Controller;
use App\Http\Controllers\ejercicio4Controller;
use App\Http\Controllers\ejercicio5Controller;
use App\Http\Controllers\ejercicio6Controller;
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
Route::get ('/', function(){
    return view('templete.Templete');
});


Route::get('/practica1', [Practica1Controller::class, 'verFormulariopractica1'])
->name('practica1');

Route::POST('resultado_pr1',[Practica1Controller::class, 'resltadodepractica1'])
->name('resultado_pr1');

Route::get('/practica2', [practica2Controller::class, 'practica2'])
->name('practica2');

Route::POST('resultado_pr2',[practica2Controller::class, 'resultado_pr2'])
->name('resultado_pr2');

Route::get('/ejercicio2', [ejercicio2Controller::class, 'verformulario'])
->name('ejercicio2');
Route::POST('resultadoejericio2',[ejercicio2Controller::class, 'resultadoejercicio2'])
->name ('resultadoejercicio2');


Route::get('/ejercicio3',[ejercicio3Controller::class, 'verformulario'])
->name('ejercicio3');
Route::POST('resultadoejercicio3',[ejercicio3Controller::class, 'resultadoejercicio3'])
->name('resultadoejercicio3');

Route::get('/ejercicio5', [ejercicio5Controller::class, 'verformulario'])
->name('ejercicio5');
Route::POST('resultadoejercicio5',[ejercicio5Controller::class , 'resultadoejercicio5'])
->name('resultadoejercicio5');

Route::get('/ejercicio6', [ejercicio6Controller::class, 'verformulario'])
->name('ejercicio6');
Route::post('/resultadoejercicio6', [ejercicio6Controller::class, 'resultadoejercicio6'])
->name('resultadoejercicio6'); 

Route::get('/ejercicio4' , [ejercicio4Controller::class, 'verformulario'])
->name('ejercicio4');
Route::POST('resultadoejercicio4', [ejercicio4Controller::class, 'resultadoejercicio4'])
->name('resultadoejercicio4');

