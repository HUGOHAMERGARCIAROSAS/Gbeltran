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
                        <h2>TERCEROS</h2>
                    </div>
                    <div style="float: right">
                        <button type="button" class="btn btn-warning" style="height: 40px" data-toggle="modal" data-target="#registerTercero">
                            <i class="fa fa-plus"></i> NUEVO PROVEEDOR PRODUCTO
                        </button>
                    </div>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Razón Social</th>
                                    <th>Documento</th>
                                    <th>Teléfono</th>
                                    <th>Dirección</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($terceros as $key=>$item)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$item->razon_social}}</td>
                                    <td>{{$item->ruc}}</td>
                                    <td>{{$item->telefono}}</td>
                                    <td>{{$item->direccion}}</td>
                                    <td>
                                        <button type="button" class="btn btn-warning"  data-toggle="modal" data-target="#editarTercero{{$item->id}}">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#eliminarTercero{{$item->id}}">
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
    @include('pages.proproducto.modals.register_cliente')
    @include('pages.proproducto.modals.editar_cliente')
    @include('pages.proproducto.modals.eliminar_cliente')
</div>
@endsection
@section('js')
@include('layouts.js')

@endsection