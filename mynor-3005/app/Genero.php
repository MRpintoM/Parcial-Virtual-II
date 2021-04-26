<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $table='genero';
    public $timestamps=false;
    protected $fillable=[
        'idgenero', 'des_genero'
    ];

    protected $primaryKey='idgenero';
}
