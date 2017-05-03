<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Handicap extends Model
{
    public function characters()
    {
        $this->belongsToMany(Character::class);
    }
}
