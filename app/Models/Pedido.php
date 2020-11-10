<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $fillable=[
      'date',
      'status',
      'id_branch',
      'id_provider',
      'modality'
    ];
    //relacion, una pedido a una sucursal
    public function branch()
    {
        return $this->belongsTo('App\Models\Branch');
    }
    //relacion, una pedido a una proveedor
    public function provider()
    {
        return $this->belongsTo('App\Models\Provider');
    }
    // relacion, un pedido a varios ingredientes por pedido
    public function product()
    {
        return $this->hasMany('App\Models\Product');
    }
}
