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
        'range_1',
        'range_2',
        'range_3',
    ];
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
    
    public static $fields = [
        'name'              => [
            'key'        => 'name',
            'name'       => 'Name',
            'type'       => 'string',
            'reqired'    => true,
            'validation' => 'required',
        ],
        'rules'             => [
            'key'        => 'rules',
            'name'       => 'Regeln',
            'type'       => 'string',
            'reqired'    => false,
            'validation' => 'nullable',
        ],
        'fightingtslent_id' => [
            'key'        => 'fightingtslent_id',
            'name'       => 'Kampffertigkeit',
            'type'       => 'integer',
            'reqired'    => true,
            'validation' => 'required|integer',
        ],
        'reload_time'       => [
            'key'        => 'reload_time',
            'name'       => 'Nachladezeit',
            'type'       => 'integer',
            'reqired'    => true,
            'validation' => 'required|integer|min:1',
        ],
        'munition_type'     => [
            'key'        => 'munition_type',
            'name'       => 'Munitionsart',
            'type'       => 'string',
            'required'   => false,
            'validation' => 'nullable',
        ],
        'dice'              => [
            'key'        => 'dice',
            'name'       => 'Würfel',
            'type'       => 'integer',
            'reqired'    => true,
            'validation' => 'required|integer|min:1',
        ],
        'bonus_dmg'         => [
            'key'        => 'bonus_dmg',
            'name'       => 'Bonusschaden',
            'type'       => 'integer',
            'reqired'    => true,
            'validation' => 'required|integer',
        ],
        'weight'            => [
            'key'        => 'weight',
            'name'       => 'Gewicht',
            'type'       => 'decimal',
            'reqired'    => true,
            'validation' => 'required|numeric',
        ],
        'range_1'           => [
            'key'        => 'range_1',
            'name'       => 'Kurze Distanz',
            'type'       => 'integer',
            'reqired'    => true,
            'validation' => 'required|integer',
        ],
        'range_2'           => [
            'key'        => 'range_2',
            'name'       => 'Mittlere Distanz',
            'type'       => 'integer',
            'reqired'    => true,
            'validation' => 'required|integer',
        ],
        'range_3'           => [
            'key'        => 'range_3',
            'name'       => 'Lange Distanz',
            'type'       => 'integer',
            'reqired'    => true,
            'validation' => 'required|integer',
        ],
    
    ];
}
