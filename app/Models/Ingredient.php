<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;
    protected $fillable=[
      'presentation',
      'brand',
      'type',
      'name',
      'measure',
      'price'
    ];
    //relacion, un ingrediente a varios ingrediente por pedido
    public function ingredient_x_Products()
    {
        return $this->hasMany('App\Models\Ingredient_x_Product');
    }
    //relacion, un ingrediente a varios ingrediente por producto
    public function ingredients()
    {
        return $this->hasMany('App\Models\Product');
    }
}
