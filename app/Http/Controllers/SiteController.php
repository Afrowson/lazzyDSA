<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function database()
    {
        $tables = ['Item', 'Inventory', 'Talent', 'Language', 'Lettering', 'Fightingtalent', 'Benefice', 'Handicap', 'Weapon', 'Armor',
            'Rangewapon', 'Shield', 'Specialtalent', 'Specialmagictalent', 'Specialfightingtalent', 'Purse', 'Magictrick'];
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
