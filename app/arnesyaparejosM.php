<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class arnesyaparejosM extends Model
{
    public $fillable = [
        'id_user', 'id_propietario','serial','estado','tipo','created_at','updated_at'
     ];
     protected $table = 'arnesyaparejos';  
}
