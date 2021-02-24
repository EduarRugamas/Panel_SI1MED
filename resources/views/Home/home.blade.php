@extends('Plantillas.plantilla_panel')
@section('vistas')
    <h1>Mostrando las noticias y publicidades</h1>
    <a name="noticias" class="btn btn-primary" href="{{url('/noticias')}}">Ver Noticias</a>
    <a name="publicidad" class="btn btn-primary" href="{{url('/publicidad')}}">Ver Publicidades</a>
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

@isset($publicidades)
    @if ($publicidades -> isEmpty())
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



@endsection
