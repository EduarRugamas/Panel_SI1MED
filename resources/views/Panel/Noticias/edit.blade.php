@extends('Plantillas.plantilla_panel')

@section('vistas')

    <h1>
        Editar publicacion de Noticias
    </h1>
    <div class=" h-150 row justify-content-center h-100">
        <form action="{{url('/noticias/'. $noticias->id)}}" METHOD="post" enctype="multipart/form-data">
            {{@csrf_field()}}
            {{method_field('PATCH')}}

            <br>
            <div>
                <label for="Contenido" >
                    {{'Contenido'}}
                    <br>

                    <div>
                        <textarea name="Contenido" id="Contenido" cols="40" rows="10" >{{$noticias->contenido}}</textarea>
                        <script>

                            CKEDITOR.replace('Contenido', {
                                height: 200,
                                width: 700,
                                baseFloatZIndex: 10005
                            });
                            CKEDITOR.config.extraPlugins = ["justify", "colorbutton", "font"];
                            // CKEDITOR.config.extraPlugins = ;
                            // config.extraPlugins = "justify";
                        </script>
                    </div>

                </label><br>
            </div>



            <div class="form-group">
                <label for="Fecha" >
                    {{'Fecha'}}
                    <br>
                    <input class="form-control" type="date" name="Fecha" value="{{$noticias->fecha_creacion}}"><br>
                </label>
            </div>

            <div>
                <label for="Foto" >
                    {{'Foto'}}
                    <br>
                    <input class="form-control-file" type="file" name="Foto" value=""><br>
                </label>
            </div>
            <div>
                <input class="btn btn-primary" type="submit" value="Guardar Cambios">
            </div>

        </form>
        <br>
    </div>

@endsection
