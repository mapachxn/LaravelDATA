@extends('cruds.units.index')

@section('contentunits')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <br><br>
            <h3>Lista de Unidades</h3>
            <br>
            <a href="cruds" class="btn btn-primary">Regresar</a>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createunit">
                Nueva Unidad
            </button>
            <div class="table-responsive">
                <br>
                <table class="table">
                    <thead class ="bg-dark text-white">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Calle</th>
                            <th scope="col">Colonia</th>
                            <th scope="col">ID del Servicio Extra</th>
                            <th scope="col">Total de apartamentos</th>
                            <th scope="col">Número de pisos</th>
                            <th scope="col">Localidad</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($units as $unit)
                            <tr class="">
                                <td scope="row">{{ $unit->id }}</td>
                                <td>{{ $unit->street }}</td>
                                <td>{{ $unit->neighborhood }}</td>
                                <td>{{ $unit->extra_services }}</td>
                                <td>{{ $unit->apartment }}</td>
                                <td>{{ $unit->floors }}</td>
                                <td>{{ $unit->locality }}</td>
                                <td>
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editunit{{$unit->id}}"> Editar </button>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteunit{{$unit->id}}"> Eliminar </button>
                                </td>
                            </tr>
                            @include('cruds.units.procedures.info')
                        @endforeach
                    </tbody>
                </table>
            </div>
            @include('cruds.units.procedures.create')

        </div>
        <div class="col-md-2"></div>
    </div>
@endsection