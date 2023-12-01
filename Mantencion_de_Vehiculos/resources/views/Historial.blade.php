@extends('layouts/Plantilla')

@section('contenido')

<div class="container" style="align-content: center;">
    <br>
    <div class="card" style="background-color:rgb(202, 223, 248)">
        <h4 class="card-header" style="text-align: center;">Listado de identificadores de dueños y vehículos</h4>
        <div class="card-body">
            <div class="table table-responsive table-bordered">
                <table class="table table-sm" style="text-align: center;">
                    <thead>
                        <th>Identificador del historial</th>
                        <th>Identificador del vehículo</th>
                        <th>Identificador del dueño</th>
                    </thead>
                    <tbody>
                        <!--Se recorre la lista del historial retornado para generar la vista-->
                        @foreach ($historial as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->vehiculo}}</td>
                            <td>{{$item->dueño}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--Redireccionamiento a la vista anterior-->
    <a href="{{route('vehiculos.index')}}" class="btn btn-sm btn-primary"><h3>Regresar</h3></a>
</div>
@endsection
