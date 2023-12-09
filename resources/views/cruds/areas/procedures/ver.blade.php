@extends('Cruds.areas.index')

@section('contentareas')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <br><br>
            <h3>Lista de Areas</h3>
            <br>
            <a href="cruds" class="btn btn-primary">Regresar</a>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createarea">
                Nueva Area
            </button>
            <div class="table-responsive">
                <br>
                <table class="table">
                    <thead class ="bg-dark text-white">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">ID de la unidad del Area</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($areas as $area)
                            <tr class="">
                                <td scope="row">{{ $area->id }}</td>
                                <td>{{ $area->unit }}</td>
                                <td>
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editarea{{$area->id}}"> Editar </button>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deletearea{{$area->id}}"> Eliminar </button>
                                </td>
                            </tr>
                            @include('Cruds.areas.procedures.info')
                        @endforeach
                    </tbody>
                </table>
            </div>
            @include('Cruds.areas.procedures.create')

        </div>
        <div class="col-md-2"></div>
    </div>
@endsection