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
        $talents = Talent::all();

        return view('character', compact('character','talents'));
    }
}
