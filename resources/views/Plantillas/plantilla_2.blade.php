<!doctype html>
<html lang="en">
<head>
    <title>SI1MED</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/syles_desing.css')}}">
    @yield('css_bootstrap')
</head>
<body>

<input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        {{--Logo--}}
        <div class="sidebar-brand">
            <h2>SI1MED</h2>
        </div>
        {{--logo--}}
        {{--Menu dashboard--}}
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="#" class="active">
                        <span class="las la-home">Home</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="las la-newspaper">
                            Crear Noticia
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="las la-newspaper">Crear Publicidad</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="las la-user">Crear Usuario</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

        {{--Contendio--}}
    <div class="main-content">
        <header>
                <h2>
                    <label for="nav-toggle">
                        <span class="las la-bars"></span>
                    </label>
                    Dashboard
                </h2>
        </header>
        <main>
{{--            <div class="cards">--}}
{{--                <div class="card-single">--}}
{{--                    <div>--}}
{{--                        <h1>54</h1>--}}
{{--                        <span>projects</span>--}}
{{--                    </div>--}}
{{--                    <div>--}}
{{--                        <span class="las la-clipboard-list"></span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card-single">--}}
{{--                    <div>--}}
{{--                        <h1>54</h1>--}}
{{--                        <span>projects</span>--}}
{{--                    </div>--}}
{{--                    <div>--}}
{{--                        <span class="las la-clipboard-list"></span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card-single">--}}
{{--                    <div>--}}
{{--                        <h1>54</h1>--}}
{{--                        <span>projects</span>--}}
{{--                    </div>--}}
{{--                    <div>--}}
{{--                        <span class="las la-clipboard-list"></span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card-single">--}}
{{--                    <div>--}}
{{--                        <h1>54</h1>--}}
{{--                        <span>projects</span>--}}
{{--                    </div>--}}
{{--                    <div>--}}
{{--                        <span class="las la-clipboard-list"></span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="container">
                @yield('vistas')
            </div>
        </main>
    </div>
@yield('script')
</body>
</html>
