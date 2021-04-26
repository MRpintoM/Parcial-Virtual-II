<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table='departamento';
    public $timestamps=false;
    protected $fillable=[
        'iddepartamento', 'de_departamento'
    ];

    protected $primaryKey='iddepartamento';
}
