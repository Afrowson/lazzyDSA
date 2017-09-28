<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Talent extends Model
{
    protected $fillable = ['name', 'description', 'group', 'first_skill', 'second_skill', 'third_skill', 'increase_factor'];
    protected $hidden = ['created_at', 'updated_at'];
    
    public function character()
    {
        $this->belongsToMany(Character::class);
    }
    
    public static $fields = [
        'name'          => [
            'key'        => 'name',
            'name'       => 'Name',
            'type'       => 'string',
            'reqired'    => true,
            'validation' => 'required',
        ],
        'description'   => [
            'key'        => 'description',
            'name'       => 'Beschreibung',
            'type'       => 'string',
            'reqired'    => false,
            'validation' => 'nullable',
        ],
        'group'         => [
            'key'        => 'group',
            'name'       => 'Gruppe',
            'type'       => 'string',
            'reqired'    => true,
            'validation' => 'required',
        ],
        'first_skill'   => [
            'key'        => 'first_skill',
            'name'       => 'Eigenschaft 1',
            'type'       => 'sting',
            'reqired'    => true,
            'validation' => 'required',
        ],
        'second_skill'  => [
            'key'        => 'second_skill',
            'name'       => 'Eigenschaft 1',
            'type'       => 'sting',
            'reqired'    => true,
            'validation' => 'required',
        ],
        'third_skill'   => [
            'key'        => 'third_skill',
            'name'       => 'Eigenschaft 1',
            'type'       => 'sting',
            'reqired'    => true,
            'validation' => 'required',
        ],
        'increse_facor' => [
            'key'        => 'increse_facor',
            'name'       => 'Steigerungsfaktor',
            'type'       => 'integer',
            'reqired'    => true,
            'validation' => 'required|integer|min:0|max:5',
        ],
    ];
}
