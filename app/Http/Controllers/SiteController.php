<?php

namespace App\Http\Controllers;

use App\Character;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $characters = Character::where('user_id', Auth::user()->id)->get();
    
        return view('characters', compact('characters'));
    }
    
    public function database()
    {
        $tables = [
            'Item',
            'Talent',
            'Language',
            'Lettering',
            'Fightingtalent',
            'Benefice',
            'Handicap',
            'Weapon',
            'Armor',
            'Rangeweapon',
            'Shield',
            'Specialtalent',
            'Specialmagictalent',
            'Specialfightingtalent',
            'Purse',
            'Magictrick',
        ];
        $datas = [];
        $fillables = [];
        $selected = request()->table;
    
        if (isset($selected)) {
            $controller = new DataController();
            $datas = $controller->index($selected);
            $model = $controller->getModel($selected);
            $fillables = $model::$fields;
        }
    
        return view('database', compact('datas', 'tables', 'selected', 'fillables'));
    }
}
