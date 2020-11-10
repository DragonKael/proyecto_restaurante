<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    //campos obligatorios
    protected $fillable=[
        'name',
        'last_name',
        'phone',
        'gender',
        'email',
        'document',
        'document_type',
        'status'
    ];
    protected $hidden = [
        'phone',
        'email',
        'document',
        'document_type'
    ];
    // relacion, un cliente a varias reservas
    public function reservations()
    {
        return $this->hasMany('App\Models\Reservation');
    }
}
