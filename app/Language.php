<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    public function character_languages()
    {
        return $this->hasMany(CharacterLanguages::class);
    }
}
