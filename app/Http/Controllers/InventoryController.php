<?php

namespace App\Http\Controllers;


use App\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function items(Inventory $inventory)
    {
        $items = $inventory->items()->get();
    
        return $items;
    }
    
    public function delete($id)
    {
        Inventory::find($id)->items()->delete();
        Inventory::find($id)->delete();
    
        return 'ok';
    }
}