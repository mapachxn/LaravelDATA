
<!-- Modal de Creado-->
<div class="modal fade" id="editunit{{$unit->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar Perfil</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('units.update', $unit->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="" class="form-label">Calle:</label>
                        <input type="text" class="form-control" name="street" id=""
                            aria-describedby="helpId" placeholder="" value="{{$unit->street}}">
                        <small id="helpId" class="form-text text-muted"></small>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Colonia:</label>
                        <input type="text" class="form-control" name="neighborhood" id=""
                            aria-describedby="helpId" placeholder=""  value="{{$unit->neighborhood}}">
                        <small id="helpId" class="form-text text-muted"></small>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Servicio Extra:</label>
                        <select name="extra_services" class="form-control">
                            <?php foreach ($extraservices as $extraservice):?>
                                <option value="<?=$extraservice->id?>"><?=$extraservice->name?></option>
                            <?php endforeach?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Apartamento:</label>
                        <select name="apartments" class="form-control">
                            <?php foreach ($apartments as $apartment):?>
                                <option value="<?=$apartment->id?>"><?=$apartment->id?></option>
                            <?php endforeach?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Pisos:</label>
                        <input type="text" class="form-control" name="floors" id=""
                            aria-describedby="helpId" placeholder=""  value="{{$unit->floors}}">
                        <small id="helpId" class="form-text text-muted"></small>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Localidad:</label>
                        <input type="text" class="form-control" name="locality" id=""
                            aria-describedby="helpId" placeholder=""  value="{{$unit->locality}}">
                        <small id="helpId" class="form-text text-muted"></small>
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



<div class="modal fade" id="deleteunit{{$unit->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Unidad</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('units.destroy', $unit->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    Estás seguro de eliminar la unidad <strong> {{$unit->id}} de la calle {{$unit->street}}?</strong>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                </div>
            </form>
        </div>
    </div>
</div>