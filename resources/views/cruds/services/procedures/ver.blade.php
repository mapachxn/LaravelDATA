@extends('cruds.services.index')

@section('contentservices')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <br><br>
            <h3>Lista de Servicios</h3>
            <br>
            <a href="cruds" class="btn btn-primary">Regresar</a>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createservice">
                Nuevo Servicio
            </button>
            <div class="table-responsive">
                <br>
                <table class="table">
                    <thead class ="bg-dark text-white">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Servicio</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $service)
                            <tr class="">
                                <td scope="row">{{ $service->id }}</td>
                                <td>{{ $service->category }}</td>
                                <td>{{ $service->description }}</td>
                                <td>
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editservice{{$service->id}}"> Editar </button>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteservice{{$service->id}}"> Eliminar </button>
                                </td>
                            </tr>
                            @include('cruds.services.procedures.info')
                        @endforeach
                    </tbody>
                </table>
            </div>
            @include('cruds.services.procedures.create')

        </div>
        <div class="col-md-2"></div>
    </div>
@endsection