<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CharacterLettering extends Model
{
    public function characters()
    {
        return $this->belongsTo(Character::class);
    }

    public function languages()
    {
        return $this->belongsTo(Languages::class);
    }
}
