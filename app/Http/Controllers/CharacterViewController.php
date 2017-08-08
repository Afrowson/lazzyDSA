<?php

namespace App\Http\Controllers;

use App\CharacterTalent;
use App\Character;
use App\Fightingtalent;
use App\Talent;
use Illuminate\Support\Facades\Auth;


class CharacterViewController extends Controller
{
    public function create()
    {

        $character = new Character();
        $skills = $character->skills;

        return view('CreateCharacter.createCharacter', compact('skills'));
    }
    
    public function editCharacter(Character $character)
    {
        return view('editCharacter', compact('character'));
    }
    
    
    
    
    public function addTalents(Character $character)
    {
        $talents = Talent::all();
        return view('CreateCharacter.addTalents', compact('character', 'talents'));
    }

    public function addLanguages(Character $character)
    {
        return view('CreateCharacter.addLanguages', compact('character'));
    }

    public function addFightingtalents(Character $character)
    {
        $fightingtalents = Fightingtalent::all();
        return view('CreateCharacter.addFightingtalents', compact('character', 'fightingtalents'));
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