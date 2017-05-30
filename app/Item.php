<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function inventorys()
    {
        return $this->belongsToMany(Inventory::class);
    }
}
