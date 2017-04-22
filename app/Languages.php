<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class languages extends Model
{
    public function character_languages()
    {
        return $this->hasMany(CharacterLanguages::class);
    }
}
