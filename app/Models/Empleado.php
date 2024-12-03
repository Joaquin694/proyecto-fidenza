<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable = ['nombre', 'puesto', 'salario'];

    public function usuario()
    {
        return $this->hasOne(Usuario::class);
    }

    public function ventas()
    {
        return $this->hasMany(VentaCliente::class);
    }

    public function compras()
    {
        return $this->hasMany(CompraProveedor::class);
    }
}
