<?php

namespace App\Http\Controllers;

use App\CharacterTalent;
use App\Character;
use Illuminate\Support\Facades\Auth;


class CharacterViewController extends Controller
{
    public function create()
    {

        $character = new Character();
        $skills = $character->skills;

        return view('createCharacter', compact('skills'));
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