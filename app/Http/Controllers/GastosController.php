<?php

namespace App\Http\Controllers;

use App\Gastos;
use Illuminate\Http\Request;

class GastosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gastos=Gastos::where('tipo','1')->where('estado','1')->get();
        return view('pages.gastos.index')->with(compact('gastos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gasto=new Gastos();
        $gasto->tipo=$request->tipo;
        $gasto->descripcion=$request->nombre;
        $gasto->estado=1;
        $gasto->save();
        $gastos=Gastos::where('tipo',$request->tipo)->where('estado','1')->get();
        return view('pages.gastos.index')->with(compact('gastos'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gastos  $gastos
     * @return \Illuminate\Http\Response
     */
    public function show(Gastos $gastos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gastos  $gastos
     * @return \Illuminate\Http\Response
     */
    public function edit(Gastos $gastos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gastos  $gastos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $gasto=Gastos::findOrFail($id);
        $gasto->tipo=$request->tipo;
        $gasto->descripcion=$request->nombre;
        $gasto->save();
        $gastos=Gastos::where('tipo',$request->tipo)->where('estado','1')->get();
        return view('pages.gastos.index')->with(compact('gastos'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gastos  $gastos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
    public function TipoGastos(Request $request){
        $tipo=$request->selectTipoGasto;
        $gastos=Gastos::where('tipo',$tipo)->where('estado','1')->get();
        return view('pages.gastos.index')->with(compact('gastos'));
    }
    public function update1(Request $request,$id)
    {
        $gasto = Gastos::findOrFail($id);
        $gasto->estado  = 0;
        $gasto->save();
        $gastos=Gastos::where('tipo',$gasto->tipo)->where('estado','1')->get();
        return view('pages.gastos.index')->with(compact('gastos'));
        
    }
    public function gastosAll(){
        $gastos=Gastos::where('tipo','1')->where('estado','1')->get();
        return $gastos;
    }
    public function GastosxTipo($tipo){
        $gastos=Gastos::where('tipo',$tipo)->where('estado','1')->get();
        return $gastos;
    }
}
