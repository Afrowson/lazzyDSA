<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rangeweapon extends Model
{
    protected $fillable = [
        'name',
        'rules',
        'fightingtalent_id',
        'reload_time',
        'munition_type',
        'dice',
        'bonus_dmg',
        'weight',
        'range_one',
        'range_two',
        'range_three',
    ];
    protected $hidden = ['created_at', 'updated_at'];
    
    public function characters()
    {
        return $this->belongsToMany(Character::class);
    }
    
    public function getIdAttribute($value)
    {
        if (isset($this->pivot)) {
            $value = $this->pivot->id;
        }
        
        return $value;
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
    
    public function getFightingtalentIdAttribute($value)
    {
        if (isset($this->modifiers['fightingtalent_id'])) {
            $value = $this->modifiers['fightingtalent_id'];
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
    
    public function getMunitionTypeAttribute($value)
    {
        if (isset($this->modifiers['munition_type'])) {
            $value = $value + $this->modifiers['munition_type'];
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
    
    public function getWeightAttribute($value)
    {
        if (isset($this->modifiers['weight'])) {
            $value = number_format($value + $this->modifiers['weight'], 2);
        }
        
        return $value;
    }
    
    public function getRangeOneAttribute($value)
    {
        if (isset($this->modifiers['range_one'])) {
            $value = $value + $this->modifiers['range_one'];
        }
        
        return $value;
    }
    
    public function getRangeTwoAttribute($value)
    {
        if (isset($this->modifiers['range_two'])) {
            $value = $value + $this->modifiers['range_two'];
        }
        
        return $value;
    }
    
    public function getRangeThreeAttribute($value)
    {
        if (isset($this->modifiers['range_three'])) {
            $value = $value + $this->modifiers['range_three'];
        }
        
        return $value;
    }
    
    //creates an Array with all available keys and the
    //coresponding value of anny modification on this Object
    public function getModifiersAttribute()
    {
        if ($this->pivot) {
            $modifiers = explode(',', $this->pivot->modifiers);
            $keys = explode(',', $this->pivot->keys);
    
            return array_combine($keys, $modifiers);
        }
    
        return null;
    }
    
    public static $fields = [
    
        'name' => [
            'key'        => 'name',
            'name'       => 'Name',
            'type'       => 'string',
            'required'   => true,
            'validation' => 'required',
        ],
    
        'rules' => [
            'key'        => 'rules',
            'name'       => 'Regeln',
            'type'       => 'string',
            'required'   => false,
            'validation' => 'nullable',
        ],
    
        'fightingtalent_id' => [
            'key'        => 'fightingtalent_id',
            'name'       => 'Kampffertigkeit',
            'type'       => 'integer',
            'required'   => true,
            'validation' => 'required|integer',
        ],
    
        'reload_time' => [
            'key'        => 'reload_time',
            'name'       => 'Nachladezeit',
            'type'       => 'integer',
            'required'   => true,
            'validation' => 'required|integer|min:1',
        ],
    
        'munition_type' => [
            'key'        => 'munition_type',
            'name'       => 'Munitionsart',
            'type'       => 'string',
            'required'   => false,
            'validation' => 'nullable',
        ],
    
        'dice' => [
            'key'        => 'dice',
            'name'       => 'Würfel',
            'type'       => 'integer',
            'required'   => true,
            'validation' => 'required|integer|min:1',
        ],
    
        'bonus_dmg' => [
            'key'        => 'bonus_dmg',
            'name'       => 'Bonusschaden',
            'type'       => 'integer',
            'required'   => true,
            'validation' => 'required|integer',
        ],
    
        'weight' => [
            'key'        => 'weight',
            'name'       => 'Gewicht',
            'type'       => 'decimal',
            'required'   => true,
            'validation' => 'required|numeric',
        ],
    
        'range_one' => [
            'key'        => 'range_one',
            'name'       => 'Kurze Distanz',
            'type'       => 'integer',
            'required'   => true,
            'validation' => 'required|integer',
        ],
    
        'range_two' => [
            'key'        => 'range_two',
            'name'       => 'Mittlere Distanz',
            'type'       => 'integer',
            'required'   => true,
            'validation' => 'required|integer',
        ],
    
        'range_three' => [
            'key'        => 'range_three',
            'name'       => 'Lange Distanz',
            'type'       => 'integer',
            'required'   => true,
            'validation' => 'required|integer',
        ],
    
    ];
}
