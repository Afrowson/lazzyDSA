<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purse extends Model
{
    protected $fillable = ['character_id', 'location', 'dukaten', 'silber', 'heller', 'kreuzer'];
    protected $hidden = ['created_at', 'updated_at'];
    
    public function character()
    {
        return $this->hasOne(Character::class);
    }
    
    public static $fields = [
        'character_id' => [
            'key'        => 'character_id',
            'name'       => 'Character',
            'type'       => 'string',
            'reqired'    => true,
            'validation' => 'required|min:36|max:36',
        ],
        'location'     => [
            'key'        => 'location',
            'name'       => 'Ort',
            'type'       => 'string',
            'reqired'    => true,
            'validation' => 'required',
        ],
        'dukaten'      => [
            'key'        => 'dukaten',
            'name'       => 'Dukaten',
            'type'       => 'integer',
            'reqired'    => true,
            'validation' => 'required|integer',
        ],
        'silber'       => [
            'key'        => 'silber',
            'name'       => 'Silber',
            'type'       => 'integer',
            'reqired'    => true,
            'validation' => 'required|integer',
        ],
        'heller'       => [
            'key'        => 'heller',
            'name'       => 'Heller',
            'type'       => 'integer',
            'reqired'    => true,
            'validation' => 'required|integer',
        ],
        'kreuzer'      => [
            'key'        => 'kreuzer',
            'name'       => 'Kreuzer',
            'type'       => 'integer',
            'reqired'    => true,
            'validation' => 'required|integer',
        ],
    
    ];
}
