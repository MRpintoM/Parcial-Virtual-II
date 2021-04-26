<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table='cliente';
    public $timestamps=false;
    protected $fillable=[
        'nit','nombre','fecha_de_nacimiento','edad','correo','telefono','departamento_iddepartamento',
        'categoria_idcategoria','genero_idgenero'

    ];

    protected $primaryKey='idcliente';
}
