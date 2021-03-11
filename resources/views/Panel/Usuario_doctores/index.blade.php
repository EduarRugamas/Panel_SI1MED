
@extends('Plantillas.plantilla_panel')

@section('tabla')

    <table class="table table-light">
        <thead class="thead-light">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Titulo</th>
            <th>Direccion</th>
            <th>Logo</th>
            <th>Foto de Perfil</th>
            <th>Lema</th>
            <th>Mision</th>
            <th>Acciones</th>



        </tr>
        </thead>
        <tbody>
        @isset($usuarios)
            @foreach ($usuarios as $items)
                <tr>

                    <td>{{$items->id}}</td>
                    <td>{{$items->nombreDoctor}}</td>
                    <td>{{$items->apellidosDoctor}}</td>
                    <td>{{$items->tituloDoctor}}</td>
                    <td>{{$items->direccion}}</td>

                    @if($items->logo)
                        <td>
                            <img src="{{ asset('storage'.'/'.$items->logo)}}" alt="" width="200" height="200">
                        </td>
                    @else
                        <td>No hay contenido</td>
                    @endif


                    @if($items->perfil)
                    <td>
                        <img src="{{ asset('storage'.'/'.$items->perfil)}}" alt="" width="200" height="200">
                    </td>
                    @else
                        <td>No hay contenido</td>
                    @endif
{{--                    <td>{{$items->nacimiento}}</td>--}}
{{--                    <td>{{$items->sexo}}</td>--}}
                    <td>{{$items->lema}}</td>
                    <td>{{$items->mision}}</td>
{{--                    <td>{{$items->equipoLocal}}</td>--}}
{{--                    <td>{{$items->marca}}</td>--}}
                    <td>
                        <a class="btn btn-secondary" href="{{url('/UsuariosDoctors/'.$items->id.'/edit')}}">
                            Edit
                        </a>
                        <form method="POST" action="{{ url('/UsuariosDoctors/'.$items->id)}}">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}

                            <button class="btn btn-danger" type="submit" onclick="return confirm('¿Desea Borrar?');">Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @endisset
        </tbody>
    </table>
@endsection
