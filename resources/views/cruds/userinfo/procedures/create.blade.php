<!-- Modal de Creado-->
<div class="modal fade" id="createuserinfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar Datos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('userinfo.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="" class="form-label">Selecciona el usuario que deseas asociar a los
                            datos:</label>
                        <select name="id" class="form-control">
                            <?php foreach ($users as $user):?>
                            <option value="<?= $user->id ?>"><?= $user->username ?></option>
                            <?php endforeach?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Nombre"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="lastname" class="form-label">Apellido</label>
                        <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Apellido"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="birthday" class="form-label">Fecha de Nacimiento</label>
                        <input type="date" class="form-control" name="birthday" id="birthday" required>
                    </div>
                    <div class="mb-3">
                        <label for="account_number" class="form-label">Número de Cuenta</label>
                        <input type="text" class="form-control" name="account_number" id="account_number"
                            placeholder="Número de Cuenta">
                    </div>
                    <div class="mb-3">
                        <label for="bank_name" class="form-label">Nombre del Banco</label>
                        <input type="text" class="form-control" name="bank_name" id="bank_name"
                            placeholder="Nombre del Banco">
                    </div>
                    <div class="mb-3">
                        <label for="account_type" class="form-label">Tipo de Cuenta</label>
                        <input type="text" class="form-control" name="account_type" id="account_type"
                            placeholder="Tipo de Cuenta">
                    </div>
                    <div class="mb-3">
                        <label for="account_holder" class="form-label">Titular de la Cuenta</label>
                        <input type="text" class="form-control" name="account_holder" id="account_holder"
                            placeholder="Titular de la Cuenta">
                    </div>
                    <div class="mb-3">
                        <label for="cvv" class="form-label">CVV</label>
                        <input type="numeric" class="form-control" name="cvv" id="cvv" placeholder="CVV" required pattern="\d*" minlength="3" maxlength="3">
                    </div>
                    <div class="mb-3">
                        <label for="month_c" class="form-label">Mes de Vencimiento</label>
                        <input type="text" class="form-control" name="month_c" id="month_c"
                            placeholder="Mes de Vencimiento" pattern="\d*" maxlength="10">
                    </div>
                    <div class="mb-3">
                        <label for="year_c" class="form-label">Año de Vencimiento</label>
                        <input type="text" class="form-control" name="year_c" id="year_c"
                            placeholder="Año de Vencimiento" pattern="\d*" maxlength="10">
                    </div>
                    <div class="mb-3">
                        <label for="gender">Sexo</label>
                        <select name="gender" id="gender" class="form-control" >
                            <option value="M">Masculino</option>
                            <option value="F">Femenino</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Teléfono</label>
                        <input type="numeric" class="form-control" name="phone"
                            placeholder="Teléfono" required pattern="\d*" maxlength="10">
                    </div>
                    <div class="mb-3">
                        <label for="photo" class="form-label">Foto</label>
                        <input type="text" class="form-control" name="photo" id="photo"
                            placeholder="Foto">
                    </div>
                    <div class="mb-3">
                        <label for="bio" class="form-label">Bio</label>
                        <textarea class="form-control" name="bio" id="bio" rows="3" placeholder="Bio"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="RFC" class="form-label">RFC</label>
                        <input type="text" class="form-control" name="RFC" id="RFC" placeholder="RFC">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" name="email" id="email"
                            placeholder="Correo Electrónico">
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Estado</label>
                        <select class="form-control" name="status" id="status">
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