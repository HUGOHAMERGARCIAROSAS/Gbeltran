<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saldo extends Model
{
    protected $table='saldo';
    protected $fillable=[
        'cuenta','debe','deposito','forma','haber','saldo','orden_id'
    ];
}
