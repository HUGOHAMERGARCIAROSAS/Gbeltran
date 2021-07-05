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
                        <h2>PRODUCTOS</h2>
                    </div>
                    <div style="float: right">
                        <button type="button" class="btn btn-warning" style="height: 40px" data-toggle="modal" data-target="#registerProducto">
                            <i class="fa fa-plus"></i> NUEVO PRODUCTO
                        </button>
                    </div>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>Tipo</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($productos as $key=>$item)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$item->nombre}}</td>
                                    <td>{{$item->descripcion}}</td>
                                    @if($item->tipo==1)
                                    <td>A Enviar</td>
                                    @else
                                    <td>A Comprar</td>
                                    @endif
                                    <td>
                                        <button type="button" class="btn btn-warning"  data-toggle="modal" data-target="#editarProducto{{$item->id}}">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#eliminarProducto{{$item->id}}">
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
    @include('pages.productos.modals.register_cliente')
    @include('pages.productos.modals.editar_cliente')
    @include('pages.productos.modals.eliminar_cliente')
</div>
@endsection
@section('js')
@include('layouts.js')

@endsection