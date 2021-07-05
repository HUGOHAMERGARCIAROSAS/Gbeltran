@foreach ($productos as $key=>$item)
<div class="modal fade" id="editarProducto{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">EDITAR  PRODUCTO</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="{{route('productos.update',$item->id)}}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT')}}
            <div class="modal-body">
                <style>
                    .row{
                        padding-top: 10px;
                    }
                </style>
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" value="{{$item->nombre}}">
                    </div>
                    <div class="col-md-6">
                        <label for="">Tipo:</label>
                        <select name="tipo" id="" class="form-control">
                            @if($item->tipo==1)
                            <option value="1">A Enviar</option>
                            <option value="2">A Comprar</option>
                            @else
                            <option value="2">A Comprar</option>
                            <option value="1">A Enviar</option>
                            @endif
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Descripción:</label>
                        <input type="text" class="form-control" name="descripcion" value="{{$item->descripcion}}">
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
