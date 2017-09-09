<?php

namespace App\Http\Controllers;


use App\Inventory;

class InventoryController extends Controller
{
    public function items(Inventory $inventory)
    {
    
        $items = $inventory->items()->get();
        $respone = json_encode($items);
    
        return $respone;
        
    }
}