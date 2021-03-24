@extends('Plantillas.plantilla')
@section('titulo')@endsection
@section('url_noticias')
    {{url('/noticias')}}
@endsection
@section('url_publicidad')
    {{url('/publicidad')}}
@endsection
@section('url_users')
    {{url('/Users')}}
@endsection
@section('vistas')
{{--    <h1>Mostrando las noticias y publicidades</h1>--}}
{{--    <a class="btn btn-primary" href="{{url('/noticias')}}">Ver Noticias</a>--}}
{{--    <a name="publicidad" class="btn btn-primary" href="{{url('/publicidad')}}">Ver Publicidades</a>--}}
{{--    <a name="UsuariosDoctors" class="btn btn-primary" href="{{url('/UsuariosDoctors')}}">Ver usuarios Doctores</a>--}}
{{--    <a name="Users" class="btn btn-primary" href="{{url('/Users')}}">Ver usuarios Registrados</a>--}}
@endsection
@section('tablas')

    @isset ($noticias)
        @if($noticias -> isEmpty())
    @section('tablas')

    <table class="table table-light">
        <thead class="thead-light">
        <tr>
            <th>Foto</th>
            <th>Contenido</th>
            <th>Fecha</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>No hay contenido</td>
            <td>No hay contenido</td>
            <td>No hay contenido</td>
            <td>No hay contenido </td>
        </tr>

        </tbody>
    </table>

@else
    @include('Panel.Noticias.index')
@endif
@endsection
@endisset

@isset($publicidad)
    @if ($publicidad -> isEmpty())
@section('tablas')

    <table class="table table-light">
        <thead class="thead-light">
        <tr>
            <th>Foto</th>
            <th>Contenido</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>No hay contenido</td>
            <td>No hay contenido</td>
            <td>No hay contenido </td>
        </tr>
        </tbody>
    </table>
@endsection
@else
    @include('Panel.Publicidades.index')
@endif

@endisset

@isset($usuarios_doctores)
    @if ($usuarios_doctores -> isEmpty())
@section('tablas')

    <table class="table table-light">
        <thead class="thead-light">
        <tr>
            <th>Datos</th>
            <th>Datos</th>
            <th>Datos</th>
            <th>Datos</th>
            <th>Datos</th>
            <th>Datos</th>
            <th>Datos</th>
            <th>Datos</th>
            <th>Datos</th>
            <th>Datos</th>
            <th>Datos</th>
            <th>Datos</th>



        </tr>
        </thead>
        <tbody>
        <tr>
            <td>No hay contenido</td>
            <td>No hay contenido</td>
            <td>No hay contenido </td>
            <td>No hay contenido </td>
            <td>No hay contenido </td>
            <td>No hay contenido </td>
            <td>No hay contenido </td>
            <td>No hay contenido </td>
            <td>No hay contenido </td>
            <td>No hay contenido </td>
            <td>No hay contenido </td>
            <td>No hay contenido </td>
        </tr>
        </tbody>
    </table>
@endsection
@else
    @include('Panel.Usuario_doctores.index')
@endif

@endisset

@isset($users)
    @if ($users -> isEmpty())
@section('tablas')

    <table class="table table-light">
        <thead class="thead-light">
        <tr>
            <th>Datos</th>
            <th>Datos</th>
            <th>Datos</th>
            <th>Datos</th>
            <th>Datos</th>
            <th>Datos</th>
            <th>Datos</th>
            <th>Datos</th>
            <th>Datos</th>
            <th>Datos</th>
            <th>Datos</th>
            <th>Datos</th>



        </tr>
        </thead>
        <tbody>
        <tr>
            <td>No hay contenido</td>
            <td>No hay contenido</td>
            <td>No hay contenido </td>
            <td>No hay contenido </td>
            <td>No hay contenido </td>
            <td>No hay contenido </td>
            <td>No hay contenido </td>
            <td>No hay contenido </td>
            <td>No hay contenido </td>
            <td>No hay contenido </td>
            <td>No hay contenido </td>
            <td>No hay contenido </td>
        </tr>
        </tbody>
    </table>
@endsection
@else
    @include('Panel.Users.index')
@endif

@endisset



@endsection
