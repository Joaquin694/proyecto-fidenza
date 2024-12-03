<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompraProveedor extends Model
{
    protected $fillable = ['proveedor_id', 'empleado_id', 'fecha', 'total'];

    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class);
    }

    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }

    public function detalles()
    {
        return $this->hasMany(DetalleCompra::class);
    }
}
