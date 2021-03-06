<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialfightingtalent extends Model
{
    protected $fillable = ['name', 'description', 'rules', 'level', 'ap'];
    protected $hidden = ['created_at', 'updated_at'];
    
    public function characters()
    {
        return $this->belongsToMany(Character::class);
    }
    
    public static $fields = [
    
        'name' => [
            'key'        => 'name',
            'name'       => 'Name',
            'type'       => 'string',
            'required'   => true,
            'validation' => 'required',
        ],
    
        'description' => [
            'key'        => 'description',
            'name'       => 'Beschreibung',
            'type'       => 'string',
            'required'   => false,
            'validation' => 'nullable',
        ],
    
        'rules' => [
            'key'        => 'rules',
            'name'       => 'Regeln',
            'type'       => 'string',
            'required'   => false,
            'validation' => 'nullable',
        ],
    
        'level' => [
            'key'        => 'level',
            'name'       => 'Level',
            'type'       => 'integer',
            'required'   => false,
            'validation' => 'nullable|integer',
        ],
    
        'ap' => [
            'key'        => 'ap',
            'name'       => 'AP',
            'type'       => 'integer',
            'required'   => false,
            'validation' => 'nullable|integer',
        ],
    ];
}
