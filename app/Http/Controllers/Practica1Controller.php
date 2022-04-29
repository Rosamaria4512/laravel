<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Practica1Controller extends Controller
{
    public function verFormulariopractica1(){
        return view('practica1.practica1');
    }

    public function resltadodepractica1(Request $request){
        //asigno a la variable numer1 atraves de request lo del input numero1
        $numero1= $request->numero1;
        return view('practica1.resultado_pr1',compact('numero1'));
        

    }
}
