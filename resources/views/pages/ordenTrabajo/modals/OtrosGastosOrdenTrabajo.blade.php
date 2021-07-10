@foreach($orders as $item)
<div class="modal fade" id="OtrosGastosOrdenTrabajo{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg " role="document">
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
                        <label>Fecha</label>
                        <input class="form-control form-control-sm" type="date" >
                    </div>
                    <div class="col-md-4">
                        <label>Tipo Gasto Operativo</label>
                        <select class="form-control form-control-sm">
                            <option value="">BASE</option>
                            <option value="" selected>EN VIAJE</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label>Gasto Operativo</label>
                        <input class="form-control form-auth-sm" >
                    </div>   
                </div>
                <div class="row" >
                    <div class="col-md-4">
                        <label>Importe</label>
                        <input class="form-control form-control-sm" type="text" >
                    </div>
                    <div class="col-md-4">
                        <input type="file" class="form-control form-auth-sm" style="margin-top: 20px">
                    </div>
                    <div class="col-md-4">
                        <button type="button" class=" btn btn-success" style="margin-top: 23px"><i class="fa fa-plus"></i></button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-center">Gasto Operativo</th>
                                        <th class="text-center">Monto</th>
                                        <th class="text-center">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                    <tr>
                                    </tr>                            
                                </tbody>
                            </table>
                        </div>
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