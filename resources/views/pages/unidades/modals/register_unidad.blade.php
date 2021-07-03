<div class="modal fade" id="registerUnidad" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">REGISTRAR UNIDAD </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('unidades.store')}}" method="POST">
            {{ csrf_field() }}
            <div class="modal-body">
                <style>
                    .row{
                        padding-top: 10px;
                    }
                </style>
                <div class="row">
                  <div class="col-md-4">
                    <label for="">Unidad:</label>
                    <select class=" form-control" id="propio">
                      <option value="1" selected>PROPIO</option>
                      <option value="2">TERCIARIO</option>
                    </select>   
                  </div>
                    <div class="col-md-4">
                        <label for="">Placa:</label>
                        <input type="text" class="form-control" name="placa">
                    </div>
                    <div class="col-md-4">
                      <label for="">Año Fabricación:</label>
                      <input type="text" class="form-control" name="">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="">Clase:</label>
                    <input type="text" class="form-control" name="">
                  </div>
                  <div class="col-md-4">
                    <label for="">Marca:</label>
                    <input type="text" class="form-control" name="marca">
                  </div>
                  <div class="col-md-4">
                    <label for="">Modelo:</label>
                    <input type="text" class="form-control" name="">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="">Combustible:</label>
                    <input type="text" class="form-control" name="carga">
                  </div>
                    <div class="col-md-4">
                        <label for="">Carroceria:</label>
                        <input type="text" class="form-control" name="carga">
                    </div>
                    <div class="col-md-4">
                        <label for="">Ejes:</label>
                        <input type="text" class="form-control" name="escala">
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="">Color:</label>
                    <input type="text" class="form-control" name="">
                  </div>
                  <div class="col-md-4">
                    <label for="">Ruedas:</label>
                    <input type="text" class="form-control" name="">
                  </div>
                  <div class="col-md-4">
                    <label for="">Nº de Motor:</label>
                    <input type="text" class="form-control" name="">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="">Cilindros:</label>
                    <input type="text" class="form-control" name="">
                  </div>
                  <div class="col-md-4">
                    <label for="">Nº Serie Chasis:</label>
                    <input type="text" class="form-control" name="">
                  </div>
                  <div class="col-md-4">
                    <label for="">Carreta:</label>
                    <input type="text" class="form-control" name="">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="">Tracto:</label>
                    <input type="text" class="form-control" name="">
                  </div>
                  <div class="col-md-4">
                    <label for="">Carga Útil(Kg):</label>
                    <input type="text" class="form-control" name="">
                  </div>
                  <div class="col-md-4">
                    <label for="">Peso Seco(Kg):</label>
                    <input type="text" class="form-control" name="">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="">Peso Bruto(Kg):</label>
                    <input type="text" class="form-control" name="">
                  </div>
                   
                    <div class="col-md-4">
                      <label for="">Año Modelo:</label>
                      <input type="text" class="form-control" name="">
                    </div>
                    <div class="col-md-4">
                      <label for="">Fecha de Registro:</label>
                      <input type="date" class="form-control" name="created_at">
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input type="hidden" class="form-control" name="usuario_insert" value="{{auth()->user()->email}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                      <label>Empresa</label>
                      <select class=" form-control">
                        <option value="Empresa">Empresa</option>
                      </select>
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

