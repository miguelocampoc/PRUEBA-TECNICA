<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vehiculos extends Model
{
    public $fillable = [
        'id','placa','color','marca','tipo_vehiculo','propietario','conductor_id','propietario_id','created_at','updated_at'
     ];

    protected $table = 'vehiculos';  
    public function persona(){
        return $this->belongsTo('App\personas','conductor_id');
    }
    
}
