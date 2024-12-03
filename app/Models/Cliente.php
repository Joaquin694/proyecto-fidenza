<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['nombre', 'telefono', 'email'];

    public function ventas()
    {
        return $this->hasMany(VentaCliente::class);
    }
}
