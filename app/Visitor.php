<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $fillable = [
        'type_visitor',
        'first_name',
        'last_name',
        'phone',
        'credential',
        'conveyance'
    ];

    public function tipoDeVisitante(){
        return $this->belongsTo(TypeOfVisitor::class, 'type_visitor_id');
    }
}
