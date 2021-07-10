<?php

namespace App\Http\Controllers;

use App\gastosOperativos;
use Illuminate\Http\Request;

class GastosOperativosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.gastosOperativos.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\gastosOperativos  $gastosOperativos
     * @return \Illuminate\Http\Response
     */
    public function show(gastosOperativos $gastosOperativos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\gastosOperativos  $gastosOperativos
     * @return \Illuminate\Http\Response
     */
    public function edit(gastosOperativos $gastosOperativos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\gastosOperativos  $gastosOperativos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gastosOperativos $gastosOperativos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\gastosOperativos  $gastosOperativos
     * @return \Illuminate\Http\Response
     */
    public function destroy(gastosOperativos $gastosOperativos)
    {
        //
    }
}
