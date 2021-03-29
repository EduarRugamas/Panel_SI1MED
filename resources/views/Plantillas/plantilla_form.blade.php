<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/panel_style.css')}}">
    <script src="https://cdn.ckeditor.com/4.15.1/standard-all/ckeditor.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    @yield('css_boostrap')
    <title>SI1MED</title>
</head>
<body>
<input type="checkbox" id="sidebar-toggle">
<div class="sidebar">
    <div class="sidebar-header">
        <h3 class="brand">
            <span class="ti-unlink"></span>
            <span>SI1MED</span>
        </h3>
        <label for="sidebar-toggle" class="ti-menu-alt"></label>
    </div>

    <div class="sidebar-menu">
        <ul>
            <li>
                <a href="{{url('/')}}">
                    <span class="ti-home"></span>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="{{url('/noticias/create')}}">
                    <span class="ti-notepad"></span>
                    <span>Crear Noticia</span>
                </a>
            </li>
            <li>
                <a href="{{url('/publicidad/create')}}">
                    <span class="ti-notepad"></span>
                    <span>Crear Publicidad</span>
                </a>
            </li>
            <li>
                <a href="{{url('/Users/create')}}">
                    <span class="ti-user"></span>
                    <span>Crear Usuario</span>
                </a>
            </li>
        </ul>
    </div>
</div>

<div class="main-content">
    <header>
        <div class="search-wrapper">
            <span class="ti-search"></span>
            <input type="search" placeholder="Search">
        </div>
    </header>
    <main>
        <h2 class="dash-title">@yield('titulo')</h2>
        <div class="container">
            @yield('vistas')
            @yield('tablas')
        </div>
    </main>
</div>

@yield('scripts')
</body>
</html>
