<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ejercicio5Controller extends Controller
{
    public function verformulario(){
        return view('ejercicio5.ejercicio5');
    }

    public function resultadoejercicio5(Request $request){

    
        $numero1= $request->numero1;
        $caracter= $request->caracter;
        $numero2= $request->numero2;

        if ($caracter== "+") {

            $resultado1= $numero1 + $numero2;
        }

        elseif ($caracter== "-") {

            $resultado1 = $numero1 - $numero2;
        }

        elseif ($caracter == "*") {

            $resultado1 = $numero1 * $numero2;
        }

        elseif ($caracter == "/") {

            $resultado1= $numero1 / $numero2;
        }

         elseif ($caracter== "%") {

            $resultado1= $numero1 % $numero2;
         }
    
    
        return view('ejercicio5.resultadoejercicio5', compact("resultado1"));
    }
    
}


