<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable=[
      'id_client',
      'date_time',
      'status'
    ];
    //relacion, una reserva a un cliente
    public function Clients()
    {
        return $this->belongsTo('App\Models\Client');
    }
    //relacion, una reserva a varias mesas por reserva
    public function tables_x_reserves()
    {
        return $this->hasMany('App\Models\Tables_x_Reserve');
    }
    //relacion, una reserva a varias ordenes
    public function orders()
    {
        return $this->hasMany('App\Models\Order');
    }
}
