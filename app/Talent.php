<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Talent extends Model
{
    public function character()
    {
        $this->belongsToMany(Character::class);
    }
}
