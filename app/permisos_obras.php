<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class permisos_obras extends Model
{
    public $fillable = [
        'id_user', 'estado','created_at','updated_at','evidencias','attributes'
     ]; 
}
