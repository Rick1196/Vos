<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    public function tipoDeResidente(){
        return $this->belongsTo(TypeOfResident::class, 'type_of_resident_id');
    }

    public function esFamiliar(){
        return $this->belongsTo(Resident::class, 'relatives_id');
    }

    public function isOwner(){
        return $this->hasMany(House::class);
    }
}
