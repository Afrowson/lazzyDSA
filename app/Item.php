<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $hidden = ['created_at', 'updated_at'];
    
    public function inventories()
    {
        return $this->belongsToMany(Inventory::class);
    }
}
