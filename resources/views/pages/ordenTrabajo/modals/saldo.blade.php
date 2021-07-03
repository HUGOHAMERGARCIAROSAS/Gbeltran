@foreach($orders as $item)
<div class="modal fade" id="saldoOrdenTrabajo{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">ABASTECIMIENTO DE COMBUSTIBLE</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('abastecimientoCombustible.store')}}" method="POST" enctype="multipart/form-data">
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
                    <div class="col-md-6">
                        <label>Total Gastos</label>
                        <input class=" form-control form-control-sm">
                    </div>
                    <div class="col-md-6">
                        <label>Monto Entregado</label>
                        <input class=" form-control form-control-sm">
                    </div>
                </div>
               <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6" >
                    <label>Saldo empresa:</label>
                        <label>0.00</label> 
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