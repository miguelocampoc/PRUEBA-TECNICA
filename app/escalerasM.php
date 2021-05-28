<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class escalerasM extends Model
{
    public $fillable = [
        'id_user', 'tipo','codigo_serie','estado','created_at','updated_at'
     ];
     protected $table = 'escaleras';  
}
