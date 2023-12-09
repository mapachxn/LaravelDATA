<!-- Modal de Creado-->
<div class="modal fade" id="edituserinfo{{$userinfo->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Datos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('userinfo.update', $userinfo->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Nombre"
                            required value="{{$userinfo->name}}">
                    </div>
                    <div class="mb-3">
                        <label for="lastname" class="form-label">Apellido</label>
                        <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Apellido"
                            required value="{{$userinfo->lastname}}">
                    </div>
                    <div class="mb-3">
                        <label for="birthday" class="form-label">Fecha de Nacimiento</label>
                        <input type="date" class="form-control" name="birthday" id="birthday" required>
                    </div>
                    <div class="mb-3">
                        <label for="account_number" class="form-label">Número de Cuenta</label>
                        <input type="text" class="form-control" name="account_number" id="account_number"
                            placeholder="Número de Cuenta" value="{{$userinfo->account_number}}">
                    </div>
                    <div class="mb-3">
                        <label for="bank_name" class="form-label">Nombre del Banco</label>
                        <input type="text" class="form-control" name="bank_name" id="bank_name"
                            placeholder="Nombre del Banco" value="{{$userinfo->bank_name}}">
                    </div>
                    <div class="mb-3">
                        <label for="account_type" class="form-label">Tipo de Cuenta</label>
                        <input type="text" class="form-control" name="account_type" id="account_type"
                            placeholder="Tipo de Cuenta" value="{{$userinfo->account_type}}">
                    </div>
                    <div class="mb-3">
                        <label for="account_holder" class="form-label">Titular de la Cuenta</label>
                        <input type="text" class="form-control" name="account_holder" id="account_holder"
                            placeholder="Titular de la Cuenta" value="{{$userinfo->account_holder}}">
                    </div>
                    <div class="mb-3">
                        <label for="cvv" class="form-label">CVV</label>
                        <input type="numeric" class="form-control" name="cvv" id="cvv" placeholder="CVV"
                        required pattern="\d*" minlength="3" maxlength="3" value="{{$userinfo->cvv}}">
                    </div>
                    <div class="mb-3">
                        <label for="month_c" class="form-label">Mes de Vencimiento</label>
                        <input type="text" class="form-control" name="month_c" id="month_c"
                            placeholder="Mes de Vencimiento" pattern="\d*" maxlength="10" value="{{$userinfo->month_c}}">
                    </div>
                    <div class="mb-3">
                        <label for="year_c" class="form-label">Año de Vencimiento</label>
                        <input type="text" class="form-control" name="year_c" id="year_c"
                            placeholder="Año de Vencimiento" pattern="\d*" maxlength="10" value="{{$userinfo->year_c}}">
                    </div>
                    <div class="mb-3">
                        <label for="gender">Sexo</label>
                        <select name="gender" id="gender" class="form-control" value="{{$userinfo->gender}}">
                            <option value="M">Masculino</option>
                            <option value="F">Femenino</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Teléfono</label>
                        <input type="numeric" class="form-control" name="phone"
                            placeholder="Teléfono" required pattern="\d*" maxlength="10" value="{{$userinfo->phone}}">
                    </div>
                    <div class="mb-3">
                        <label for="photo" class="form-label">Foto</label>
                        <input type="text" class="form-control" name="photo" id="photo"
                            placeholder="Foto" value="{{$userinfo->username}}">
                    </div>
                    <div class="mb-3">
                        <label for="bio" class="form-label">Bio</label>
                        <input class="form-control" name="bio" id="bio" rows="3" placeholder="Bio" value="{{$userinfo->bio}}"></input>
                    </div>
                    <div class="mb-3">
                        <label for="RFC" class="form-label">RFC</label>
                        <input type="text" class="form-control" name="RFC" id="RFC" placeholder="RFC" value="{{$userinfo->RFC}}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" name="email" id="email"
                            placeholder="Correo Electrónico" value="{{$userinfo->email}}">
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Estado</label>
                        <select class="form-control" name="status" id="status" value="{{$userinfo->status}}">
                            <option value="1" selected>Activo</option>
                            <option value="0">Inactivo</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>



<!-- Modal de Creado-->
<div class="modal fade" id="deleteuserinfo{{$userinfo->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Información</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('userinfo.destroy', $userinfo->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    Estás seguro de eliminar los datos de: <strong> {{$userinfo->name}} ?</strong>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                </div>
            </form>
        </div>
    </div>
</div>