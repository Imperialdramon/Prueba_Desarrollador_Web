@extends('layouts/Plantilla')

@section('contenido')
<div class="container" style="align-content: center;">
    <br>
    <h2 class="titles">En este apartado se puede ver, crear y modificar usuarios</h2>
    <br>
    <div class="card">
        <h4 class="card-header" style="text-align: center;">Listado de usuarios actuales del sistema</h4>
        <form action="{{route('vehiculos.store')}}" method="POST">
            @csrf
            <div class="card-body">
                <div class="table table-responsive table-bordered">
                    <table class="table table-sm" style="text-align: center;">
                        <thead>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Año</th>
                            <th>Id del dueño</th>
                            <th>Precio</th>
                        </thead>
                        <tr>
                            <tbody>
                                <td>
                                    <input type="text" class="form-control" name="marca" rows="1" maxlength="40" placeholder="Tesla" required>
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="modelo" rows="1" maxlength="40" placeholder="Model S" required>
                                </td>
                                <td>
                                    <input type="number" class="form-control" name="año" rows="1" max="2023" placeholder="2023" required>
                                </td>
                                <td>
                                    <input type="number" class="form-control" name="dueño" rows="1" max="300" placeholder="1" required>
                                </td>
                                <td>
                                    <input type="number" class="form-control" name="precio" rows="1" max="100000000" placeholder="10000000" required>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="container" style="display: flex; flex-direction: row; justify-content: space-between;">
                <div style="width: 40%;">
                    <button class="btn btn-sm btn-success">
                        <h3>Crear Vehículo</h3>
                    </button>
                </div>
                <div style="width: 50%;">
                    <a href="{{route('vehiculos.index')}}" class="btn btn-sm btn-primary"><h3>Regresar</h3></a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
