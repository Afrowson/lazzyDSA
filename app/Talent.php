<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Talent extends Model
{
    public function character_talents()
    {
        $this->hasMany(CharacterTalent::class);
    }
}
