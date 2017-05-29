<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialmagictalent extends Model
{
    public function characters()
    {
        return $this->belongsToMany(Character::class);
    }
}
