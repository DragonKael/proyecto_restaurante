<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;
    protected $fillable=[
      'provider',
      'nombre_contacto',
      'phone',
      'document',
      'document_type',
      'address',
      'email',
      'status',
      'time_open',
      'time_close'
    ];
    //relacion, un proveedor a variaos pedidos
    public function pedidos()
    {
        return $this->hasMany('App\Models\Pedido');
    }
}
