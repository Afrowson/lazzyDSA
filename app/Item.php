<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function inventories()
    {
        return $this->belongsToMany(Inventory::class);
    }
}
