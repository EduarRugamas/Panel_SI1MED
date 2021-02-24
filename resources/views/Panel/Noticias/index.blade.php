@extends('Plantillas.plantilla_panel')

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
        @isset($noticias)
            @foreach ($noticias as $noticia)
                <tr>
                    {{-- <td>{{$loop->iteration}}</td> --}}
                    <td>
                        <img src="{{ asset('storage'.'/'.$noticia->foto)}}" alt="" width="200" height="200">

                    </td>
                    <td>{!!$noticia->contenido!!}</td>
                    <td>{{$noticia->fecha_creacion}}</td>
                    <td>
                        <a class="btn btn-secondary" href="{{url('/noticias/'.$noticia->id.'/edit')}}">
                            Edit
                        </a>
                        <form method="POST" action="{{ url('/noticias/'.$noticia->id)}}">
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
