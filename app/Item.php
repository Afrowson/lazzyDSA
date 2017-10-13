<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['name', 'description', 'value', 'weight', 'datajason'];
    protected $hidden = ['created_at', 'updated_at'];
    
    public function inventories()
    {
        return $this->belongsToMany(Inventory::class);
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
    
        'value' => [
            'key'        => 'value',
            'name'       => 'Wert',
            'type'       => 'decimal',
            'required'   => false,
            'validation' => 'nullable|numeric|min:0|max:18',
        ],
    
        'weight' => [
            'key'        => 'weight',
            'name'       => 'Gewicht',
            'type'       => 'decimal',
            'required'   => false,
            'validation' => 'nullable|numeric|min:0',
        ],
    
        'datajson' => [
            'key'        => 'datajson',
            'name'       => 'Daten',
            'type'       => 'text',
            'required'   => false,
            'validation' => 'nullable|json',
        ],
    ];
}
