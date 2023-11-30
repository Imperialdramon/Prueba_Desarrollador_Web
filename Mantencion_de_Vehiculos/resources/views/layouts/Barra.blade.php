<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }
        .color-container{
            width: 16px;
            height: 16px;
            display: inline-block;
            border-radius: 4px;
        }
        .nav{
            padding: 10px;
            background-color: rgb(96, 220, 112);
            border-color: cornflowerblue;
        }
        .nav-text{
            color: rgb(57, 137, 47);
            border-color: black;
            border-width: 5px;
        }
    </style>
</head>
<body>
    <nav class="nav">
        <a class="nav-link nav-text fs-2 fw-bold"aria-current="page" href="/">Inicio</a>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle nav-text fs-2 fw-bold" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Acciones Sobre Usuario
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/Usuario-POST">Crear Usuario</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="/Usuario-GET">Ver Usuarios</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="/Usuario-UPDATE">Actualizar Usuario</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="/Usuario-DELETE">Eliminar Usuario</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle nav-text fs-2 fw-bold" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Acciones Sobre Vehículo
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/Vehiculo-POST">Crear Vehículo</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="/Vehiculo-GET">Ver Vehículos</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="/Vehiculo-UPDATE">Actualizar Vehículo</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="/Vehiculo-DELETE">Eliminar Vehículo</a></li>
            </ul>
        </li>
        <a class="nav-link nav-text fs-2 fw-bold" href="/Historial">Dueños de Vehículos</a>
    </nav>

    @yield('barra')
</body>
</html>
