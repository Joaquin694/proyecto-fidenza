<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VentaCliente extends Model
{
    protected $fillable = ['cliente_id', 'empleado_id', 'fecha', 'total'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }

    public function detalles()
    {
        return $this->hasMany(DetalleVenta::class);
    }
}
