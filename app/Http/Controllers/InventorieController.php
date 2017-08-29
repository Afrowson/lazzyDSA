<?php

namespace App\Http\Controllers;


use App\Inventory;

class InventorieController extends Controller
{
    public function items(Inventory $inventory)
    {
        $inventory = Inventory::find($inventory);
        
        return $inventory->items();
        
    }
}