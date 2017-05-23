<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialmagictalent extends Model
{
    public function characters()
    {
        return $this->belongsToMany(Character::class);
    }

    public function data()
    {
        return $this->pivot('data');
    }

    public function value()
    {
        return $this->pivot('value');
    }

}
