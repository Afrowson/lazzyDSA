<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shield extends Model
{
    protected $fillable = ['name', 'rules', 'fightingtalent_id', 'skill', 'ss', 'dice', 'bonus_dmg', 'weight', 'at_mod', 'pa_mod', 'reach'];
    protected $hidden = ['created_at', 'updated_at'];
    
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
            $value = $this->modifiers['name'];
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
    
    public function getSkillAttribute($value)
    {
        
        if (isset($this->modifiers['skill'])) {
            $value = $this->modifiers['skill'];
        }
        
        return $value;
    }
    
    public function getSsAttribute($value)
    {
        if (isset($this->modifiers['ss'])) {
            $value = $value + $this->modifiers['ss'];
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
    
    public function getAtModAttribute($value)
    {
        if (isset($this->modifiers['at_mod'])) {
            $value = $value + $this->modifiers['at_mod'];
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
//            case 1: $value = 'kurz';
//            case 2: $value = 'mittel';
//            case 3: $value = 'lang';
        
        return $value;
    }
    
    //creates an Array with all available keys and the
    //coresponding value of anny modification on this Object
    protected function getModifiersAttribute()
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
    
        'skill' => [
            'key'        => 'skill',
            'name'       => 'Eigenschaft',
            'type'       => 'string',
            'required'   => true,
            'validation' => 'required|min:2',
        ],
    
        'ss' => [
            'key'        => 'ss',
            'name'       => 'Schadensschwelle',
            'type'       => 'integer',
            'required'   => false,
            'validation' => 'nullable|integer',
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
    
        'reach' => [
            'key'        => 'reach',
            'name'       => 'Reichweite',
            'type'       => 'integer',
            'required'   => true,
            'validation' => 'required|integer|min:1|max:3',
        ],
    
        'at_mod' => [
            'key'        => 'at_mod',
            'name'       => 'AT Modifikator',
            'type'       => 'integer',
            'required'   => true,
            'validation' => 'required|integer',
        ],
    
        'pa_mod' => [
            'key'        => 'pa_mod',
            'name'       => 'PA Modifikator',
            'type'       => 'integer',
            'required'   => true,
            'validation' => 'required|integer',
        ],
    
    ];
}
