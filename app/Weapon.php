<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weapon extends Model
{
    protected $hidden = ['created_at', 'updated_at'];
    
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
    
    public function getSSAttribute($value)
    {
        if (isset($this->modifiers['SS'])) {
            $value = $value + $this->modifiers['SS'];
        }
        
        return $value;
    }
    
    public function getPaModAttribute($value)
    {
        if (isset($this->modifiers['pa_mod'])) {
            $value = $value + $this->modifiers['pa_mod'];
        }
        
        return $value;
    }
    
    public function getAtModAttribute($value)
    {
        if (isset($this->modifiers['at_mod'])) {
            $value = $value + $this->modifiers['at_mod'];
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
    
    public function getReachAttribute($value)
    {
        if (isset($this->modifiers['reach'])) {
            $value = $value + $this->modifiers['reach'];
        }

//        switch ($value) {
//            case 1:
//                $value = 'kurz';
//                break;
//            case 2:
//                $value = 'mittel';
//                break;
//            case 3:
//                $value = 'lang';
//                break;
//
//        };
    
        return $value;
    }
    
    protected function getModifiersAttribute()
    {
        if ($this->pivot) {
            $modifiers = explode(',', $this->pivot->modifiers);
            $keys = explode(',', $this->pivot->keys);
        
            return array_combine($keys, $modifiers);
        }
    
        return null;
    }
    
}
