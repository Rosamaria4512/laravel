<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ejercicio2Controller extends Controller
{
    public function verformulario(){
        return view('ejercicio2.ejercicio2');

    }
    
    public function resultadoejercicio2(Request $request){
         
        $calificacion1 = $request->calificacion1;
        $calificacion2 = $request->calificacion2;
        $calificacion3 = $request->calificacion3;
        $nota1 = $request->nota1;
        $nota2 =$request->nota2;

        $calparcial=($calificacion1+$calificacion2+$calificacion3)/3;
        $notaparcial=$calparcial*0.5;

        $p=$nota1*0.3;
        $f=$nota2*0.2;

        $notafinal=$notaparcial+$p+$f;


        

        return view('ejercicio2.resultadoejercicio2' , compact('notaparcial', 'p','f','notafinal'));
     # code...
            
        }   

    
}
