<div class="modal fade" id="registerOrdenTrabajo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">REGISTRAR ORDEN DE TRABAJO</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('viajes.store')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="modal-body">
                <style>
                    .row{
                        padding-top: 10px;
                    }
                </style>
                <input type="hidden" name="usuario_created" value="{{auth()->user()->email}}">
                <div class="row">
                    <div class="col-md-4">
                        <label>Fecha Inicio</label>
                        <input type="date" class=" form-control form-control-sm" name="fecha_inicio">
                    </div>
                    <div class="col-md-4">
                        <label>Fecha Fin</label>
                        <input type="date" class=" form-control form-control-sm" name="fecha_fin">
                    </div>
                    <div class="col-md-4">
                        <label>Moneda</label>
                        <select name="empresa_id" class=" form-control">
                            <option value="1" selected>PEN</option>
                            <option value="0" selected>USD</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label>Empresa</label>
                        <select name="empresa_id" class=" form-control">
                            <option value="1" selected>Transporte Beltran</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label>Cliente</label>
                        <select name="cliente_id" id="" class="form-control">
                            @foreach ($clientes as $cliente)
                                <option value="{{$cliente->id}}">{{$cliente->razon_social}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label>Conductor</label>
                        <select name="conductor_id" id="" class="form-control">
                            @foreach ($conductores as $conductor)
                                <option value="{{$conductor->id}}">{{$conductor->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class=" col-md-4">
                        <label>Ruta</label>
                        <select name="ruta_id" class="form-control">
                            @foreach ($rutas as $ruta)
                                <option value="{{$ruta->id}}">{{$ruta->punto_inicial.'_'.$ruta->punto_final}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class=" col-md-4">
                        <label>Veh??culo</label>
                        <select name="vehiculo_id" class="form-control">
                            @foreach($unidades as $unidad)
                            <option value="{{$unidad->id}}">{{$unidad->placa}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class=" col-md-4">
                        <label>Producto</label>
                        <input type="text" class=" form-control form-control-sm" name="producto" >
                    </div>
                </div>
                <div class="row">
                    <div class=" col-md-4">
                        <label>Monto</label>
                        <input type="text" class=" form-control form-control-sm" name="monto">
                    </div>
                    <div class=" col-md-4">
                       <label>Total Soles</label> 
                       <input type="text" class=" form-control form-control-sm" name="total_soles">
                    </div>
                </div>
                <div class="row">
                    <div style="margin: auto">
                        <input type="checkbox"  id="isAgeSelected">
                        <label>Terceros</label>
                    </div>
                </div>
                <div class="row" id="txtAge" style="display:none">
                    <div class=" col-md-4">
                        <label >Empresa Tercera</label>
                        <select name="empresa_tercera_id" class="form-control">
                            <option value="1">Empresa 1</option>
                        </select>
                    </div>
                    <div class=" col-md-4">
                        <label >Precio Tercero</label>
                        <input type="text" class=" form-control form-control-sm" name="precio_tercero">
                    </div>
                    <div class=" col-md-4">
                        <label >Precio Cliente</label>
                        <input type="text"  class=" form-control form-control-sm" name="monto_tercero">
                    </div>
                </div>
                <div class="row" id="txtAge2" style="display: none">
                    <div class=" col-md-4">
                        
                    </div>
                    <div class=" col-md-4">
                        <label >Factura Tercero</label>
                        <input type="file" class=" form-control form-control-sm" name="factura_tercero">
                    </div>
                    <div class=" col-md-4">
                        <label >Factura Cliente</label>
                        <input type="file"  class=" form-control form-control-sm" name="factura_cliente">
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