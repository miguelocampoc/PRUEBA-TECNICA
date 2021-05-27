<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class MotocicletasM extends Model
{
    public $fillable = [
        'id_user', 'id_propietario','placa','marca','modelo','vigenciatecnicomecanica','vigenciasoat','created_at','updated_at'
     ];
     protected $table = 'motocicletas';  
   
}
