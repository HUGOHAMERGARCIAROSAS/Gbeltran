<?php

namespace App;

use Facade\Ignition\Tabs\Tab;
use Illuminate\Database\Eloquent\Model;

class Gastos extends Model
{
    protected $table='gastos';
    protected $fillable=[
        'tipo','descripcion','estado'
    ];
}
