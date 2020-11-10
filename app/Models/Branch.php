<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    //campos obligatorios
    protected $fillable=[
        'name',
        'location',
        'phone',
        'email',
        'time_open',
        'time_close',
        'document',
        'opening',
        'status'
    ];

    //relacion, una sucursal tiene mucho mesas
    public function tables(){
        return $this->hasMany('App\Models\Table');
    }
    //relacion, una sucursal tiene mucho empleados
    public function employees(){
        return $this->hasMany('App\Models\Employee');
    }
    //relacion, una sucursal tiene mucho empleados
    public function pedidos(){
        return $this->hasMany('App\Models\Pedido');
    }
    //relacion, una sucursal a una empresa
    public function companies(){
        return $this->belongsTo('App\Models\Company');
    }
}
