{{--Usuarios pantalla edit --}}

@extends('Plantillas.plantilla_panel')

@section('vistas')

    <h1>
        Edicion de Usuarios Doctors
    </h1>

    <div class="card-body">
        <form action="{{url('/UsuariosDoctors/'. $usuarios_doctores->id)}}" method="post" enctype="multipart/form-data">
            {{@csrf_field()}}
            {{method_field('PATCH')}}


            <div class="form-row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nombreDoctor">Nombre del Doctor</label>
                        <input type="text" class="form-control" id="nombreDoctor" name="nombreDoctor" placeholder="Maxwerll" value="{{$usuarios_doctores->nombreDoctor}}">

                        @if($errors -> has('nombreDoctor'))
                            <small class="form-text text-danger">

                                {{$errors->first('nombreDoctor')}}

                            </small>
                        @endif

                    </div>
                    <div class="form-group">
                        <label for="tituloDoctor">Titulo del Doctor</label>
                        <input type="text" class="form-control" id="tituloDoctor" name="tituloDoctor" placeholder="Dr. Maxwerll Lopez" value="{{$usuarios_doctores->tituloDoctor}}">

                        @if($errors->has('tituloDoctor'))
                            <small class="form-text text-danger">
                                {{$errors->first('tituloDoctor')}}
                            </small>
                        @endif

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="apellidoDoctor">Apellidos del Doctor</label>
                        <input type="text" class="form-control" id="apellidoDoctor" name="apellidosDoctor" placeholder="Lopez" value="{{$usuarios_doctores->apellidosDoctor}}">
                        @if($errors -> has('apellidosDoctor'))
                            <small class="form-text text-danger">

                                {{$errors->first('apellidosDoctor')}}

                            </small>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="direccion">Direccion (opcional)</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" value="{{$usuarios_doctores->direccion}}">
                        {{--                        <small class="form-text text-danger">Error de apellido paterno.</small>--}}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group justify-content-center align-items-center">
                        <label for="logo">Logo (opcional)</label>
                        <input type="file" class="form-control pb-5 pt-4" id="logo" name="logo">
                        @if($errors -> has('logo'))
                            <small class="form-text text-danger">
                                {{$errors -> first('logo')}}
                            </small>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group justify-content-center align-items-center">
                        <label for="perfil">Perfil (opcional)</label>
                        <input type="file" class="form-control pb-5 pt-4 " id="perfil" name="perfil">

                        @if($errors -> has('perfil'))
                            <small class="form-text text-danger">
                                {{$errors -> first('perfil')}}
                            </small>
                        @endif

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nacimiento">Nacimiento (opcional)</label>
                        <input type="date" class="form-control" id="nacimiento" name="nacimiento" value="{{$usuarios_doctores->nacimiento}}">
                        {{--                        <small class="form-text text-danger">Error de apellido paterno.</small>--}}
                    </div>

                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="sexo">Sexo</label>
                        <select class="form-control" id="sexo" name="sexo" >
                            <option value="">Seleccione el sexo....</option>
                            <option value="hombre">Hombre</option>
                            <option value="mujer">Mujer</option>


                        </select>
                        @if($errors -> has('sexo'))
                            <small class="form-text text-danger">
                                {{$errors->first('sexo')}}
                            </small>
                        @endif
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="lema">Lema (opcional)</label>
                <input type="text" class="form-control" id="lema" name="lema" value="{{$usuarios_doctores->lema}}">
                {{--                        <small class="form-text text-danger">Error de apellido paterno.</small>--}}
            </div>
            <div class="form-group">
                <label for="mision">Mision (opcional)</label>
                <input type="text" class="form-control" id="mision" name="mision" value="{{$usuarios_doctores->mision}}">
                {{--                <small  class="form-text text-danger">Error de email.</small>--}}
            </div>

            <div class="form-row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="equipoLocal">Equipo Local</label>
                        <select class="form-control" id="equipoLocal" name="equipoLocal">
                            <option value="">Selecione una opcion.....</option>
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                        {{--                            <small class="form-text text-danger">Error de select.</small>--}}
                    </div>

                </div>

                <div class="col-md-6">
                    <div class="form-group ">
                        <label for="marca">Marca (opcional)</label>
                        <input type="file" class="form-control" id="marca" name="marca">

                        @if($errors->has('marca'))

                            {{$errors->first('marca')}}
                        @endif

                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6">
                    <div class="form-group ">
                        <label for="user_id">Id doctor (campo requerido)</label>
                        <input type="number" class="form-control" id="user_id" name="user_id" value="{{$usuarios_doctores->user_idclea}}">

                        @if($errors-> has('user_id'))
                            <small class="form-text text-danger">

                                {{$errors->first('user_id')}}

                            </small>
                        @endif

                    </div>
                </div>
            </div>


            <button type="submit" class="btn btn-info w-100">
                Realizar Cambios
            </button>
        </form>
    </div>



@endsection
