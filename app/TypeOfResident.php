<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeOfResident extends Model
{
    protected $fillable = [
        'type',
        'description',
    ];
    public function residentes(){
        return $this->hasMany(Resident::class);
    }
}
