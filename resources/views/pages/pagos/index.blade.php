@extends('layouts.layout')
@section('css')
@include('layouts.css')
@endsection
@section('content')
<div class="container-fluid">
    @include('layouts.welcome')
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card" style="background: #FFFFFF">
                <div class="header" >
                    <div style="float: left">
                        <h2>REGISTRO DE PAGOS</h2>
                    </div>
                    
                </div>
                
                <div class="body">
                    <div class="row">
                        <div class="col-md-4">
                            <input placeholder="Ingrese su búsqueda" class=" form-control form-control-sm">
                        </div>
                        <div class="col-md-4">
                            <select class=" form-control form-control-sm">
                                <option selected>PENDIENTE</option>
                                <option>CANCELADO</option>
                            </select>
                        </div>
                        <div class="col-md-4">

                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Orden de Trabajo</th>
                                    <th class="text-center">Cliente</th>
                                    <th class="text-center">Moneda</th>
                                    <th class="text-center">Monto</th>
                                    <th class="text-center">Monto Pendiente</th>
                                    <th class="text-center">Estado</th>
                                    <th class="text-center">Opciones</th>
                                </tr>
                            </thead>
                            <tbody> 
                                <tr>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center">
                                        {{-- <a href="{{route('cajas.edit',$item->id)}}" class="btn btn-sm btn-info"><i class="fa fa-money"></i></a> --}}
                                        <button type="button" class="btn btn-sm btn-info"> 
                                            <i class="fa fa-money"></i>
                                         </button>
                                    </td>
                                </tr>                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
@include('layouts.js')   
<script>
/* Sumar dos números. */
function sumar (valor) {
    var total = 0;	
    valor = parseInt(valor); // Convertir el valor a un entero (número).
	
    total = document.getElementById('spTotal').innerHTML;
	
    // Aquí valido si hay un valor previo, si no hay datos, le pongo un cero "0".
    total = (total == null || total == undefined || total == "") ? 0 : total;
	
    /* Esta es la suma. */
    total = (parseInt(total) + parseInt(valor));
	
    // Colocar el resultado de la suma en el control "span".
    document.getElementById('spTotal').innerHTML = total;
}
</script> 
@endsection