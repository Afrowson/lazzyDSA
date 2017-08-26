<?php

namespace App\Http\Controllers;

use App\CharacterTalent;
use App\Character;
use App\Fightingtalent;
use App\Talent;
use JavaScript;


class CharacterViewController extends Controller
{
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
        $talentgroups = ['Körper', 'Gesellschaft', 'Natur', 'Wissen', 'Handwerk'];
        $fightvalues = $character->fightingvalues();
    
        return view('character', compact('character', 'talentgroups', 'fightvalues'));
    }
    
    public function diary(Character $character)
    {
        return view('diary', compact('character'));
    }
    
}