<?php

namespace App\Http\Controllers;

use App\CharacterTalent;
use App\Character;
use JavaScript;


class CharacterViewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function create()
    {
        Javascript::put([
            'character' => new \stdClass(),
        ]);
    
        return view('editCharacter');
    }
    
    public function editCharacter(Character $character)
    {
        $character->_skills = $character->skills;
        $character->load([
            'armors',
            'benefices',
            'handicaps',
            'inventories',
            'inventories.items',
            'languages',
            'letterings',
            'magictricks',
            'purses',
            'rangeweapons',
            'shields',
            'specialtalents',
            'specialmagictalents',
            'specialfightingtalents',
            'weapons',
            'talents',
            'fightingtalents',
        ]);
        Javascript::put([
            'character' => $character,
        ]);
    
        return view('editCharacter');
    }
    
    public function single(Character $character)
    {
        $talentgroups = ['Handwerk', 'Gesellschaft', 'Natur', 'Körper', 'Wissen'];
        $character->fightvalues = $character->fightingvalues();
    
        return view('character', compact('character', 'talentgroups'));
    }
    
    public function diary(Character $character)
    {
        return view('diary', compact('character'));
    }
    
}