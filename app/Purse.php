<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purse extends Model
{
    public function character()
    {
        return $this->hasOne(Character::class);
    }
}
