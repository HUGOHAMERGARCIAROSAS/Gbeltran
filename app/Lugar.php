<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lugar extends Model
{
    protected $table='lugar';
    protected $fillable=[
        'tipo','nombre','estado'
    ];
}
