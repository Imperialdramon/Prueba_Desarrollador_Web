<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Footer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <style>
        html, body {
            height: 100%;
        }
        .foot{
            background-color: rgb(96, 220, 112);
        }
        #app {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

    </style>

</head>
<body>

@yield('footer')

<footer class="foot text-light mt-5">
    <div class="container py-3">
        <div class="row">
        <div class="col-md-6">
            <p>&copy; 2023 Tu Empresa. Todos los derechos reservados.</p>
        </div>
        <div class="col-md-6 text-md-right">
            <p>Hecho con <span class="text-danger">&hearts;</span> por <a href="https://www.tuempresa.com" class="text-light">Tu Empresa</a></p>
        </div>
        </div>
    </div>

</footer>


</body>
</html>
