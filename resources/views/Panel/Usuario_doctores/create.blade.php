@extends('Plantillas.plantilla_panel')

@section('vistas')
    <h1>Formulario para agregar nuevos usuarios Doctores</h1>


    <div class="h-150 row justify-content-center h-100">
        <form action="{{url('/UsuariosDoctors')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div>
                <label>Nombre del doctor</label>
                <input type="text">
            </div>
        </form>
    </div>

@endsection
