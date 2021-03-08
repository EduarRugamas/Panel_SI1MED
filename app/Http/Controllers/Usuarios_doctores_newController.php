<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidacionUsuariosDoctors;
use App\Usuarios_doctores_new;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\Utils;


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

        public function store(ValidacionUsuariosDoctors $request){

            $datosUsuarios_doctors = $request -> except('_token');

            if($request->hasFile('logo') && $request->hasFile('perfil') && $request->hasFile('marca')){

                $datosUsuarios_doctors['logo'] = $request->file('logo')->store('Images_Doctors/Logo','public');
                $datosUsuarios_doctors['perfil'] = $request->file('perfil')->store('Images_Doctors/Perfil','public');
                $datosUsuarios_doctors['marca'] = $request->file('marca')->store('Images_Doctors/Marca','public');

            }
            Usuarios_doctores_new::insert($datosUsuarios_doctors);

            return redirect('/');
        }

        public function edit($id){

            $usuarios_doctores = Usuarios_doctores_new::findOrFail($id);

            return view('Panel.Usuario_doctores.edit',compact('usuarios_doctores'));
        }

        public function update(ValidacionUsuariosDoctors $request, $id){

                $datos_usuarios_new = request()->except(['_token','_method']);

                if ($request->hasFile('logo') && $request->hasFile('perfil') && $request->hasFile('marca')){

                    $usuarios_doctores = Usuarios_doctores_new::findOrFail($id);

                    Storage::delete('public/'.$usuarios_doctores->logo);
                    Storage::delete('public/'.$usuarios_doctores->perfil);
                    Storage::delete('public/'.$usuarios_doctores->marca);

                    $datos_usuarios_new['logo']= $request->file('logo')->store('Images_Doctors/Logo', 'public');
                    $datos_usuarios_new['perfil']= $request->file('perfil')->store('Images_Doctors/Perfil', 'public');
                    $datos_usuarios_new['marca']= $request->file('marca')->store('Images_Doctors/Marca', 'public');

                }

                Usuarios_doctores_new::where('id','=',$id)->update($datos_usuarios_new);

                return redirect('UsuariosDoctors');

        }
        public function destroy($id){

                $usuarios_doct = Usuarios_doctores_new::findOrFail($id);

                if (Storage::delete('public/'.$usuarios_doct->logo) && Storage::delete('public/'.$usuarios_doct->perfil) && Storage::delete('public/'.$usuarios_doct->marca)){

                    Usuarios_doctores_new::destroy($id);

                }

                return redirect('UsuariosDoctors');

        }


}
