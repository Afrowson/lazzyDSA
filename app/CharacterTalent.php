<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CharacterTalent extends Model
{
    public function character()
    {
    return $this->belongsTo(Character::class);
    }

    public function talent()
    {
        return $this->belongsTo(Talent::class);
    }
}
