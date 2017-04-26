<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lettering extends Model
{
    public function characters()
    {
        return $this->belongsToMany(Character::class);
    }
}
