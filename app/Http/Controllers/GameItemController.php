<?php

namespace App\Http\Controllers;


use App\GameItem;
use App\Inventory;
use App\Item;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\In;

class GameItemController extends Controller
{
    public function store(Request $request)
    {
        $item = GameItem::create([
            'item_id'      => $request->item_id,
            'inventory_id' => $request->inventory_id,
            'amount'       => $request->amount,
            'notes'        => $request->notes,
        ]);
        
        return $item->id;
    }
    
    public function update(GameItem $gameItem, Request $request)
    {
        $item = $gameItem;
        $item->item_id = $request->item_id;
        $item->amount = $request->amount;
        $item->notes = $request->notes;
        $item->save();
        
        return 'ok';
    }
    
    public function destroy(GameItem $gameItem)
    {
        $gameItem->delete();
        
        return 'ok';
        
    }
}