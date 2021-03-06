<div class="modal fade" id="registerDocumentoP" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">REGISTRAR DOCUMENTO PERSONAL</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('documentosP.store')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="modal-body">
                <style>
                    .row{
                        padding-top: 10px;
                    }
                </style>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">CHOFERES:</label>
                        <select name="user_id" id="" class="form-control">
                            @foreach ($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Tipo de Documento:</label>
                        <select name="tipo_documento" id="" class="form-control">
                            <option value="DNI">DNI</option>
                            <option value="BREVETE">BREVETE</option>
                        </select>
                        
                    </div>
                    <div class="col-md-6">
                        <label for="">Documento:</label>
                        <input type="text" class="form-control" name="documento">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Archivo:</label>
                        <input type="file" class="form-control" name="archivos">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Fecha de Emisi??n:</label>
                        <input type="date" class="form-control" name="fecha_emision">
                    </div>
                    <div class="col-md-6">
                        <label for="">Fecha de Vencimiento:</label>
                        <input type="date" class="form-control" name="fecha_vencimiento">
                    </div>
                </div>
                <div class="row">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tipo</th>
                                    <th>Nro Documento</th>
                                    <th>Documento</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
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
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
      </div>
    </div>
  </div>