<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fightingtalent extends Model
{
    protected $fillable = [
        'name',
        'description',
        'specials',
        'primary_skill',
        'primary_skill_2',
        'increase_factor',
        'melee',
    ];
    
    protected $hidden = ['created_at', 'updated_at'];
    
    public function characters()
    {
        return $this->belongsToMany(Character::class);
    }
    
    public static $fields = [
        
        
        'name'            =>
            [
                'key'        => 'name',
                'name'       => 'Name',
                'type'       => 'string',
                'required'   => true,
                'validation' => 'required|max:191',
            ],
        'description'     =>
            [
                'key'        => 'description',
                'name'       => 'Beschreibung',
                'type'       => 'text',
                'required'   => false,
                'validation' => 'nullable',
            
            ],
        'specials'        =>
            [
                'key'        => 'specials',
                'name'       => 'Sonderheiten',
                'type'       => 'text',
                'required'   => false,
                'validation' => 'nullable',
            
            ],
        'primary_skill'   =>
            [
                'key'        => 'primary_skill',
                'name'       => 'Eigenschaft 1',
                'type'       => 'string',
                'required'   => true,
                'validation' => 'string|required',
            
            ],
        'primary_skill_2' =>
            [
                'key'        => 'primary_skill_2',
                'name'       => 'Eigenschaft 2',
                'type'       => 'string',
                'required'   => false,
                'validation' => 'string|nullable',
            
            ],
        'increase_factor' =>
            [
                'key'        => 'increase_factor',
                'name'       => 'Steigerungsfakor',
                'type'       => 'integer',
                'required'   => true,
                'validation' => 'required|integer|min:1|max:3',
            ],
        'melee'           =>
            [
                'key'        => 'melee',
                'name'       => 'Nahkampf',
                'type'       => 'integer',
                'required'   => true,
                'validation' => 'required|integer|min:0|max:1',
            ],
    ];
}
