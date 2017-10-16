<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purse extends Model
{
    protected $fillable = ['character_id', 'name', 'dukaten', 'silber', 'heller', 'kreuzer'];
    protected $hidden = ['created_at', 'updated_at'];
    
    public function character()
    {
        return $this->belongsTo(Character::class);
    }
    
    public static $fields = [
    
        'character_id' => [
            'key'        => 'character_id',
            'name'       => 'Character',
            'type'       => 'string',
            'required'   => true,
            'validation' => 'required|min:36|max:36',
        ],
    
        'name' => [
            'key'        => 'name',
            'name'       => 'Name',
            'type'       => 'string',
            'required'   => true,
            'validation' => 'required',
        ],
    
        'dukaten' => [
            'key'        => 'dukaten',
            'name'       => 'Dukaten',
            'type'       => 'integer',
            'required'   => true,
            'validation' => 'required|integer',
        ],
    
        'silber' => [
            'key'        => 'silber',
            'name'       => 'Silber',
            'type'       => 'integer',
            'required'   => true,
            'validation' => 'required|integer',
        ],
    
        'heller' => [
            'key'        => 'heller',
            'name'       => 'Heller',
            'type'       => 'integer',
            'required'   => true,
            'validation' => 'required|integer',
        ],
    
        'kreuzer' => [
            'key'        => 'kreuzer',
            'name'       => 'Kreuzer',
            'type'       => 'integer',
            'required'   => true,
            'validation' => 'required|integer',
        ],
    
    ];
}
