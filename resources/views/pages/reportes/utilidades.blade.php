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
                        <h2>UTILIDADES</h2>
                    </div>

                </div>
                <div class="body">
                    <div class="row">
                        <div class="col-md-3">
                            <label>Cliente</label>
                            <select class="form-control form-control-sm"></select>
                        </div>
                        <div class="col-md-3">
                            <label>Fecha Desde</label> 
                            <input type="date" class="form-control form-control-sm">
                        </div>
                        <div class="col-md-3">
                            <label>Fecha Hasta</label> 
                            <input type="date" class="form-control form-control-sm">
                        </div>
                        <div class="col-md-3">
                            <button class="btn btn-warning btn-sm"><i class="fas fa-search"></i></button>
                            <button class="btn btn-success btn-sm"><i class=""></i></button>
                            <button class="btn border-secondary btn-sm"><i></i></button>
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
