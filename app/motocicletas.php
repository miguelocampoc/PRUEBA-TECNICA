<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class motocicletas extends Model
{
    public function motocicletas(){
        return $this->hasMany(motocicletas::class);
    }
}
