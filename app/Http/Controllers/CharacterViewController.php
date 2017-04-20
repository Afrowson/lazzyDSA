<?php

namespace App\Http\Controllers;

use App\CharacterTalents;
use App\Talents;
use Illuminate\Http\Request;
use App\Character;


class CharacterViewController extends Controller
{
    public function index()
    {
        $characters = Character::all();

        return view('characters', compact('characters'));
    }

    public function single(Character $character)
    {
        $talents = Talents::all();
        $talent2value = $character->talents->where('talent_id', 2);
        dump($talent2value);
        $value = $talent2value->value;

        dd($value);

            return view('character', compact('character','talents'));
    }
}
