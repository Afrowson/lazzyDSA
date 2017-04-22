<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lettering extends Model
{
    public function character_letterings()
    {
        return$this->hasMany(CharacterLettering::class);
    }
}
