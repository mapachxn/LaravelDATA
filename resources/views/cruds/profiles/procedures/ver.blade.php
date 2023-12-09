@extends('Cruds.profiles.index')

@section('contentprofiles')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <br><br>
            <h3>Lista de PERFILES</h3>
            <br>
            <a href="cruds" class="btn btn-primary">Regresar</a>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
                Nuevo Perfil
            </button>
            <div class="table-responsive">
                <br>
                <table class="table">
                    <thead class ="bg-dark text-white">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($profiles as $profile)
                            <tr class="">
                                <td scope="row">{{ $profile->id }}</td>
                                <td>{{ $profile->profile }}</td>
                                <td>{{ $profile->description }}</td>
                                <td>
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editprofile{{$profile->id}}"> Editar </button>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteprofile{{$profile->id}}"> Eliminar </button>
                                </td>
                            </tr>
                            @include('Cruds.profiles.procedures.info')
                        @endforeach
                    </tbody>
                </table>
            </div>
            @include('Cruds.profiles.procedures.create')

        </div>
        <div class="col-md-2"></div>
    </div>
@endsection