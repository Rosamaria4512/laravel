<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ejercicio2Controller extends Controller
{
    public function verformulario(){
        return view('ejercicio2.ejercicio2');

    }
    
    public function resultadoejercicio2(Request $request){

        $calificacion1=$request->calificacion1;
        $calificacion2 =$request->calificacion2;
        $calificacion3 =$request->calificacion3;
        $calfinal=$request->calfinal;


            $calfinal=($calificacion1+$calificacion2+$calificacion3)/3;
            # code...
        }

    
}
