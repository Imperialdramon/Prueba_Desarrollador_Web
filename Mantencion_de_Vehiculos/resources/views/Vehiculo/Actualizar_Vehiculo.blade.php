@extends('layouts/Plantilla')

@section('contenido')
<div class="container" style="align-content: center;">
    <br>
    <h2 class="titles">En este apartado se puede modificar vehículos</h2>
    <br>
    <div class="card" style="background-color:rgb(202, 223, 248)">
        <h4 class="card-header" style="text-align: center;">Vehículo a modificar</h4>
        <!--Se realiza la actualización que luego redirecciona a la vista anterior-->
        <form action="{{route('vehiculos.update',$vehiculo->id)}}" method="POST">
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
                            <!--Se muestran los datos a modificar como valor ya posicionado para poder editar viendo los datos actuales-->
                            <tbody>
                                <td>
                                    <input type="text" style="text-align: center" class="form-control" name="marca" rows="1" maxlength="40" value={{$vehiculo->marca}} required>
                                </td>
                                <td>
                                    <input type="text" style="text-align: center" class="form-control" name="modelo" rows="1" maxlength="40" value={{$vehiculo->modelo}} required>
                                </td>
                                <td>
                                    <input type="number" style="text-align: center" class="form-control" name="año" rows="1" max="2023" value={{$vehiculo->año}} required>
                                </td>
                                <td>
                                    <input type="number" style="text-align: center" class="form-control" name="dueño" rows="1" max="300" value={{$vehiculo->dueño}} required>
                                </td>
                                <td>
                                    <input type="number" style="text-align: center" class="form-control" name="precio" rows="1" max="100000000" value={{$vehiculo->precio}} required>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="container" style="display: flex; flex-direction: row; justify-content: space-between;">
                <div style="width: 40%;">
                    <button class="btn btn-sm btn-success">
                        <h3>Modificar Vehículo</h3>
                    </button>
                </div>
                <div style="width: 50%;">
                    <!--Redireccionamiento a la vista anterior-->
                    <a href="{{route('vehiculos.index')}}" class="btn btn-sm btn-primary"><h3>Regresar</h3></a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
