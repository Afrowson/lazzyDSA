<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lettering extends Model
{
    public function character_letterings()
    {
        return$this->hasMany(CharacterLettering::class);
    }
}
