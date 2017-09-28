<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $fillable = ['character_id', 'location', 'weight'];
    protected $hidden = ['created_at', 'updated_at'];
    
    public function items()
    {
        $items = $this->belongsToMany(Item::class)->withPivot('id', 'amount', 'notes');
        
        return $items;
    }
    
    public function character()
    {
        return $this->belongsTo(Character::class);
    }
    
    public function addItem(Item $item, $amount, $notes)
    {
    
        return $this->items()->save($item, ['amount' => $amount, 'notes' => $notes]);
    }
    
    public function deleteItem($id)
    {
        return $this->items()->find($id)->delete();
    }
    
    public function deleteItems()
    {
        return $this->items()->delete();
    }
    
    public static $fields = [
        
        
        'character_id' =>
            [
                'key'        => 'character_id',
                'name'       => 'Character ID',
                'type'       => 'integer',
                'required'   => true,
                'validation' => 'required|max:191',
            ],
        'location'     =>
            [
                'key'        => 'location',
                'name'       => 'Ort',
                'type'       => 'text',
                'required'   => true,
                'validation' => 'required|max:191',
            
            ],
        'weight'       =>
            [
                'key'        => 'weight',
                'name'       => 'Gewicht',
                'type'       => 'decimal',
                'required'   => false,
                'validation' => 'nullable|numeric',
            
            ],
    ];
    
}
