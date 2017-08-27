<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rangeweapon extends Model
{
    public function characters()
    {
        return $this->belongsToMany(Character::class);
    }
    
    public function getNameAttribute($value)
    {
        if (isset($this->modifiers['name'])) {
            $value = $value . $this->modifiers['name'];
        }
        
        return $value;
    }
    
    public function getRulesAttribute($value)
    {
        if (isset($this->modifiers['rules'])) {
            $value = $value . $this->modifiers['rules'];
        }
        
        return $value;
    }
    
    public function getDiceAttribute($value)
    {
        if (isset($this->modifiers['dice'])) {
            $value = $value + $this->modifiers['dice'];
        }
        
        return $value;
    }
    
    public function getBonusDmgAttribute($value)
    {
        if (isset($this->modifiers['bonus_dmg'])) {
            $value = $value + $this->modifiers['bonus_dmg'];
        }
        
        return $value;
    }
    
    public function getReloadTimeAttribute($value)
    {
        if (isset($this->modifiers['reload_time'])) {
            $value = $value + $this->modifiers['reload_time'];
        }
        
        return $value;
    }
    
    public function getMunitionTzpeAttribute($value)
    {
        if (isset($this->modifiers['munition_type'])) {
            $value = $value + $this->modifiers['munition_type'];
        }
        
        return $value;
    }
    
    public function getWeightAttribute($value)
    {
        if (isset($this->modifiers['weight'])) {
            $value = number_format($value + $this->modifiers['weight'], 2);
        }
        
        return $value;
    }
    
    public function getRange1Attribute($value)
    {
        if (isset($this->modifiers['range1'])) {
            $value = $value + $this->modifiers['range1'];
        }
        
        return $value;
    }
    
    public function getRange2Attribute($value)
    {
        if (isset($this->modifiers['range2'])) {
            $value = $value + $this->modifiers['range2'];
        }
        
        return $value;
    }
    
    public function getRange3Attribute($value)
    {
        if (isset($this->modifiers['range3'])) {
            $value = $value + $this->modifiers['range3'];
        }
        
        return $value;
    }
    
    public function getModifiersAttribute()
    {
        if ($this->pivot) {
            $modifiers = explode(',', $this->pivot->modifiers);
            $keys = explode(',', $this->pivot->keys);
        
            return array_combine($keys, $modifiers);
        }
    }
}
