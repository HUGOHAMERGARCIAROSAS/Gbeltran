@extends('layouts.layout')
@section('css')
@include('layouts.css')

@endsection
@section('content')
<div class="container-fluid">
    @include('layouts.welcome')
    <div class="row mb-2">
        <div class="col-sm-6">
          <h2 class="m-0">PROGRAMACIÓN DE UNIDAD {{str_pad($order[0]->id, 6, "0", STR_PAD_LEFT)}}</h2>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('home') }}">Inicio</a></li>
            <li class="breadcrumb-item active"><a href="{{route('viajes.index')}}">Programación de unidades</a></li>
          </ol>
        </div>
      </div>
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card" style="background: #FFFFFF">
                <div class="header" >
                    <div style="float: left">
                        <h2>ABASTECIMIENTO DE COMBUSTIBLE</h2>
                    </div>
                    <div style="float: right">
                       
                    </div>
                </div>
                <div class="body">
                    <form method="POST" action="{{route('abastecimientoCombustible.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <input type="text" name="orden_trabajo_id" value="{{ $order[0]->id }}" style="display: none">
                            <div class="col-md-4">
                                <label>Lugar</label>
                                <select class=" form-control form-control-sm" name="lugar" id="selectLugar">
                                    @foreach($lugar as $key => $item)                   
                                        <option value="{{ $item->id }}">{{ $item->nombre }}</option>                       
                                    @endforeach
                                </select>
                                
                            </div>
                            <div class="col-md-4">
                                    <label>Galones</label>
                                    <input type="text" class=" form-control form-control-sm" name="galones" id="galones">                 
                            </div>
                            <div class="col-md-4">
                                <label>Kilometros</label>
                                <input type="text" class=" form-control form-control-sm" name="kilometros" id="kilometros">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Precio</label>
                                <input type="text" class=" form-control form-control-sm" name="precio" id="precio">
                            </div>
                            <div class="col-md-4">
                                <label>Nº de Ticket</label>
                                <input type="text" class=" form-control form-control-sm" name="nro_ticket" id="nro_ticket">
                            </div>
                            <div class="col-md-4">
                                <label>Ticket</label>
                                <input type="file" class="form-control form-control-sm" name="ticket" id="ticket">
                            </div>
                        </div>
                            <div class=" align-center">
                                <button type="submit"  class="btn btn-sm btn-primary">AGREGAR</button>
                            </div>
                    </form>
                    
                    <div class="table-responsive">
                        <table class="table table-bordered" id="tableAbastecimiento">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Lugar</th>
                                    <th>Galones</th>
                                    <th>Kilometros</th>
                                    <th>Precio</th> 
                                    <th>Nro Ticket</th> 
                                    <th>Ticket</th> 
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody id="bodytableAbastecimiento">
                                @foreach($order[0]->combustible as $combustible)
                                    @if($combustible->activo==1)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $combustible->lugar->nombre }}</td>
                                        <td>{{ $combustible->galones }}</td>
                                        <td>{{ $combustible->kilometros }}</td>
                                        <td>{{ $combustible->precio }}</td>
                                        <td>{{ $combustible->nro_ticket }}</td>
                                        <td><a download="{{ $combustible->ticket }}" class="btn btn-primary" >
                                                <i class=" fa fa-download"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <form style="display: inline-block;" method="POST" action="{{route('combustible.update1',$combustible->id)}}">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                        
                                    </tr>
                                    @endif
                                    
                                @endforeach
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
    
</script>

@endsection