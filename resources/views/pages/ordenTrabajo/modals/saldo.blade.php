@foreach($orders as $item)
<div class="modal fade" id="saldoOrdenTrabajo{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">DEPÓSITO</h5>
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
                      <label>Forma de pago</label>
                      <select class=" form-control form-control-sm" onchange="FormaPago();" id="TipoPago" name="TipoPago">
                        <option selected value="1">Efectivo</option>
                        <option value="2">Cuenta</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <label>Importe</label>
                      <input class=" form-control form-control-sm">
                  </div>
                </div>
                <div class="row" id="divNumeroCuenta" style="display: none"> 
                    <div class="col-md-6">
                        <label>Número de cuenta</label>
                        <input class=" form-control form-control-sm">
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
@section('js')
<script>
  var tipoPago=1;
   function FormaPago(){
      tipoPago=document.getElementById("TipoPago").value;
      if(tipoPago==2){
        $("#divNumeroCuenta").css("display", "block");
      }else{
        $("#divNumeroCuenta").css("display", "none");
      }
    }
</script>
@endsection