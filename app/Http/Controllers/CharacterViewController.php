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

        $talentgroups = ['Körper','Geselschaft','Natur','Wissen','Handwerk'];
        $talents = [
            $body = Talent::where('id', '<=', 14)->get(),
            $social = Talent::where([['id', '>', 14], ['id', '<=', 23]])->get(),
            $nature = Talent::where([['id', '>', 23], ['id', '<=', 30]])->get(),
            $knowing = Talent::where([['id', '>', 30], ['id', '<=', 42]])->get(),
            $craft = Talent::where('id', '>', 42)->get()
        ];

        return view('character', compact('character', 'talents', 'talentgroups'));
    }
}
