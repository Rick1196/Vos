<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vigilant extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'condominium',
    ];

    public function atCondominium(){
        return $this->belongsTo(Condominium::class, 'condominium_id');
    }
}
