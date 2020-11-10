<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable=[
      'id_table',
      'id_reserve',
      'id_product',
      'status',
      'modality'
    ];
    //relacion, una orden a una mesa
    public function table()
    {
        return $this->belongsTo('App\Models\Table');
    }
    //relacion, una orden a una reservacion
    public function resevation()
    {
        return $this->belongsTo('App\Models\Reservation');
    }
    //relacion, una orden a varios productos
    public function product()
    {
        return $this->hasMany('App\Models\Product');
    }
}
