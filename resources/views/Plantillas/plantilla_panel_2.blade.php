        <!doctype html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport"
                  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="{{asset('css/style_new_plantilla.css')}}">
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
                    crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
                    crossorigin="anonymous"></script>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
            <link rel="stylesheet" href="css/font-awesome.min.css">
            <script src="https://cdn.ckeditor.com/4.15.1/standard-all/ckeditor.js"></script>
            <title>Panel</title>
        </head>
        <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav>
                        <div class="col-md-1 register-left">
                            <img src="\imagen\802366.png" alt="" />
                        </div>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="{{url('/noticias/create')}}" role="tab" aria-controls="nav-home" aria-selected="true">Noticias</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="{{url('/publicidad/create')}}" role="tab" aria-controls="nav-profile" aria-selected="false">Publicidad</a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Doctor</a>
                            <a class="nav-item nav-link" href="#" id="navbarDropdown" role="tab" aria-controls="nav-about" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false" aria-selected="false">
                                Tabla &nbsp<i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>

                        </div>
                    </nav>
                    <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                        <div class="tab-pane fade show active w-100" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
{{--                                  {{-- Vistas de noticias --}}
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

                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <br>
                            <div class="container">
                                @yield('vistas')
                                @yield('tablas')

                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <br>
                            <div class="card">
                                <div class="card-header"><strong>Actualizacion de Datos</strong></div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="Dato"><strong>Nombre:</strong></label>
                                                <input type="text" class="form-control" placeholder="Nombre" id="nombre" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="correo"><strong>Email:</strong></label>
                                                <input type="text" class="form-control" placeholder="Email" id="correo">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="informacion"><strong>Apellido:</strong></label>
                                                <input type="text" class="form-control" placeholder="Apellido" id="informacion" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="Contacto"><strong>Celular:</strong></label>
                                                <input type="text" class="form-control" placeholder="Celular" id="Contacto">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Documento"><strong>Numero de DNI:</strong></label>
                                        <input type="text" class="form-control" placeholder="Numero de D.N.I." id="Documento">
                                    </div>
                                    <div class="form-group">
                                        <label for="Clave"><strong>Contraseña Actual:</strong></label>
                                        <input type="password" class="form-control" placeholder="Contraseña Actual" id="Clave">
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="nueva"><strong>Contraseña Nueva:</strong></label>
                                                <input type="password" class="form-control" placeholder="Contraseña Nueva" id="nueva">
                                            </div>
                                            <button type="button" class="btn btn-danger btn-block">Guardar</button>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="Confirmar"><strong>Confirmar Contraseña:</strong></label>
                                                <input type="password" class="form-control" placeholder="Confirmar Contraseña Nueva" id="Confirmar">
                                            </div>
                                            <button type="button" class="btn btn-secondary btn-block">Cancelar</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                            <br>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        </body>
</html>
