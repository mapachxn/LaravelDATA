@extends('Cruds.extraservices.index')

@section('contentextra')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <br><br>
            <h3>Lista de Servicios Extras</h3>
            <br>
            <a href="cruds" class="btn btn-primary">Regresar</a>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createextra">
                Nuevo Servicio Extra
            </button>
            <div class="table-responsive">
                <br>
                <table class="table">
                    <thead class ="bg-dark text-white">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre:</th>
                            <th scope="col">Tipo de Servicio:</th>
                            <th scope="col">Dueño:</th>
                            <th scope="col">Teléfono:</th>
                            <th scope="col">Calle:</th>
                            <th scope="col">Colonia:</th>
                            <th scope="col">Horario:</th>
                            <th scope="col">Precio:</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($extraservices as $extraservice)
                            <tr class="">
                                <td scope="row">{{ $extraservice->id }}</td>
                                <td>{{ $extraservice->name }}</td>
                                <td>{{ $extraservice->typese }}</td>
                                <td>{{ $extraservice->owner }}</td>
                                <td>{{ $extraservice->phone }}</td>
                                <td>{{ $extraservice->street }}</td>
                                <td>{{ $extraservice->neighborhood }}</td>
                                <td>{{ $extraservice->hours }}</td>
                                <td>{{ $extraservice->price }}</td>
                                <td>
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editextra{{$extraservice->id}}"> Editar </button>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteextra{{$extraservice->id}}"> Eliminar </button>
                                </td>
                            </tr>
                            @include('cruds.extraservices.procedures.info')
                        @endforeach
                    </tbody>
                </table>
            </div>
            @include('cruds.extraservices.procedures.create')

        </div>
        <div class="col-md-2"></div>
    </div>
@endsection