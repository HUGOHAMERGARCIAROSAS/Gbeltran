<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TerciarioProveedor extends Model
{
    protected $table = 'terciarias_proveedor';
    protected $fillable = [
        'tipo', 'razon_social', 'ruc','telefono',
        'direccion', 'activo'
    ];
}
