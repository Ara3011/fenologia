<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/estilosred.css">
    <title>Red Fenológica Nacional</title><!--titulo de la pestaña-->
    <title>@yield("title")</title>
</head>
<body>
<div>
    <header>
        <div class="wrapper">
            <div class="logo">
                <img src="imagenes/logo.jpg" width="300" height="160" alt="">
            </div>
            <nav>
                <a href="{{url('/template')}}">Home</a>
                <a href="{{url('/formulario')}}">Formulario</a>
                <a href="{{url('/resultados')}}">Resultados</a>
                <a href="{{url('/administradores')}}">Administrador</a>
            </nav>
        </div>
    </header>

    <main class="py-4">
        @yield('content')
    </main>
</div>
<script src="{{ asset('js/app.js') }}"></script>
@yield("scripts")
</body>
</html>
