<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CharacterTalents extends Model
{
    public function character()
    {
    return $this->belongsTo(Character::class);
    }

    public function talent()
    {
        return $this->belongsTo(Talents::class);
    }
}
