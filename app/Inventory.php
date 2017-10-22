<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $fillable = ['character_id', 'name', 'weight'];
    protected $hidden = ['created_at', 'updated_at'];
    
    public function items()
    {
        $items = $this->hasMany(GameItem::class);
        
        return $items;
    }
    
    public function character()
    {
        return $this->belongsTo(Character::class);
    }
    
    public static $fields = [
    
        'character_id' => [
            'key'        => 'character_id',
            'name'       => 'Character ID',
            'type'       => 'integer',
            'required'   => true,
            'validation' => 'required|max:191',
        ],
    
        'name' => [
            'key'        => 'name',
            'name'       => 'Ort',
            'type'       => 'text',
            'required'   => true,
            'validation' => 'required|max:191',
        ],
    
        'weight' => [
            'key'        => 'weight',
            'name'       => 'Gewicht',
            'type'       => 'decimal',
            'required'   => false,
            'validation' => 'nullable|numeric',
        ],
    ];
    
}
