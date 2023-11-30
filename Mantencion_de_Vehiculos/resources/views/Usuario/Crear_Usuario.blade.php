@extends('Plantilla')

@section('contenido')
<div class="container contenedor">
    <h3 class="titles">En este apartado podrás registrar un usuario</h3>
    <!-- Aquí va la acción del php para recolectar datos-->
    <form action="/">
        <div class="mb-3 columnas">
            <label for="nombre-usuario" class="form-label text-bold">Nombre de Usuario</label>
            <input type="text" class="form-control" id="nombre-usuario" rows="1" maxlength="30" style="width: 25%;" placeholder="Nombre" required>
            <label for="apellidos-usuario" class="form-label">Apellidos del Usuario</label>
            <input type="text" class="form-control" id="apellidos-usuario" rows="1" maxlength="70" style="width: 40%;" placeholder="Apellido1 Apellido2" required>
        </div>

        <div class="mb-3">
            <label for="correo-usuario" class="form-label">Correo de Contacto</label>
            <input type="email" class="form-control" id="correo-usuario" placeholder="name@example.com" required>
        </div>
        <input type="submit" value="Crear Usuario">
    </form>



</div>

@endsection
