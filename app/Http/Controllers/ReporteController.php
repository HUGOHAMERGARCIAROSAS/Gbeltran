<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReporteController extends Controller
{
    public function reporteUtilidades()
    {
       return view('pages.reportes.utilidades');
    }
}
