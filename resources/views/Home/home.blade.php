@extends('Plantillas.plantilla')
    @section('url_noticias')
        {{url('/noticias')}}
    @endsection

    @section('url_publicidad')
        {{url('/publicidad')}}
    @endsection

    @section('url_usuarios')
        {{url('/Users')}}
    @endsection

    @isset ($noticias)
        @section('tablas')
            @if($noticias -> isEmpty())
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
         @section('tablas')
           @if ($publicidad -> isEmpty())
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

            @else
                @include('Panel.Publicidades.index')
            @endif
         @endsection
   @endisset

{{--@isset($usuarios_doctores)--}}
{{--    @if ($usuarios_doctores -> isEmpty())--}}
{{--@section('tablas')--}}

{{--    <table class="table table-light">--}}
{{--        <thead class="thead-light">--}}
{{--        <tr>--}}
{{--            <th>Datos</th>--}}
{{--            <th>Datos</th>--}}
{{--            <th>Datos</th>--}}
{{--            <th>Datos</th>--}}
{{--            <th>Datos</th>--}}
{{--            <th>Datos</th>--}}
{{--            <th>Datos</th>--}}
{{--            <th>Datos</th>--}}
{{--            <th>Datos</th>--}}
{{--            <th>Datos</th>--}}
{{--            <th>Datos</th>--}}
{{--            <th>Datos</th>--}}



{{--        </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}
{{--        <tr>--}}
{{--            <td>No hay contenido</td>--}}
{{--            <td>No hay contenido</td>--}}
{{--            <td>No hay contenido </td>--}}
{{--            <td>No hay contenido </td>--}}
{{--            <td>No hay contenido </td>--}}
{{--            <td>No hay contenido </td>--}}
{{--            <td>No hay contenido </td>--}}
{{--            <td>No hay contenido </td>--}}
{{--            <td>No hay contenido </td>--}}
{{--            <td>No hay contenido </td>--}}
{{--            <td>No hay contenido </td>--}}
{{--            <td>No hay contenido </td>--}}
{{--        </tr>--}}
{{--        </tbody>--}}
{{--    </table>--}}
{{--@endsection--}}
{{--@else--}}
{{--    @include('Panel.Usuario_doctores.index')--}}
{{--@endif--}}
{{--@endisset--}}

    @isset($users)
      @section('tablas')
        @if ($users -> isEmpty())
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

        @else
            @include('Panel.Users.index')
        @endif
      @endsection
    @endisset




