<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
      'name',
      'price',
      'description',
      'category'
    ];
    //relacion, un producto a una orden
    public function table()
    {
        return $this->belongsTo('App\Models\Order');
    }
    //relacion, un producto a varios ingrdientes por producto
    public function ingredients_x_product()
    {
        return $this->hasMany('App\Models\Ingredient_x_Product');
    }
}
