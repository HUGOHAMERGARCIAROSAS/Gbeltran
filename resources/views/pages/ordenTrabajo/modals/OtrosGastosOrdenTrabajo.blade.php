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
                        <label>Nº LIQUIDACIÓN</label>
                        <input class="form-control form-control-sm">
                    </div>
                    <div class="col-md-4">
                        <label>ALIMENTACIÓN</label>
                        <select class="form-control form-control-sm">
                            <option value="">BASE</option>
                            <option value="" selected>EN VIAJE</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <input class="form-control form-auth-sm" style="margin-top: 25px">
                    </div>
                    
                    
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-center">Descripción</th>
                                        <th class="text-center">Monto</th>
                                        <th class="text-center">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                    <tr>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td class="text-center">
                                            {{-- <a href="{{route('cajas.edit',$item->id)}}" class="btn btn-sm btn-info"><i class="fa fa-money"></i></a> --}}
                                            <button type="button" class="btn btn-sm btn-danger"> 
                                                <i class="fa fa-remove"></i>
                                             </button>
                                        </td>
                                    </tr>                            
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <label>GASTOS CON COMPROBANTES</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label>Peaje</label>
                        <select class=" form-control form-control-sm"></select>
                    </div>
                    <div class="col-md-4">
                        <input style="margin-top:32px " class="form-control form-control-sm">
                    </div>
                    <div class="col-md-4">
                        <input style="margin-top:26px " type="file" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-center">Lugar</th>
                                        <th class="text-center">Monto</th>
                                        <th class="text-center">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                    <tr>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td class="text-center">
                                            {{-- <a href="{{route('cajas.edit',$item->id)}}" class="btn btn-sm btn-info"><i class="fa fa-money"></i></a> --}}
                                            <button type="button" class="btn btn-sm btn-danger"> 
                                                <i class="fa fa-remove"></i>
                                             </button>
                                        </td>
                                    </tr>                            
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label>Hospedaje</label>
                        <input class="form-control" type="text" name="">
                    </div>
                   <div class="col-md-3">
                       <input type="file" class="form-control form-control-file" style="margin-top:23px " >
                   </div>
                    <div class="col-md-3">
                        <label>Lavado</label>  
                        <input class="form-control" type="text" name="">         
                    </div>
                    <div class="col-md-3">
                        <input type="file" class="form-control form-control-file" style="margin-top:23px ">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label>Estiba</label>
                        <input class="form-control" type="text" name="">
                    </div>
                    <div class="col-md-3">
                        <input type="file" class="form-control form-control-file" style="margin-top:23px " >
                    </div>
                    <div class="col-md-3">
                        <label>Desestiba</label>
                        <input class="form-control" type="text" name="">
                    </div>
                    <div class="col-md-3">
                        <input type="file" class="form-control form-control-file" style="margin-top:23px " >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label>Otros</label>
                        <input class="form-control" type="text" name="">
                    </div>
                </div>
                    <div class="row">
                        <div class="col-md-5"></div>
                        <div class="col-md-5"></div>
                       <div class="col-md-2" >
                           <label>Total:</label>
                            <label>0.00</label> 
                        </div> 
                    </div>
                <hr>
                <label>GASTOS SIN COMPROBANTES</label>
                <div class="row">
                    <div class="col-md-3">
                        <label>Tramitador</label>
                        <input class="form-control" type="text" name="">
                    </div>
                    <div class="col-md-3">
                        <label>Guardiania</label>
                        <input class="form-control" type="text" name="">
                    </div>
                    <div class="col-md-3">
                        <label>Manipuleo</label>
                        <input class="form-control" type="text" name="">
                    </div>
                    <div class="col-md-3">
                        <label>Cebaf</label>
                        <input class="form-control" type="text" name="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label>Carpitas</label>
                        <input class="form-control" type="text" name="">
                    </div>
                    <div class="col-md-3">
                        <label>Vitapro</label>
                        <input class="form-control" type="text" name="">
                    </div>
                    <div class="col-md-3">
                        <label>Coca</label>
                        <input class="form-control" type="text" name="">
                    </div>
                    <div class="col-md-3">
                        <label>Comisión</label>
                        <input class="form-control" type="text" name="">
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label>Cochera</label>
                        <input class="form-control" type="text" name="">
                    </div>
                    <div class="col-md-3">
                        <label>Tarjetas vencidas</label>
                        <input class="form-control" type="text" name="">
                    </div>
                    <div class="col-md-3">
                        <label>Taxis</label>
                        <input class="form-control" type="text" name="">
                    </div>
                    <div class="col-md-3">
                        <label>Otros</label>
                        <input class="form-control" type="text" name="">
                    </div>

                </div>
                
                <div class="row">
                    <div class="col-md-5"></div>
                    <div class="col-md-5"></div>
                   <div class="col-md-2" >
                       <label>Total:</label>
                        <label>0.00</label> 
                    </div> 
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-5"></div>
                    <div class="col-md-5"></div>
                   <div class="col-md-2" >
                       <label>TOTAL:</label>
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