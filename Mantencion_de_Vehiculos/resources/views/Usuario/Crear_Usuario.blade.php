@extends('layouts/Plantilla')

@section('contenido')
<div class="container" style="align-content: center;">
    <br>
    <h2 class="titles">En este apartado se puede crear usuarios</h2>
    <br>
    <div class="card" style="background-color:rgb(202, 223, 248)">
        <h4 class="card-header" style="text-align: center;">Listado de usuarios actuales del sistema</h4>
        <!--Se realiza la publicación que luego redirecciona a la vista anterior-->
        <form action="{{route('usuarios.store')}}" method="POST">
            @csrf
            <div class="card-body">
                <div class="table table-responsive table-bordered">
                    <table class="table table-sm" style="text-align: center;">
                        <thead>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Correo de contacto</th>
                        </thead>
                        <tr>
                            <tbody>
                                <td>
                                    <input type="text" style="text-align: center" class="form-control" name="nombre" rows="1" maxlength="30" placeholder="Juan" required>
                                </td>
                                <td>
                                    <input type="text" style="text-align: center" class="form-control" name="apellidos" rows="1" maxlength="70" placeholder="Perez Perez" required>
                                </td>
                                <td>
                                    <input type="email" style="text-align: center" class="form-control" name="email" placeholder="juan@example.com" required>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="container" style="display: flex; flex-direction: row; justify-content: space-between;">
                <div style="width: 40%;">
                    <button class="btn btn-sm btn-success">
                        <h3>Crear Usuario</h3>
                    </button>
                </div>
                <div style="width: 50%;">
                    <!--Redireccionamiento a la vista anterior-->
                    <a href="{{route('usuarios.index')}}" class="btn btn-sm btn-primary"><h3>Regresar</h3></a>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
