@foreach ($terceros as $key=>$item)
<div class="modal fade" id="editarTercero{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">EDITAR PROVEEDOR PRODUCTO</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="{{route('proproductos.update',$item->id)}}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT')}}
            <div class="modal-body">
                <style>
                    .row{
                        padding-top: 10px;
                    }
                </style>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Razón Social:</label>
                        <input type="text" class="form-control" name="razon_social" value="{{$item->razon_social}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Documento:</label>
                        <input type="text" class="form-control" name="ruc" value="{{$item->ruc}}">
                    </div>
                    <div class="col-md-6">
                        <label for="">Teléfono:</label>
                        <input type="text" class="form-control" name="telefono" value="{{$item->telefono}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Dirección:</label>
                        <input type="text" class="form-control" name="direccion" value="{{$item->direccion}}">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
        </div>
    </div>
</div>
@endforeach
