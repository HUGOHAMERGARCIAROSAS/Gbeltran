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
                        <h2>GASTOS</h2>
                    </div>
                    <div style="float: right">
                        <button type="button" class="btn btn-warning" style="height: 40px" data-toggle="modal" data-target="#createGasto">
                            <i class="fa fa-plus"></i> GASTO
                        </button>
                    </div>
                </div>
                <div class="body">
                    
                    <div class="row">
                        <div class="col-md-4">
                            <!--<select class=" form-control form-control-sm" onchange="CambioTipo();" name="selectTipoGasto" id="selectTipoGasto">
                                <option value="1" selected>Con comprobante</option>
                                <option value="2">Sin comprobante</option>
                            </select>-->
                        </div>
                        <div class="col-md-4">
                            <form action="/gastosTipo" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <select class=" form-control form-control-sm" onchange="CambioTipo();" id="selectTipoGasto" name="selectTipoGasto">
                                    <option @if($gastos[0]["tipo"]==1)
                                        selected
                                    @endif value="1">Con comprobante</option>
                                    <option @if($gastos[0]["tipo"]==2)
                                        selected
                                    @endif value="2">Sin comprobante</option>
                                </select>
                                <button type="submit" id="btnTipoGasto" style="display: none">Enviar</button>
                            </form>
                            
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Descripción</th>
                                    <th>Tipo</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach ($gastos as $key=>$item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{$item->descripcion}}</td>
                                    @if($item->tipo==1)
                                    <td>Con comprobante</td>
                                    @else
                                    <td>Sin comprobante</td>
                                    @endif
                                    <td>
                                        <button type="button" class="btn btn-success"  data-toggle="modal" data-target="#editGasto{{$item->id}}">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <form style="display: inline-block;" action="{{ route('gasto.updateEstado',$item->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('PUT')}}
                                            <button type="submit"class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                  <!-- <div class="row">
                    <table id="tablaGastos" class="table table-bordered table-hover js-basic-example dataTable table-custom">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>#</th>
                                <th>Descripción</th>
                                <th>Tipo</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody id="bodytablaGastos">                            
                        </tbody>
                    </table>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    @include('pages.gastos.modals.create')
    @include('pages.gastos.modals.edit')
</div>
@endsection
@section('js')
@include('layouts.js')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $(document).ready(function(){ 
       // $.get('gastosAll', function(data){     
       //     $.each(data, function (indice, value) {
       //                 var num=parseInt(indice)+parseInt(1);
       //                 $('#bodytablaGastos').append('<tr><td>'+value.id+'</td><td>'+num+'</td><td>'+value.descripcion+'</td><td>'+value.tipo+'</td><td><button type="button"class="btn btn-danger" onclick=Eliminar('+value.id+');><i class="fa fa-trash"></i></button></td</tr>');
       //     });   
       // }); 
     })
    function CambioTipo(){    
       // var tipo=document.getElementById('selectTipoGasto').value;
       // $('#bodytablaGastos').empty();
       // $.get('gastosTipo/'+tipo, function(data){     
       //     $.each(data, function (indice, value) {
       //                 var num=parseInt(indice)+parseInt(1);
       //                 $('#bodytablaGastos').append('<tr><td>'+value.id+'</td><td>'+num+'</td><td>'+value.descripcion+'</td><td>'+value.tipo+'</td><td><button type="button"class="btn btn-danger" onclick=Eliminar('+value.id+');><i class="fa fa-trash"></i></button></td</tr>');
       //     }); 
       // }); 
        document.getElementById('btnTipoGasto').click();     
    }
    function Eliminar(idGasto){
        alert(idGasto);
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                swal("Poof! Your imaginary file has been deleted!", {
                icon: "success",
                });
            } else {
                swal("Your imaginary file is safe!");
            }
            });      
    }
</script>
@endsection