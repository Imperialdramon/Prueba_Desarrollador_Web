@extends('layouts/Plantilla')

@section('contenido')

<div class="container" style="align-content: center;">
    <br>
    <h2 class="titles">En este apartado se puede ver, crear, modificar y eliminar usuarios</h2>
    <br>
    @php
        print_r{$usuarios};
    @endphp
    <div class="card">
        <h4 class="card-header" style="text-align: center;">Listado de usuarios del sistema</h4>
        <div class="card-body">
            <div class="table table-responsive table-bordered">
                <table class="table table-sm" style="text-align: center;">
                    <thead>
                        <th>Identificador</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Correo de contacto</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                    </thead>
                    <tbody>
                    @foreach ($usuarios as $usuario)
                        <td>{($item->id)}</td>
                        <td>{($item->nombre)}</td>
                        <td>{($item->apellidos)}</td>
                        <td>{($item->email)}</td>
                        <td>a</td>
                        <td>a</td>
                        @endforeach
                    </tbody>


                </table>

            </div>
        </div>
    </div>

</div>
@endsection
