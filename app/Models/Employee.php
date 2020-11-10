<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    //campos obligatorios
    protected $fillable=[
        'name',
        'last_name',
        'position',
        'salary',
        'email',
        'admission_date',
        'status',
        'job',
        'boss',
        'document',
        'document_type',
        'phone',
        'gender',
        'address',
        'id_branch'
    ];
    protected $hidden = [
        'phone',
        'email',
        'document',
        'document_type'
    ];
    // relacion, un empleado a varios registro de trabajo
    public function work_day_records()
    {
        return $this->hasMany('App\Models\Work_day_records');
    }
    // relacion, un empleado a una sucursal
    public function work_day_records()
    {
        return $this->belongsTo('App\Models\Work_day_records');
    }
    // relacion, un emplado a un superior
    public function employees()
    {
      return $this->belongsTo('App\Models\Employee');
    }
    // relacion, un superior a varios empleados
    public function bosses()
    {
        return $this->hasMany('App\Models\Employee');
    }
}
