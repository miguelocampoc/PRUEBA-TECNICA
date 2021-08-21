<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class personas extends Model
{
    public $fillable = [
        'id','n_cedula','tipo','primer_nombre','segundo_nombre','apellidos','direccion','telefono','ciudad'
     ];

    protected $table = 'personas';  
    public function vehiculos(){
        return $this->hasMany('App\vehiculos');
    }
  
}
