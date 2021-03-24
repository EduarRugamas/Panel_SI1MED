<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    @yield('bootstrap_css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/home_index.css')}}">
    <script src="https://cdn.ckeditor.com/4.15.1/standard-all/ckeditor.js"></script>
    <title>SI1MED</title>
</head>
<body>

<div class=" d-flex ">
    <div id="sidebar-container" class="bg-primary ">
        <div class="logo">
            <h3 class="text-light font-weight-bold">Panel Control</h3>
        </div>
        <div class="menu">
            <a href="{{url('/')}}" class="d-block text-light p-3"><i class="icon ion-md-home mr-2 lead"></i>Tabla de Contenido</a>
            <a href="{{url('/noticias/create')}}" class="d-block text-light p-3"><i class="icon ion-md-paper mr-2 lead"></i>Agregar Noticias</a>
            <a href="{{url('/publicidad/create')}}" class="d-block text-light p-3"><i class="icon ion-md-paper mr-2 lead"></i>Agregar Publicidad</a>
            <a href="{{url('/Users/create')}}" class="d-block text-light p-3"><i class="icon ion-md-paper mr-2 lead"></i>Agregar Usuario</a>
            <a href="{{url('/UsuariosDoctors/create')}}" class="d-block text-light p-3"><i class="icon ion-md-person mr-2 lead"></i>Agregar usuario Doctor</a>
        </div>
    </div>
    <div class="w-100">
        <div id="content">
            <section>
                <div class="container">
                    @yield('vistas')
                    @yield('tabla')
                </div>
            </section>
        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
@yield('script')
</body>
</html>
