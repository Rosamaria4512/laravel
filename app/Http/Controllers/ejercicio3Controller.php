<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ejercicio3Controller extends Controller
{
    public function verFormulario(){
        return view('ejercicio3.ejercicio3');
    }

    public function resultadoejercicio3(Request $request){
        //asigno a la variable numer1 atraves de request lo del input numero1
        $nombresyapellidos= $request->nombresyapellidos;
        $horasdetrabajomensual= $request->horasdetrabajomensual;
        $valorporhora= $request->valorporhora;
        $bonificacion= $request->bonificacion;
        $auxiliodetransporte=$request->auxiliodetransporte;
        $credito = $request->credito;
        
    $salario = $horasdetrabajomensual * $valorporhora + $bonificacion + $auxiliodetransporte + $credito;
            
            
        return view('ejercicio3.resultadoejercicio3', compact('nombresyapellidos', 'horasdetrabajomensual'
    ,'valorporhora', 'bonificacion', 'auxiliodetransporte','credito','salario'));
     # code...
        

    }
}


