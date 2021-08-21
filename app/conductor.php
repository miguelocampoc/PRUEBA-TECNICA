<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class conductor extends Model
{
    public $fillable = [
        'id','n_cedula','primer_nombre','segundo_nombre','apellidos','direccion','telefono','ciudad'
     ];

    protected $table = 'conductores';  
}
