<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Talent extends Model
{
    protected $fillable = ['name', 'description', 'group', 'first_skill', 'second_skill', 'third_skill', 'increase_factor'];
    protected $hidden = ['created_at', 'updated_at'];

    protected $table = 'talents';
    
    public function character()
    {
        $this->belongsToMany(Character::class);
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
    
        'group' => [
            'key'        => 'group',
            'name'       => 'Gruppe',
            'type'       => 'string',
            'required'   => true,
            'validation' => 'required',
        ],
    
        'first_skill' => [
            'key'        => 'first_skill',
            'name'       => 'Eigenschaft 1',
            'type'       => 'sting',
            'required'   => true,
            'validation' => 'required',
        ],
    
        'second_skill' => [
            'key'        => 'second_skill',
            'name'       => 'Eigenschaft 1',
            'type'       => 'sting',
            'required'   => true,
            'validation' => 'required',
        ],
    
        'third_skill' => [
            'key'        => 'third_skill',
            'name'       => 'Eigenschaft 1',
            'type'       => 'sting',
            'required'   => true,
            'validation' => 'required',
        ],
    
        'increse_facor' => [
            'key'        => 'increse_facor',
            'name'       => 'Steigerungsfaktor',
            'type'       => 'integer',
            'required'   => true,
            'validation' => 'required|integer|min:0|max:5',
        ],
    ];
}
