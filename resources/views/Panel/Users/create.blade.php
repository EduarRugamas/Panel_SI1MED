@extends('Plantillas.plantilla_panel')

@section('vistas')

    <h1>Agregar un nuevo usuario</h1>

    <div class="card-body">
        <form action="{{url('/Users')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-row">
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Maxwerll Lopez" value="{{old('name')}}">

{{--                        @if($errors -> has('nombreDoctor'))--}}
{{--                            <small class="form-text text-danger">--}}

{{--                                {{$errors->first('nombreDoctor')}}--}}

{{--                            </small>--}}
{{--                        @endif--}}

                    </div>

                    <div class="form-group">
                        <label for="username">Nombre del usuario</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Dr. Maxwerll Lopez" value="{{old('tituloDoctor')}}">
                    </div>





                </div>
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
                        {{--                        <small class="form-text text-danger">Error de apellido paterno.</small>--}}
                    </div>


                    <div class="form-group">
                        <label for="password">Contrasena</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="rol">Tipo de Usuario</label>
                        <select class="form-control" id="rol" name="role_id">
                            <option value="">Seleccion un tipo de usuario</option>
                            <option value="2">Usuario normal</option>
                            <option value="4">Usuario Doctor</option>
                            <option value="3">Usuario Asistente</option>
                            <option value="5">Usuario Paciente</option>
                            {{-- <option value="1">Administrador</option>--}}
                        </select>
                    </div>
                </div>
            </div>



            <div class="form-group">
                <label for="avatar">Avatar</label>
                <input type="file" class="form-control  pb-5 pt-4 " id="avatar" name="avatar" >
                {{--                <small  class="form-text text-danger">Error de email.</small>--}}
            </div>


            <button type="submit" class="btn btn-info w-100">
                Crear usuario
            </button>
        </form>
    </div>

@endsection
