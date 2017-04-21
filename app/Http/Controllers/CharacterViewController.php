<?php

namespace App\Http\Controllers;

use App\CharacterTalent;
use App\Talent;
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
        $talents = [
            $body = Talent::where('id', '<', 14)->get(),
            $social = Talent::where([['id', '>=', 14], ['id', '<', 14]])->get()->toArray(),
            $nature = Talent::where([['id', '>=', 14], ['id', '<', 14]])->get(),
            $knowing = Talent::where([['id', '>=', 14], ['id', '<', 14]])->get(),
            $craft = Talent::where('id', '>', 40)->get()
        ];

        return view('character', compact('character', 'talents'));
    }
}
