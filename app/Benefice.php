<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Benefice extends Model
{
    public function characters()
    {
        $this->belongsToMany(Character::class);
    }
}
