<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;
    protected $fillable=[
      'id_branch',
      'capacity',
      'status'
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
