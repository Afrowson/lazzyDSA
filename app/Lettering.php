<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lettering extends Model
{
    protected $fillable = ['name', 'difficulty'];
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
    
        'difficulty' => [
            'key'        => 'difficulty',
            'name'       => 'Schwierigkeitsstufe',
            'type'       => 'integer',
            'required'   => true,
            'validation' => 'nullable|integer|min:2|max:6',
        ],
    ];
}
