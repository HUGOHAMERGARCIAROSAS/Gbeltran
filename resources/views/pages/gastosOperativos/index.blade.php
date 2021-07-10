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
                        <h2>GASTOS OPERATIVOS</h2>
                    </div>
                    
                </div>
                
                <div class="body">
                    <div class="row">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-center">Orden de Trabajo</th>
                                        <th class="text-center">Vehículo</th>
                                        <th class="text-center">Conductor</th>
                                        <th class="text-center">Ruta</th>
                                        <th class="text-center">Desembolso</th>
                                        <th class="text-center">Total Gasto</th>
                                        <th class="text-center">Diferencia</th>
                                        <th class="text-center">Acción</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                                             
                                </tbody>
                            </table>
                        </div>
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