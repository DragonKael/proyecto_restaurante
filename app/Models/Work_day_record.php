<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work_day_record extends Model
{
    use HasFactory;
    protected $fillable=[
      'start_time',
      'end_time',
      'id_employee',
      'details'
    ];
    //relacion, un registro de jornada a una empleado
    public function employees()
    {
        return $this->belongsTo('App\Models\Employee');
    }
}
