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
        $fightvalues = $character->fightingvalues();

        return view('character', compact('character', 'talentgroups', 'fightvalues'));
    }

    public function diary(Character $character)
    {
        return view('diary', compact('character'));
    }

}