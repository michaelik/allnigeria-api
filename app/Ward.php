<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    protected $guarded = [];
    public function units(){
        return $this->hasMany(Unit::class);
    }

    public function lga(){
        return $this->belongsTo(Lga::class);
    }

}
