<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Character;


class CharacterViewController extends Controller
{
    public function index()
    {
        $characters = Character::all();

        return view('characters', compact('characters'));
    }

    public function single(Character $id)
    {
        {
            $character = Character::find($id);
            $skills = $character->skills();

            return view('character', compact('character', 'skills'));

        }
    }
}
