<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_serie';

    protected $fillable = [
        'nombre_persona', 'precio_pago', 'documento_persona',
        'fecha_facturacion', 'nombre_empresa', 'razon_pago',
        'celular', 'created_at', 'updated_at'
    ];

}
