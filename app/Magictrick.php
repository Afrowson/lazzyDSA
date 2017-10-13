<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Magictrick extends Model
{
    protected $fillable = ['name', 'description', 'range', 'duration', 'target', 'trait'];
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
            'validation' => 'required|max:191',
        ],
    
        'description' => [
            'key'        => 'description',
            'name'       => 'Beschreibung',
            'type'       => 'text',
            'required'   => false,
            'validation' => 'nullable',
        ],
    
        'range' => [
            'key'        => 'range',
            'name'       => 'Reichweite',
            'type'       => 'string',
            'required'   => true,
            'validation' => 'required',
        ],
    
        'duration' => [
            'key'        => 'duration',
            'name'       => 'dauer',
            'type'       => 'string',
            'required'   => true,
            'validation' => 'required',
        ],
    
        'target' => [
            'key'        => 'target',
            'name'       => 'Ziel',
            'type'       => 'string',
            'required'   => true,
            'validation' => 'required',
        ],
    
        'trait' => [
            'key'        => 'trait',
            'name'       => 'Reichweite',
            'type'       => 'string',
            'required'   => true,
            'validation' => 'required',
        ],
    
    ];
}
