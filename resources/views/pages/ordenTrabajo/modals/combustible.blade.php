@foreach($orders as $item)
<div class="modal fade" id="combustibleOrdenTrabajo{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <label>Lugar</label>
                        <select class=" form-control form-control-sm" name="lugar">
                            <option value="1">TRUJILLO</option>
                            <option value="2">BAGUA</option>
                            <option value="3">OTROS</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                            <label>Galones</label>
                            <input type="text" class=" form-control form-control-sm" name="galones">                 
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Kilometros</label>
                        <input type="text" class=" form-control form-control-sm" name="kilometros">
                    </div>
                    <div class="col-md-6">
                        <label>Precio</label>
                        <input type="text" class=" form-control form-control-sm" name="precio">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Nº de Ticket</label>
                        <input type="text" class=" form-control form-control-sm" name="nro_ticket">
                    </div>
                    <div class="col-md-6">
                        <label>Ticket</label>
                        <input type="file" class="form-control form-control-sm" name="ticket">
                    </div>
                </div>
                <br>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Lugar</th>
                                <th>Galones</th>
                                <th>Kilometros</th>
                                <th>Precio</th> 
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th><button type="button" class="btn btn-sm btn-danger"> <i class="fa fa-remove"></i> </button></th>
                            </tr>
                        </tbody>
                    </table>
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