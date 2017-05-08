<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rangeweapon extends Model
{
    public function characters()
    {
        return $this->belongsToMany(Character::class);
    }

    public function getModifiersAttribute()
    {

        $modifiers = explode(',', $this->pivot->modifiers);
        $keys = explode(',', $this->pivot->keys);

        return array_combine($keys, $modifiers);
    }
}
