@extends('Plantilla')

@section('contenido')

<div class="container" style="align-content: center; padding: 20px;">
    <h3 class="titles">En este apartado podrás borrar un usuario conociendo su id</h3>
    <br>
    <!-- Aquí va la acción del php para recolectar datos-->
    <form action="/">
        <div class="mb-3"style="width: 30%;">
            <label for="id-vehiculo" class="form-label negrita">Identificador del vehículo</label>
            <input type="number" class="form-control" id="id-vehiculo" rows="1" maxlength="6" placeholder="1" required>
        </div>
        <input type="submit" value="Borrar Vehículo">
    </form>
</div>

@endsection
