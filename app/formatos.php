<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class formatos extends Model
{
    public $fillable = [
        'id_user', 'categoria','attributes','created_at','updated_at'
     ];
    
}
