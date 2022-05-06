<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ejercicio4Controller extends Controller
{
    public function verformulario(){
        return view ('ejercicio4.ejercicio4');
    }
    
    public function resultadoejercicio4(Request $request){
    $x= $request->x;
    $potencia=pow($x,2);
    $resultado=3*$potencia+7*$x-15;

    return view ('ejercicio4.resultadoejercicio4', compact('resultado'));

    }
}