<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    public function characters()
    {
        return $this->belongsToMany(Character::class);
    }

    public function value()
    {
        return $this->pivot->value;
    }
}
