<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameItem extends Model
{
    protected $fillable = ['item_id', 'inventory_id', 'amount', 'notes'];
    protected $hidden = ['created_at', 'updated_at'];
    
    public function item()
    {
        return $this->belongsTo(Item::class);
    }
    
    public function invenory()
    {
        return $this->belongsTo(Item::class);
    }
    
    
    public static $fields = [
        
        'item_id'      => [
            'key'        => 'item_id',
            'name'       => 'Item',
            'type'       => 'integer',
            'required'   => true,
            'validation' => 'required|integer|min:0',
        ],
        'inventory_id' => [
            'key'        => 'inventory_id',
            'name'       => 'Inventar',
            'type'       => 'integer',
            'required'   => true,
            'validation' => 'nullable|integer|min:0',
        ],
        
        'amount' => [
            'key'        => 'amount',
            'name'       => 'Anzahl',
            'type'       => 'integer',
            'required'   => true,
            'validation' => 'integer|min:0',
        ],
        'notes'  => [
            'key'        => 'notes',
            'name'       => 'Notizen',
            'type'       => 'text',
            'required'   => false,
            'validation' => 'nullable',
        ],
    
    ];
}
