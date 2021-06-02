<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class permisos_obras extends Model
{
    public $fillable = [
        'id_user', 'estado','titulo','created_at','updated_at','evidencias','attributes'
     ]; 
}
