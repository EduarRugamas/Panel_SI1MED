@extends('Plantillas.plantilla')

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
        @isset($publicidad)
            @foreach ($publicidad as $items)
                <tr>
                    {{-- <td>{{$loop->iteration}}</td> --}}
                    <td>
                        <img src="{{ asset('storage'.'/'.$items->foto)}}" alt="" width="200" height="200">

                    </td>
                    <td>{!!$items->contenido!!}</td>
                    <td>
                        <a class="btn btn-secondary" href="{{url('/publicidad/'.$items->id.'/edit')}}">
                            Edit
                        </a>
                        <form method="POST" action="{{ url('/publicidad/'.$items->id)}}">
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
