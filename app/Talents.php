<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Talents extends Model
{
    public function character_talents()
    {
        $this->hasMany(CharacterTalents::class);
    }
}
