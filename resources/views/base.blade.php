<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo') | Aplicacion 1</title>
</head>
<body>
    <nav>
        <ul>
            @section('menu')
                <li><a href="/archivo">Archivo</a></li>
                <li><a href="/editar">Editar</a></li>
                <li><a href="/acerca"> Acerca de...</a></li>
                <li><a href="/cerrar_sesion">Salir</a> </li>
            @show
        </ul>
    </nav>

    <div class="content">
        @yield('contenido')
    </div>

</body>
</html>