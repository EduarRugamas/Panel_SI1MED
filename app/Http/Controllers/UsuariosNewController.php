<?php

namespace App\Http\Controllers;


use App\User;
use App\Usuarios_New_Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UsuariosNewController extends Controller
{
    //

    public function index(){

        $users = Usuarios_New_Model::paginate(50);

        return view('Home.home', compact('users'));
    }

    public function create(){
        return view('Panel.Users.create');
    }

    public function store(Request $request){

        $datosUsuariosNew = $request -> except('_token');

        if ($request->hasFile('avatar')){
            $datosUsuariosNew['avatar'] = $request->file('avatar')->store('Images_Usuarios/Avatares','public');
        }else if ($request->input('password')){

            $datosUsuariosNew['password'] = Hash::make('password');

            Usuarios_New_Model::insert($datosUsuariosNew);
        }

        return redirect('/');
    }

}
