
<!-- Modal de Editar-->
<div class="modal fade" id="editapartments{{$apartment->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Apartamento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('apartments.update', $apartment->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="" class="form-label">Número de Cuartos:</label>
                        <input type="text" class="form-control" name="rooms" id=""
                            aria-describedby="helpId" placeholder="" value="{{$apartment->rooms}}">
                        <small id="helpId" class="form-text text-muted"></small>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Número de Baños: </label>
                        <input type="text" class="form-control" name="bathrooms" id=""
                            aria-describedby="helpId" placeholder="" value="{{$apartment->bathrooms}}">
                        <small id="helpId" class="form-text text-muted"></small>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Número de Piso: </label>
                        <input type="text" class="form-control" name="floor_p" id=""
                            aria-describedby="helpId" placeholder="" value="{{$apartment->floor_p}}">
                        <small id="helpId" class="form-text text-muted"></small>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Usuario Arrendatario:</label>
                        <select name="tenant" class="form-control">
                            <?php foreach ($users as $user):?>
                                <option value="<?=$user->id?>"><?=$user->username?></option>
                            <?php endforeach?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Link de Imagen: </label>
                        <input type="text" class="form-control" name="image" id=""
                            aria-describedby="helpId" placeholder="" value="{{$apartment->image}}">
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


<!-- Modal de Creado-->
<div class="modal fade" id="deleteapartments{{$apartment->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('apartments.destroy', $apartment->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    Estás seguro de eliminar el Apartamento <strong> {{$apartment->id}}, </strong> del Arrendatario <strong>{{$user->username}}</strong> ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                </div>
            </form>
        </div>
    </div>
</div>