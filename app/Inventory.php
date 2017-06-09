<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    public function items()
    {
        return $this->belongsToMany(Item::class)->withPivot('amount','notes');
    }

    public function character()
    {
        return $this->belongsTo(Character::class);
    }

    public function addItem(Item $item, $amount,$notes)
    {

       return $this->items()->save($item, ['amount' => $amount,'notes' => $notes]);
    }

}
