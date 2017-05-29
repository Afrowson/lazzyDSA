<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialfightingtalent extends Model
{
    public function characters()
    {
        return $this->belongsToMany(Character::class);
    }
}
