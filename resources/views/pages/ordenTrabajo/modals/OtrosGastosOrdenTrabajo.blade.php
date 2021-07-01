@foreach($orders as $item)
<div class="modal fade" id="OtrosGastosOrdenTrabajo{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">OTROS GASTOS</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="modal-body">
                <style>
                    .row{
                        padding-top: 10px;
                    }
                </style>
                <select class=" form-control form-control-sm" name="orden_trabajo_id" style="display: none">
                    <option value="{{$item->id}}">{{ $item->id }}</option>
                </select>
                <div class="row">
                    <div class="col-md-4">
                        <label>Viaticos</label>
                        <input class="form-control" type="text" name="">
                    </div>
                    <div class="col-md-4">
                        <label>Peajes</label>  
                        <input class="form-control" type="text" name="">         
                    </div>
                    <div class="col-md-4">
                        <label>Mantenimientos</label>
                        <input class="form-control" type="text" name="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label>Gastos sin sustentos</label>
                        <input class="form-control" type="text" name="">
                    </div>
                    <div class="col-md-4">
                        <label>Otros</label>
                        <input class="form-control" type="text" name="">
                    </div>
                    <div class="col-md-4">
                        
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