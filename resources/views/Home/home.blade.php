@extends('Plantillas.plantilla_panel')
@section('vistas')
{{--    <div class="flex-center position-ref full-height">--}}
{{--        @if (Route::has('login'))--}}
{{--            <div class="top-right links">--}}
{{--                @auth--}}
{{--                    <a href="{{ url('/home') }}">Home</a>--}}
{{--                @else--}}
{{--                    <a href="{{ route('login') }}">Login</a>--}}

{{--                    @if (Route::has('register'))--}}
{{--                        <a href="{{ route('register') }}">Register</a>--}}
{{--                    @endif--}}
{{--                @endauth--}}
{{--            </div>--}}
{{--        @endif--}}
{{--    </div>--}}
    <h1>Mostrando las noticias y publicidades</h1>
    <a name="noticias" class="btn btn-primary" href="{{url('/noticias')}}">Ver Noticias</a>
    <a name="publicidad" class="btn btn-primary" href="{{url('/publicidad')}}">Ver Publicidades</a>
    <a name="UsuariosDoctors" class="btn btn-primary" href="{{url('/UsuariosDoctors')}}">Ver usuarios</a>
@endsection
@section('tabla')

    @isset ($noticias)
        @if ($noticias -> isEmpty())
    @section('tabla')

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
@endsection
@else
    @include('Panel.Noticias.index')
@endif

@endisset

@isset($publicidad)
    @if ($publicidad -> isEmpty())
@section('tabla')

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

@isset($usuarios)
    @if ($usuarios -> isEmpty())
@section('tabla')

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



@endsection
