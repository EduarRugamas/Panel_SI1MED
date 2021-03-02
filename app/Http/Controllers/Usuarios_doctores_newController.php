<?php

namespace App\Http\Controllers;

use App\Usuarios_doctores_new;
use Illuminate\Http\Request;


class Usuarios_doctores_newController extends Controller
{
    public function index(){

        $usuarios = Usuarios_doctores_new::paginate(50);


        return view('Home.home', compact('usuarios'));

    }
    public function create(Request $request){
//            $doctors_new = new Usuarios_doctores_new();
//
//            //Enviando la informacion de las variables recupardas de el form hacia las
//            // variables de la base de datos
//                          //base de datos             //formulario
//            $doctors_new -> nombreDoctor = $request-> nombreDoctor;
//            $doctors_new -> apellidosDoctor = $request-> apellidosDoctor;
//            $doctors_new -> tituloDoctor = $request-> tituloDoctor;
//            $doctors_new-> direccion = $request -> direccion;
//            $doctors_new -> logo = $request -> logo;
//            $doctors_new-> perfil = $request -> perfil;
//            $doctors_new-> nacimiento = $request -> nacimiento;
//            $doctors_new -> sexo = $request-> sexo;
//            $doctors_new -> lema = $request -> lema;
//            $doctors_new -> mision = $request -> mision;
//            $doctors_new-> equipoLocal = $request -> equipoLocal;
//            $doctors_new -> marca = $request -> marca;
//
//            $doctors_new -> save();

            return view('Panel.Usuario_doctores.create');

    }

    public function store(){

    }
    
    public function edit(){

    }

    public function update(){

    }
    public function destroy(){

    }


}
