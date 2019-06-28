<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeOfVisitor extends Model
{
    public function visitantes(){
        return $this->hasMany(Visitor::class);
    }
}
