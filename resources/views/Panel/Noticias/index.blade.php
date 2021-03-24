@extends('Plantillas.plantilla')

@section('tablas')
    @isset($noticias)
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

            @foreach ($noticias as $items)
                <tr>
                    {{-- <td>{{$loop->iteration}}</td> --}}
                    <td>
                        <img src="{{ asset('storage'.'/'.$items->foto)}}" alt="" width="200" height="200">

                    </td>
                    <td>{!!$items->contenido!!}</td>
                    <td>{{$items->fecha_creacion}}</td>
                    <td>
                        <a class="btn btn-secondary" href="{{url('/noticias/'.$items->id.'/edit')}}">
                            Edit
                        </a>
                        <form method="POST" action="{{ url('/noticias/'.$items->id)}}">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}

                            <button class="btn btn-danger" type="submit" onclick="return confirm('¿Desea Borrar?');">Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    @endisset
@endsection
