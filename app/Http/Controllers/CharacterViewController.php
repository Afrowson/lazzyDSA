<?php

namespace App\Http\Controllers;

use App\CharacterTalent;
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
        $talentgroups = ['Körper', 'Gesellschaft', 'Natur', 'Wissen', 'Handwerk'];

        return view('character', compact('character', 'talentgroups'));
    }
}
