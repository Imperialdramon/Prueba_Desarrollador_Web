@extends('layouts/Plantilla')

@section('contenido')

<div class="container" style="align-content: center;">
    <br>
    <h2 class="titles">En este apartado se puede modificar usuarios</h2>
    <br>
    <div class="card" style="background-color:rgb(202, 223, 248)">
        <h4 class="card-header" style="text-align: center;">Usuario a modificar</h4>
        <!--Se realiza la actualización que luego redirecciona a la vista anterior-->
        <form action="{{route('usuarios.update',$usuario->id)}}" method="POST">
            @csrf
            <div class="card-body">
                <div class="table table-responsive table-bordered">
                    <table class="table table-sm" style="text-align: center;">
                        <thead>
                            <th><h5>Nombre</h5></th>
                            <th><h5>Apellidos</h5></th>
                            <th><h5>Correo de contacto</h5></th>
                        </thead>
                        <!--Se muestran los datos a modificar como valor ya posicionado para poder editar viendo los datos actuales-->
                        <tbody>
                            <tr>
                                <td>
                                    <input type="text" style="text-align: center" class="form-control" name="nombre" rows="1" maxlength="30" value={{$usuario->nombre}} required>
                                </td>
                                <td>
                                    <input type="text" style="text-align: center" class="form-control" name="apellidos" rows="1" maxlength="70" value={{$usuario->apellidos}} required>
                                </td>
                                <td>
                                    <input type="email" style="text-align: center" class="form-control" name="email" value={{$usuario->email}} required>
                                </td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="container" style="display: flex; flex-direction: row; justify-content: space-between;">
                <div style="width: 40%;">
                    <button class="btn btn-sm btn-success">
                        <h3>Modificar Usuario</h3>
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
