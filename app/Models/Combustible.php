<?php

namespace App\Models;

use App\Lugar;
use Illuminate\Database\Eloquent\Model;

class Combustible extends Model
{
    protected $table = 'combustibles';
    protected $fillable = [
        'lugar_id', 'galones', 'precio','nro_ticket',
        'ticket','orden_trabajo_id','activo','kilometros'
    ];
    public function orders(){
        return $this->belongsTo(Order::class,'orden_trabajo_id');
    }
    public function lugar(){
        return $this->belongsTo(Lugar::class);
    }
}
