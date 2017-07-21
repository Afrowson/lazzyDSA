<?php

namespace App\Http\Controllers;

use App\CharacterTalent;
use App\Character;
use Illuminate\Support\Facades\Auth;


class CharacterViewController extends Controller
{
    public function index()
    {
        $characters = Character::where('user_id', Auth::user()->id)->get();;

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