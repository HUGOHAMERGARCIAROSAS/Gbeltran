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
        <form action="{{route('saldo.store')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="modal-body" >
                <style>
                    .row{
                        padding-top: 10px;
                    }
                </style>
                <select class=" form-control form-control-sm" name="orden_id" style="display: none" >
                          <option value="{{$item->id}}">{{ $item->id }}</option>
                </select>
                <saldo-component/>  
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
  //var tipoPago=1;
</script>
@endsection