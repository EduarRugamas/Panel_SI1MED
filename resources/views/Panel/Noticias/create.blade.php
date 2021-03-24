@extends('Plantillas.plantilla')

@section('vistas')

    <h1>
        Formulario de publicacion de Noticias
    </h1>
    <div class=" h-150 row justify-content-center h-100">
        <form action="{{url('/noticias')}}" METHOD="post" enctype="multipart/form-data">
            {{@csrf_field()}}
            <br>
            <div>
                <label for="Contenido" >
                    {{'Contenido'}}
                    <br>

                    <di>
                        <textarea name="contenido" id="Contenido" cols="40" rows="10" ></textarea>
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
                    </di>

                </label><br>
            </div>



            <div class="form-group">
                <label for="Fecha de creacion" >
                    {{'Fecha de creacion'}}
                    <br>
                    <input class="form-control" type="date" name="fecha_creacion" value=""><br>
                </label>
            </div>

            <div>
                <label for="Foto" >
                    {{'Foto'}}
                    <br>
                    <input class="form-control-file" type="file" name="foto" value=""><br>
                </label>
            </div>
            <div>
                <input class="btn btn-primary" type="submit" value="Publicar Noticia">
            </div>

        </form>
        <br>
    </div>
@endsection

