<?php

namespace App\Http\Controllers;


use App\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function items(Inventory $inventory)
    {
    
        $items = $inventory->items()->get();
        foreach ($items as $item) {
            $item->id = $item->pivot->id;
        }
    
        return $items;
    }
    
    public function addItem()
    {
        //@todo add functionality
        
        
    }
    
    public function deleteItem()
    {
        //@todo add functionality
    }
    
    public function delete($id)
    {
        Inventory::find($id)->deleteItems();
        Inventory::find($id)->delete();
        
        return $id;
    }
}