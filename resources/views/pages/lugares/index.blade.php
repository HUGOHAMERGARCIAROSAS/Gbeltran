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
                        <h2>LUGARES</h2>
                    </div>
                    <div style="float: right">
                        <button type="button" class="btn btn-warning" style="height: 40px" data-toggle="modal" data-target="#createLugar">
                            <i class="fa fa-plus"></i> LUGARES
                        </button>
                    </div>
                </div>
                <div class="body">
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <form action="/lugaresTipo" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <select class=" form-control form-control-sm" onchange="CambioTipo();" id="selectTipoLugar" name="selectTipoLugar">
                                    <option value="0">Seleccionar:</option>
                                    <option value="1">Peaje</option>
                                    <option value="2">Combustible</option>
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
                                @foreach ($lugares as $key=>$item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{$item->nombre}}</td>
                                    @if($item->tipo==1)
                                    <td>Peaje</td>
                                    @else
                                    <td>Combustible</td>
                                    @endif
                                    <td>
                                        <button type="button" class="btn btn-warning">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                        
                                    </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('pages.lugares.modals.create')
</div>
@endsection
@section('js')
@include('layouts.js')
<script>
    function CambioTipo(){
        document.getElementById('btnTipoGasto').click();     
    }
</script>
@endsection