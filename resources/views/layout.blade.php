<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Notas</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script  type="text/javascript" src="{{ asset('js/scrip.js') }}"></script>
</head>
<body>
    <div class="wrap">
        <header class="head">
            <a href="#" class="logo"></a>

            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li class="main-nav-item active">
                        <a href="/notas" class="main-nav-link">
                            <i class="icon icon-th-list"></i>
                            <span>Ver notas</span>
                        </a>
                    </li>
                    <li class="main-nav-item ">
                        <a href="notas/agregar" class="main-nav-link">
                            <i class="icon icon-pen"></i>
                            <span>Nueva nota</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </header>


        @yield('content')
       
        <footer class="foot">
            <div class="ad">
                <p>
                    Esta aplicación es desarrollada en el cursos de IPM
                    <a href="https://mawe.mx">Primeros pasos con Laravel </a>.
                </p>
            </div>
            <div class="license">
                <p>© 2021 Derechos Reservados - MAWE TECNOLOGIAS</p>
            </div>
        </footer>
    </div>
</body>
</html>