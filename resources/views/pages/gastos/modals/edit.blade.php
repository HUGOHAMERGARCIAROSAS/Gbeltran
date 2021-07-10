@foreach ($gastos as $key=>$item)
<div class="modal fade" id="editGasto{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">EDITAR GASTO</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('gastos.update',$item->id)}}" method="POST">
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
                        <label for="">Tipo:</label>
                        <select name="tipo" class="form-control">
                            <option @if($item->tipo==1)
                                selected
                            @endif value="1">Con comprobante</option>
                            <option @if($item->tipo==2)
                                selected
                            @endif value="2">Sin comprobante</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" value="{{ $item->descripcion }}">
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