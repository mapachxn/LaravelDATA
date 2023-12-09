@extends('Cruds.apartments.index')

@section('contentapartments')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <br><br>
            <h3>Lista de Apartamentos</h3>
            <br>
            <a href="cruds" class="btn btn-primary">Regresar</a>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createapartment">
                Nuevo Apartamento
            </button>
            <div class="table-responsive">
                <br>
                <table class="table">
                    <thead class ="bg-dark text-white">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Número de Cuartos:</th>
                            <th scope="col">Número de Baños:</th>
                            <th scope="col">Número de Piso:</th>
                            <th scope="col">ID del usuario Arrendatario:</th>
                            <th scope="col">Imagen:</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($apartments as $apartment)
                            <tr class="">
                                <td scope="row">{{ $apartment->id }}</td>
                                <td>{{ $apartment->rooms }}</td>
                                <td>{{ $apartment->bathrooms }}</td>
                                <td>{{ $apartment->floor_p }}</td>
                                <td>{{ $apartment->tenant }}</td>
                                <td>{{ $apartment->image }}</td>
                                <td>
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editapartments{{$apartment->id}}"> Editar </button>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteapartments{{$apartment->id}}"> Eliminar </button>
                                </td>
                            </tr>
                            @include('Cruds.apartments.procedures.info')
                        @endforeach
                    </tbody>
                </table>
            </div>
            @include('Cruds.apartments.procedures.create')

        </div>
        <div class="col-md-2"></div>
    </div>
@endsection