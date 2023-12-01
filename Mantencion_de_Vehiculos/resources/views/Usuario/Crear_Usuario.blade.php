@extends('Plantilla')

@section('contenido')
<div class="container" style="align-content: center; padding: 20px;">
    <h3 class="titles">En este apartado podrás registrar un usuario</h3>
    <br>

    <div class="card">
        <h4 class="card-header" style="text-align: center;">Listado de usuarios actuales del sistema</h4>
        <div class="card-body">
            <form action="/">
                <div class="container" style="justify-content: center; width: 90%;">
                    <div class="mb-3" style="display: flex; flex-direction: row; justify-content: space-between;">
                        <div style="width: 35%;">
                            <label for="nombre-usuario" class="form-label negrita">Nombre de Usuario</label>
                            <input type="text" class="form-control" id="nombre-usuario" rows="1" maxlength="30" placeholder="Nombre" required>
                        </div>
                        <div style="width: 60%;">
                            <label for="apellidos-usuario" class="form-label negrita">Apellidos del Usuario</label>
                            <input type="text" class="form-control" id="apellidos-usuario" rows="1" maxlength="70" placeholder="Apellido1 Apellido2" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="correo-usuario" class="form-label negrita">Correo de Contacto</label>
                        <input type="email" class="form-control" id="correo-usuario" placeholder="name@example.com" required>
                    </div>
                    <input type="submit" value="Crear Usuario">
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
