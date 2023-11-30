@extends('Barra')

@section('barra')

<div class="mb-3">
    <label for="nombre-usuario" class="form-label">Nombre de Usuario</label>
    <textarea class="form-control" id="nombre-usuario" rows="1"></textarea>
</div>
<div class="mb-3">
    <label for="apellidos-usuario" class="form-label">Apellidos</label>
    <textarea class="form-control" id="apellidos-usuario" rows="1"></textarea>
</div>
<div class="mb-3">
    <label for="correo-usuario" class="form-label">Correo de Contacto</label>
    <input type="email" class="form-control" id="correo-usuario" placeholder="name@example.com">
</div>

@endsection
