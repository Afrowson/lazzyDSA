<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Handicap extends Model
{
    protected $fillable = ['name', 'description', 'rules', 'level', 'ap_cost'];
    protected $hidden = ['created_at', 'updated_at'];
    
    public function characters()
    {
        $this->belongsToMany(Character::class);
    }
    
    public static $fields = [
        
        
        'name'        =>
            [
                'key'        => 'name',
                'name'       => 'Name',
                'type'       => 'string',
                'required'   => true,
                'validation' => 'required|max:191',
            ],
        'description' =>
            [
                'key'        => 'description',
                'name'       => 'Beschreibung',
                'type'       => 'text',
                'required'   => false,
                'validation' => 'nullable',
            
            ],
        'rules'       =>
            [
                'key'        => 'rules',
                'name'       => 'Regel',
                'type'       => 'text',
                'required'   => false,
                'validation' => 'nullable',
            
            ],
        'level'       =>
            [
                'key'        => 'level',
                'name'       => 'Level',
                'type'       => 'integer',
                'required'   => false,
                'validation' => 'nullable|integer|min:0|max:18',
            
            ],
        'ap_cost'     =>
            [
                'key'        => 'ap_cost',
                'name'       => 'AP',
                'type'       => 'integer',
                'required'   => false,
                'validation' => 'nullable|integer|min:0|max:100',
            
            ],
    ];
    
    
}
