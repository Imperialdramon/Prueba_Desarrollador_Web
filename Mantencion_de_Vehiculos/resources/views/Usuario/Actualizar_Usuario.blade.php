@extends('layouts/Plantilla')

@section('contenido')

<div class="container" style="align-content: center; padding: 20px;">
    <h3 class="titles">En este apartado podrás actualizar los datos de un usuario conociendo su id</h3>
    <br>
    <!-- Aquí va la acción del php para recolectar datos-->
    <form action="/">
        <div class="container" style="justify-content: center; width: 90%;">
            <div class="mb-3" style="display: flex; flex-direction: row; justify-content: space-between;">
                <div style="width: 20%;">
                    <label for="id-usuario" class="form-label negrita">Identificador del Usuario</label>
                    <input type="number" class="form-control" id="id-usuario" rows="1" max="300" placeholder="1" required>
                </div>
                <div style="width: 30%;">
                    <label for="nombre-usuario" class="form-label negrita">Nuevo Nombre del Usuario</label>
                    <input type="text" class="form-control" id="nombre-usuario" rows="1" maxlength="70" placeholder="Nombre">
                </div>
                <div style="width: 45%;">
                    <label for="apellidos-usuario" class="form-label negrita">Nuevos Apellidos del Usuario</label>
                    <input type="text" class="form-control" id="apellidos-usuario" rows="1" maxlength="70" placeholder="Apellido1 Apellido2">
                </div>
            </div>
            <div class="mb-3">
                <label for="correo-usuario" class="form-label negrita">Nuevo Correo de Contacto</label>
                <input type="email" class="form-control" id="correo-usuario" placeholder="name@example.com">
            </div>
            <input type="submit" value="Actualizar Usuario">
        </div>
    </form>
</div>

@endsection
