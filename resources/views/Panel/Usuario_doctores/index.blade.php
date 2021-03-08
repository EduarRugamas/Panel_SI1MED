
@extends('Plantillas.plantilla_panel')

@section('tabla')

    <table class="table table-light">
        <thead class="thead-light">
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>


        </tr>
        </thead>
        <tbody>
        @isset($usuarios)
            @foreach ($usuarios as $items)
                <tr>

                    <td>{{$items->nombreDoctor}}</td>
                    <td>{{$items->apellidosDoctor}}</td>
                    <td>{{$items->tituloDoctor}}</td>
                    <td>{{$items->direccion}}</td>
                    <td>{{$items->logo}}</td>
                    <td>{{$items->perfil}}</td>
                    <td>{{$items->nacimiento}}</td>
                    <td>{{$items->sexo}}</td>
                    <td>{{$items->lema}}</td>
                    <td>{{$items->mision}}</td>
                    <td>{{$items->equipoLocal}}</td>
                    <td>{{$items->marca}}</td>






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
