@extends('Plantilla')

@section('contenido')

<div class="container" style="align-content: center; padding: 20px;">
    <h3 class="titles">En este apartado podrás actualizar los datos de un vehículo conociendo su id</h3>
    <br>
    <!-- Aquí va la acción del php para recolectar datos-->
    <form action="/">
        <div class="container" style="justify-content: center; width: 90%;">
            <div class="mb-3" style="display: flex; flex-direction: row; justify-content: space-between;">
                <div style="width: 20%;">
                    <label for="id-vehiculo" class="form-label negrita">Identificador del vehículo</label>
                    <input type="number" class="form-control" id="id-vehiculo" rows="1" max="300" placeholder="1" required>
                </div>
                <div style="width: 30%;">
                    <label for="marca-vehiculo" class="form-label negrita">Elige una marca</label>
                    <select id="marca-vehiculo" class="form-control">
                        <option value="Toyota">Toyota</option>
                        <option value="Ford">Ford</option>
                        <option value="BMW">BMW</option>
                        <option value="Honda">Honda</option>
                        <option value="Volkswagen">Volkswagen</option>
                        <option value="Mercedes-Benz">Mercedes-Benz</option>
                        <option value="Chevrolet">Chevrolet</option>
                        <option value="Audi">Audi</option>
                        <option value="Nissan">Nissan</option>
                        <option value="Tesla">Tesla</option>
                    </select>
                </div>

                <div style="width: 40%;">
                    <label for="modelo-vehiculo" class="form-label negrita">Modelo del Vehículo</label>
                    <input type="text" class="form-control" id="modelo-vehiculo" rows="1" maxlength="40" placeholder="Model S">
                </div>

            </div>
            <div class="mb-3" style="display: flex; flex-direction: row; justify-content: space-between;">
                <div style="width: 20%;">
                    <label for="year-vehiculo" class="form-label negrita">Año del Vehículo</label>
                    <input type="number" class="form-control" id="year-vehiculo" rows="1" max="2023" placeholder="2023">
                </div>
                <div style="width: 50%;">
                    <label for="precio-vehiculo" class="form-label negrita">Precio del Vehículo</label>
                    <input type="number" class="form-control" id="precio-vehiculo" rows="1" max="100000000" placeholder="10000000">
                </div>
                <div style="width: 20%;">
                    <label for="dueno-vehiculo" class="form-label negrita">Id del Dueño</label>
                    <input type="number" class="form-control" id="dueno-vehiculo" rows="1" max="300" placeholder="1">
                </div>
            </div>
            <input type="submit" value="Actualizar Vehículo">
        </div>
    </form>
</div>

@endsection
