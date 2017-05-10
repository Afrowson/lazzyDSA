<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Armor extends Model
{
    public function characters()
    {
        return $this->belongsToMany(Character::class);
    }

    public function getNameAttribute($value)
    {
        if (isset($this->modifiers['name']))
            $value = $value . $this->modifiers['name'];

        return $value;
    }

    public function getRulesAttribute($value)
    {
        if (isset($this->modifiers['rules']))
            $value = $value . $this->modifiers['rules'];

        return $value;
    }


    public function getWeightAttribute($value)
    {
        if (isset($this->modifiers['weight']))
            $value = $value + $this->modifiers['weight'];

        return $value;
    }

    public function getRSAttribute($value)
    {
        if (isset($this->modifiers['RS']))
            $value = $value + $this->modifiers['RS'];

        return $value;
    }

    public function getBEAttribute($value)
    {
        if (isset($this->modifiers['BE']))
            $value = $value + $this->modifiers['BE'];

        return $value;
    }

    public function getModifiersAttribute()
    {

        $modifiers = explode(',', $this->pivot->modifiers);
        $keys = explode(',', $this->pivot->keys);

        return array_combine($keys, $modifiers);
    }
}
