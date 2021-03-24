@extends('Plantillas.plantilla')

    @section('bootstrap_css')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    @endsection

    @section('tablas')
        @isset($users, $users_doctors)
        <div class="card">
            <div class="card-body">
                <table  class="table table-striped table-responsive" id="tabla_users">
                    <thead>
                    <tr>
                        <th>Rol</th>
                        <th>Nombre y apellido</th>
                        <th>Nombre de usuario</th>
                        <th>Correo Electronico</th>
                        <th>Avatar</th>
                        <th>Acciones</th>
                        <th>hola</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $items)
                            <tr>
                                @if($items -> role_id == 2)
                                    <th>Usuario Normal</th>
                                @elseif($items -> role_id == 3)
                                    <th>Usuario Asistente</th>
                                @elseif($items -> role_id == 4)
                                    <th>Usuario Doctor</th>
                                @elseif($items -> role_id == 5)
                                    <th>Paciente</th>
                                @elseif($items -> role_id == 1)
                                    <th>Usuario Administrador</th>
                                @endif
                                <th>{{$items -> name}}</th>
                                <th>{{$items -> username}}</th>
                                <th>{{$items -> email}}</th>
                                <th>
                                    <img src="{{$items->logo}}" alt="" width="200" height="200">
                                </th>
                                <th>

                                    <a class="btn btn-secondary" href="{{url('/UsuariosDoctors/'.$items->id.'/edit')}}">
                                        Edit
                                    </a>
                                    <form method="POST" action="{{ url('/UsuariosDoctors/'.$items->id)}}">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <button class="btn btn-danger" type="submit" onclick="return confirm('¿Desea Borrar?');">Borrar</button>
                                    </form>
                                    @if($items -> role_id == 4)
                                        <a class="btn btn-secondary" href="{{url('/UsuariosDoctors/'.$items->id.'/edit')}}">
                                            Crear usuario Doctor
                                        </a>
                                    @elseif($items -> role_id == 3)
                                        <a class="btn btn-secondary" href="{{url('/UsuariosDoctors/'.$items->id.'/edit')}}">
                                            Crear usuario Asistente
                                        </a>

                                    @endif
                                </th>
                                @endforeach

                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
        @endisset
    @endsection

@section('script')
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#tabla_users').DataTable();
        } );
    </script>
@endsection
