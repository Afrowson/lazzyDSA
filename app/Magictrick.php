<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Magictrick extends Model
{
    public function characters()
    {
        return $this->belongsToMany(Character::class);
    }
}
