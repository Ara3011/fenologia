<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/estilosred.css">
</head>
<body>
<header class="header2">
    <div class="wrapper">
        <div class="logo">
            <img src="imagenes/logo.jpg" width="280" height="120" alt="">
        </div>
        <nav>
            <a href="{{url('/template')}}">Home</a>
            <a href="{{url('/formulario')}}">Formulario</a>
            <a href="{{url('/resultados')}}">Resultados</a>
        </nav>
    </div>
</header>
<section class="contenido wrapper">
    <h2 class="text-center">Monitoreo Fenológico Comunitario</h2>
    <p class="text-center">Cuando hablamos de vegetación es importante pensar en la diversidad de plantas que existen en una zona determinada, esta está determinada por factores ecológicos, fisiográficos (orografía) y del clima. Actualmente el clima es un factor determinante en la distribución y composición de la vegetación en una zona. El propósito de este formato es ayudarnos a visualizar e identificar los principales elementos de cambio en la vegetación originado por el clima así como registrar el comportamiento de la vegetación frente al cambio climático</p>

    <h5>FORMATO DE OBSERVACIÓN</h5>
    <h6>A)Registro Semanal</h6>
    <h6>Datos Generales</h6>


    <form action="" method="post">
        <div class="form-group">
        <p>Nombre:(Dato Requerido) <br>
            <input type="text" name="nombre" id="" class="form-control border-danger"></p>

        <p>Correo Electronico:(Dato Requerido) <br>
            <input type="email" name="email" id="" class="form-control border-danger" size="40"></p>

        <p>Rancheria o localidad: <br>
            <input type="text" name="localidad" id="" class="form-control border-danger" size="20"></p>

        <p>Nombre de la comunidad: <br>
            <input type="text" name="comunidad" id="" class="form-control border-danger" size="20"></p>
        <p>Municipio: <br>
            <input type="text" name="municipio" id="" class="form-control border-danger" size="20"></p>
        </div>

        <div class="box">
            <p> Estado:
            <select>
                <option>México</option>
                <option>Jalisco</option>
                <option>Guerrero</option>
                <option>Sinaloa</option>
            </select>
        </div>
        </p>
        <p>Fecha de observación (Requerido)<br>
        <input type="date">
        </p>
        <p>Nombre de la especie (puedes poner los nombres de las especies que observaste): <br>
            <input type="text" name="comunidad" id="" class="form-control border-danger" size="20"></p>

        <h6 class=>Fase fonológica (puedes elegir varias opciones):</h6>
        <div class="box mt-4">
            <p> Cultivo:
                <select>
                    <option>-</option>

                </select>
        </div>
        <div class="box">
            <p> Frutal:
                <select>
                    <option>-</option>
                </select>
        </div>
        <div class="box">
            <p> Forestal (coniferas):
                <select>
                    <option>-</option>
                </select>
        </div>
        <div class="box">
            <p> Forestal (Árboles de hoja ancha):
                <select>
                    <option>-</option>
                </select>
        </div>

        <h5 class="mt-4">Observaciones complementarias:</h5>
        <h6 class="mt-4">¿En las especies que observaste, detectaste alguno de estos elementos?
            Polinizadores (Abejas, abejorros, mariposas, polillas, etc):</h6>
        <div>
        <label class="radio-inline"><input type="radio" name="optradio">Si</label>
        <label class="radio-inline"><input type="radio" name="optradio">No</label>
        <p>Nombre del polinizador: <br>
            <input type="text" name="polinizador" id="" class="form-control border-danger" size="20"></p>
        </div>
        <div>

        <h6 class="mt-3">Plagas:</h6>
        <label class="radio-inline"><input type="radio" name="optradio">Si</label>
        <label class="radio-inline"><input type="radio" name="optradio">No</label>
        <p>Nombre de plaga: <br>
            <input type="text" name="plagas" id="" class="form-control border-danger" size="20"></p>
        </div>

        <div>
            <h6 class="mt-3">Hongos:</h6>
            <label class="radio-inline"><input type="radio" name="optradio">Si</label>
            <label class="radio-inline"><input type="radio" name="optradio">No</label>
            <p>Nombre del hongo: <br>
                <input type="text" name="hongos" id="" class="form-control border-danger" size="20"></p>
        </div>

        <div>
            <h6 class="mt-3">¿En la semana se registró algún evento meteorológico extremo?</h6>
            <label class="radio-inline"><input type="radio" name="optradio">Si</label>
            <label class="radio-inline"><input type="radio" name="optradio">No</label>
            <div class="box">
                <p> ¿Cuál de los siguientes?
                    <select>
                        <option>-</option>
                    </select>
                </p>
            </div>
        </div>
        <h6 class="mt-4">B) Información complementaria anual
            (Llenar esta sección al finalizar el año)</h6>

        <h6 class="mt-3">Temporada de lluvias:</h6>
        <div class="box">
            <p> Inicio
                <select>
                    <option>-</option>
                </select>
            Fin
                <select>
                    <option>-</option>
                </select>
            </p>
        </div>

        <h6 class="mt-4">Meses sin lluvia:</h6>
        <div class="box">
            <p> Inicio
                <select>
                    <option>-</option>
                </select>
                Fin
                <select>
                    <option>-</option>
                </select>
            </p>
        </div>

        <h6 class="mt-3">Meses frios:</h6>
        <div class="box">
            <p> Inicio
                <select>
                    <option>-</option>
                </select>
                Fin
                <select>
                    <option>-</option>
                </select>
            </p>
        </div>

        <h6 class="mt-3">Meses calidos:</h6>
        <div class="box">
            <p> Inicio
                <select>
                    <option>-</option>
                </select>
                Fin
                <select>
                    <option>-</option>
                </select>
            </p>
        </div>

        <h6>Vegetación:</h6>
        <p>(Si no sabes el tipo de vegetación, menciona 5 o más especies de árboles, los más comunes que haya en tu comunidad):</p>
        <div class="form-group">
            <textarea class="form-control border-danger" id="vegetación" rows="3"></textarea>
        </div>

        <h6>Fauna:</h6>
        <p>(Animales silvestres, tipo de fauna más común en tu comunidad, menciona 5 o más especies):</p>
        <div class="form-group">
            <textarea class="form-control border-danger" id="vegetación" rows="3"></textarea>
        </div>

        <div>
            <h6 class="mt-3">¿Hay alguna especie de fauna migratoria?</h6>
            <label class="radio-inline"><input type="radio" name="optradio">Si</label>
            <label class="radio-inline"><input type="radio" name="optradio">No</label>
            <p>Nombre de la especie migratoria: <br>
                <input type="text" name="hongos" id="" class="form-control border-danger" size="20"></p>
        </div>

        <h6>C) Percepción de cambios en el clima</h6>
        <p>Explica brevemente como era antes el entorno donde vives en cuanto a clima y vegetación:</p>
        <div class="form-group">
            <textarea class="form-control border-danger" id="vegetación" rows="3"></textarea>
        </div>

        <p>¿Has notado que la cantidad de hongos que aparecen han disminuido o aumentado? ¿A qué crees que se deba?</p>
        <div class="form-group">
            <textarea class="form-control border-danger" id="vegetación" rows="3"></textarea>
        </div>

        <p>Hace algunos años ¿Cuántos meses duraba la temporada de lluvias? <br>
            <input type="text" name="comunidad" id="" class="form-control border-danger" size="20"></p>

        <p>Hace algunos años ¿Cuántos meses duraba la temporada de heladas? <br>
            <input type="text" name="comunidad" id="" class="form-control border-danger" size="20"></p>

        <p>¿Las lluvias, sequias y heladas eran más ligeras o más intensas respecto a las de los últimos años? <br>
            <input type="text" name="comunidad" id="" class="form-control border-danger" size="20"></p>

        <center><input type="submit" value="Enviar" class="wpcf7-form-control wpcf7-submit btn-danger "></center>

    </form>


</section>

</body>
</html>
