<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    public function Items()
    {
        $this->belongsToMany(Item::class);
    }

    public function character()
    {
        $this->belongsTo(Character::class);
    }

    public function addItem(Item $item,integer $ammount)
    {
        $this->items()->save($item,['amount'=> $ammount]);
    }

}
