<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condominium extends Model
{
    public function hasVigilantes(){
        return $this->hasMany(Vigilant::class);
    }
}
