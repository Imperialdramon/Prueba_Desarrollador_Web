@extends('layouts/Plantilla')

@section('contenido')

<div class="container" style="align-content: center;">
    <br>
    <h2 class="titles">En este apartado se puede ver, crear y modificar vehículos</h2>
    <br>
    <form action="/create_vehiculo">
        <button class="btn btn-sm btn-success" style="size: 50px">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-plus" viewBox="0 0 16 16">
                <path d="M8.5 6a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V10a.5.5 0 0 0 1 0V8.5H10a.5.5 0 0 0 0-1H8.5z"/>
                <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1"/>
            </svg> Agregar un nuevo vehículo
        </button>
    </form>
    <div class="card" style="background-color:rgb(202, 223, 248)">
        <h4 class="card-header" style="text-align: center;">Listado de vehículos actuales del sistema</h4>
        <div class="card-body">
            <div class="col-sm-12">
                @if ($mensaje = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{$mensaje}}
                    </div>
                @elseif ($mensaje = Session::get('failed'))
                    <div class="alert alert-danger" role="alert">
                        {{ $mensaje }}
                    </div>
                @endif
            </div>
            <div class="table table-responsive table-bordered">
                <table class="table table-sm" style="text-align: center;">
                    <thead>
                        <th>Identificador</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Año</th>
                        <th>Identificador del dueño</th>
                        <th>Precio</th>
                        <th>Ver todos los dueños</th>
                        <th>Modificar vehículo</th>
                    </thead>
                    <tbody>
                    @foreach ($vehiculos as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->marca}}</td>
                            <td>{{$item->modelo}}</td>
                            <td>{{$item->año}}</td>
                            <td>{{$item->dueño}}</td>
                            <td>{{$item->precio}}</td>
                            <td>
                                <form action="{{route('historials.index',$item->id)}}" method="GET">
                                    <button class="btn btn-sm btn-primary" style="height: 35px">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                                        </svg>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{route('vehiculos.edit',$item->id)}}" method="GET">
                                    <button class="btn btn-sm btn-warning" style="height: 35px">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"></path>
                                        </svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
