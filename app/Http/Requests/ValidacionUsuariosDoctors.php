<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionUsuariosDoctors extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            //formulario de creacion de usuarios doctores y asistentes

            'nombreDoctor' => 'required|alpha|min:1|max:50',

            'apellidosDoctor' => 'required|min:1|max:100',

            'user_id' => 'required|numeric|min:1,max999999',

            'tituloDoctor' => 'required|min:4,max:150',



            //campo de logo es tipo imagen validacion, validacion de campos tipo imagen o archivos
            'logo' => 'mimes:jpeg,jpg,png,bmp',
            'perfil' => 'mimes:jpeg,jpg,png,bmp',
            'marca'=> 'mimes:jpeg,jpg,png,bmp',

            //validadicion del campo de sexo que es requerido
            'sexo' => 'required|in:hombre,mujer',

            //validacion de equipo local
            'equipoLocal'=> 'required|in:si,no'

        ];
    }


    public function messages()
    {
        return [

            //nombre del doctor
            'nombreDoctor.required' => 'El :attribute es requerido',
            'nombreDoctor.min' => 'Se requiere mas de una letra',
            'nombreDoctor.max' => 'Excedido el maximo de 50 caracteres',

            //Apellido del doctor
            'apellidosDoctor.required' => 'Los :attribute son requeridos',
            'apellidosDoctor.min' => 'Se requiere mas de una letra',
            'apellidosDoctor.max' => 'Excedido el maximo de 100 caracteres',

            //validacion de titulo de doctor

            'tituloDoctor.required' => 'Este campo es requerido',
            'tituloDoctor.min' => 'El :attribute es demasiado corto',


            //Logo de formulario doctors
            'logo.mimes' => 'El formato seleccionado no corresponde a los formatos aceptados .jpg, .jpeg, .png, .bmp',

            //validacion de campo perfil
            'perfil.mimes' => 'El formato seleccionado no corresponde a los formatos aceptados .jpg, .jpeg, .png, .bmp',

            //validacion de campo marca
            'marca.mimes' => 'El formato seleccionado no corresponde a los formatos aceptados .jpg, .jpeg, .png, .bmp',


            //validaciones de sexo

            'sexo.required' => 'El Campo es requerido',
            'sexo.in' => 'Seleccione hombre o mujer',


            //validacion de used_id

            'user_id.required' => 'El campo es requerido, numeros positivos',
            'user_id.digits_between' => 'Se requiere numeros positivos',

            //validacion de equipo local
            'equipoLocal.required' => 'El campo es requerido'


        ];
    }


    public function attributes()
    {
        return [

            'nombreDoctor' => 'Nombre del doctor',
            'apellidosDoctor' => 'Apellidos',
            'tituloDoctor' => ' titulo '

        ];
    }


}
