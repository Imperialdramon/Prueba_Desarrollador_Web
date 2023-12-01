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
            background-color: rgb(31, 184, 222);
            border-color: cornflowerblue;
        }
        .nav-text{
            border-color: black;
            border-width: 5px;
        }
    </style>
</head>
<body>
    <nav class="nav">
        <a class="nav-link nav-text fs-2 fw-bold" href="/">Inicio</a>
        <a class="nav-link nav-text fs-2 fw-bold" href="/usuario">Usuarios</a>
        <a class="nav-link nav-text fs-2 fw-bold" href="/vehiculo">Vehículos</a>
    </nav>

    @yield('barra')
</body>
</html>
