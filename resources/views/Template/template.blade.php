<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
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

    <main class="container">
        @yield('content')
    </main>
</div>
<script src="{{ asset('js/app.js') }}"></script>

   {{--$(document).on('show.bs.modal', '.modal', function () {
        var zIndex = 1040 + (10 * $('.modal:visible').length);
        $(this).css('z-index', zIndex);
        setTimeout(function () {
            $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack');
        }, 0);
    }).on('hidden.bs.modal', '.modal', function () {
        $('.modal:visible').length && $(document.body).addClass('modal-open');
    });
--}}

@yield("scripts")
</body>
</html>
