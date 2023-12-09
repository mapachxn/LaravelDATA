<!-- Modal de Creado-->
<div class="modal fade" id="editextra{{$extraservice->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cambiar Servicio Extra</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('extraservices.store',$extraservice->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="" class="form-label">Nombre del Establecimiento:</label>
                        <input type="text" class="form-control" name="name" id=""
                            aria-describedby="helpId" placeholder="" value="{{$extraservice->name}}">
                        <small id="helpId" class="form-text text-muted"></small>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Tipo de Servicio</label>
                        <select name="typese" class="form-control">
                            <?php foreach ($services as $service):?>
                                <option value="<?=$service->id?>"><?=$service->category?></option>
                            <?php endforeach?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Dueño del Servicio:</label>
                        <input type="text" class="form-control" name="owner" id=""
                            aria-describedby="helpId" placeholder="" value="{{$extraservice->owner}}">
                        <small id="helpId" class="form-text text-muted"></small>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Teléfono:</label>
                        <input type="text" class="form-control" name="phone" id=""
                            aria-describedby="helpId" placeholder="" maxlength="10" value="{{$extraservice->phone}}">
                        <small id="helpId" class="form-text text-muted"></small>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Calle:</label>
                        <input type="text" class="form-control" name="street" id=""
                            aria-describedby="helpId" placeholder="" value="{{$extraservice->street}}">
                        <small id="helpId" class="form-text text-muted"></small>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Colonia:</label>
                        <input type="text" class="form-control" name="neighborhood" id=""
                            aria-describedby="helpId" placeholder="" value="{{$extraservice->neighbothood}}">
                        <small id="helpId" class="form-text text-muted"></small>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Horario:</label>
                        <input type="text" class="form-control" name="hours" id=""
                            aria-describedby="helpId" placeholder="" value="{{$extraservice->hours}}">
                        <small id="helpId" class="form-text text-muted"></small>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Precio:</label>
                        <input type="text" class="form-control" name="price" id=""
                            aria-describedby="helpId" placeholder="" value="{{$extraservice->price}}">
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



<div class="modal fade" id="deleteextra{{$extraservice->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Perfil</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('extraservices.destroy', $extraservice->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    Estás seguro de eliminar el Servicio Extra <strong> {{$extraservice->name}} ?</strong>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                </div>
            </form>
        </div>
    </div>
</div>