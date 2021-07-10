<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gastosOperativos extends Model
{
    protected $table='gastosOperativos';
    protected $fillable=[
        'gasto_id','fecha','importe','factura','lugar'
    ];
}
