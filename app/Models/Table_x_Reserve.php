<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table_x_Reserve extends Model
{
    use HasFactory;
    protected $fillable=[
      'id_table',
      'id_reserve',
      'datails'
    ];
    //relacion, una mesa_x_reserva a una reservacion
    public function reservations()
    {
        return $this->belongsTo('App\Models\Client');
    }
    //relacion, una mesa_x_reserva a una mesa
    public function reservations()
    {
        return $this->belongsTo('App\Models\Table');
    }
}
