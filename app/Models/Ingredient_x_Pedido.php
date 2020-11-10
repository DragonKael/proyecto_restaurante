<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient_x_Pedido extends Model
{
    use HasFactory;
    protected $fillable=[
      'id_ingredient',
      'id_pedido',
      'quantity',
      'observations',
      'expiration_date'
    ];
    //relacion, un Ingredient_x_Pedido a un pedido
    public function pedidos()
    {
        return $this->belongsTo('App\Models\Pedido');
    }
    //relacion, un Ingredient_x_Pedido a un ingrediente
    public function ingredients()
    {
        return $this->belongsTo('App\Models\Ingredient');
    }
}
