@extends('cruds.userinfo.index')

@section('contentuserinfo')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <br><br>
            <h3>Datos de usuarios</h3>
            <br>
            <a href="cruds" class="btn btn-primary">Regresar</a>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createuserinfo">
                Agregar Datos
            </button>
            <div class="table-responsive">
                <br>
                <table class="table">
                    <thead class ="bg-dark text-white">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Fecha de Nacimiento</th>
                            <th scope="col">Número de Cuenta</th>
                            <th scope="col">Nombre del Banco</th>
                            <th scope="col">Tipo de Cuenta</th>
                            <th scope="col">Titular de la Cuenta</th>
                            <th scope="col">CVV</th>
                            <th scope="col">Mes de Vencimiento</th>
                            <th scope="col">Año de Vencimiento</th>
                            <th scope="col">Género</th>
                            <th scope="col">Teléfono</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Bio</th>
                            <th scope="col">RFC</th>
                            <th scope="col">Correo Electrónico</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($userinfos as $userinfo)
                            <tr class="">
                                <td scope="row">{{ $userinfo->id }}</td>
                                <td>{{ $userinfo->name }}</td>
                                <td>{{ $userinfo->lastname }}</td>
                                <td>{{ $userinfo->birthday }}</td>
                                <td>{{ $userinfo->account_number }}</td>
                                <td>{{ $userinfo->bank_name }}</td>
                                <td>{{ $userinfo->account_type }}</td>
                                <td>{{ $userinfo->account_holder }}</td>
                                <td>{{ $userinfo->cvv }}</td>
                                <td>{{ $userinfo->month_c }}</td>
                                <td>{{ $userinfo->year_c }}</td>
                                <td>{{ $userinfo->gender }}</td>
                                <td>{{ $userinfo->phone }}</td>
                                <td>{{ $userinfo->photo }}</td>
                                <td>{{ $userinfo->bio }}</td>
                                <td>{{ $userinfo->RFC }}</td>
                                <td>{{ $userinfo->email }}</td>
                                <td>{{ $userinfo->status ? 'Activo' : 'Inactivo' }}</td>
                                <td>
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edituserinfo{{$userinfo->id}}"> Editar </button>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteuserinfo{{$userinfo->id}}"> Eliminar </button>
                                </td>
                            </tr>
                            @include('cruds.userinfo.procedures.info')
                        @endforeach
                    </tbody>
                </table>
            </div>
            @include('cruds.userinfo.procedures.create')
        </div>
        <div class="col-md-2"></div>
    </div>
@endsection