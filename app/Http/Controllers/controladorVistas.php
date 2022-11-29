<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorDiario;

class controladorVistas extends Controller
{
    public function procesarRecuerdo(validadorDiario $req){
        
        return redirect('registrar')->with('confirmación','Llegó correctamente');
       // return  $req->all();
       // return $req-> path();
       // return $req->url();
        //return $req->ip();
    }


    public function showEliminar(){
        return view('eliminar');
    }

    public function showWelcome(){
        return view('welcome');
    }


    public function showHome(){
        return view('home');
    }

  

    public function showRecuerdos(){
        return view('recuerdo');
    }

}
