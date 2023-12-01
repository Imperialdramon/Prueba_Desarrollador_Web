@extends('layouts/Plantilla')

@section('contenido')

<div class="container" style="align-content: center; padding: 20px;">
    <h3 class="titles">En este apartado se ve el historial de dueños de un vehículo</h3>
    <br>
    <!-- Aquí va la acción del php para recolectar datos-->
    <form action="/">
        <div class="mb-3"style="width: 30%;">
            <label for="id-vehiculo" class="form-label negrita">Identificador del vehículo</label>
            <input type="number" class="form-control" id="id-vehiculo" rows="1" maxlength="6" placeholder="1" required>
        </div>
        <input type="submit" value="Ver Dueños del Vehículo">
    </form>
    <!-- Aquí va la acción del php para mostrar datos-->
</div>

@endsection
