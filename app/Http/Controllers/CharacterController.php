<?php

namespace App\Http\Controllers;

use App\Benefice;
use App\Character;
use App\Fightingtalent;
use App\Handicap;
use App\Language;
use App\Lettering;
use App\Magictrick;
use App\Purse;
use App\Rangeweapon;
use App\Shield;
use App\Specialfightingtalent;
use App\Specialmagictalent;
use App\Specialtalent;
use App\Talent;
use App\Weapon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request,
            [
                'name'       => 'required',
                'race'       => '|nullable',
                'profession' => '|nullable',
                
                'gender'         => 'numeric|min:0|max:2',
                'height'         => 'numeric|nullable',
                'weight'         => 'numeric|nullable',
                'age'            => 'numeric|nullable',
                'hair'           => '|nullable',
                'eyes'           => '|nullable',
                'culture'        => '|nullable',
                'place_of_birth' => '|nullable',
                'title'          => '|nullable',
                'social'         => '|nullable',
                
                'MU' => 'numeric|min:6|max:20',
                'KL' => 'numeric|min:6|max:20',
                'IN' => 'numeric|min:6|max:20',
                'CH' => 'numeric|min:6|max:20',
                'FF' => 'numeric|min:6|max:20',
                'GE' => 'numeric|min:6|max:20',
                'KO' => 'numeric|min:6|max:20',
                'KK' => 'numeric|min:6|max:20',
                
                'lep'     => 'numeric|nullable',
                'asp'     => 'numeric|nullable',
                'kap'     => 'numeric|nullable',
                'lep_max' => 'numeric|nullable',
                'asp_max' => 'numeric|nullable',
                'kap_max' => 'numeric|nullable',
                'sp'      => 'numeric|nullable',
                
                'SK' => 'numeric|nullable',
                'ZK' => 'numeric|nullable',
                'AW' => 'numeric|nullable',
                'IT' => 'numeric|nullable',
                'GW' => 'numeric|nullable',
                
                'ap_total' => 'numeric',
                'ap_spend' => 'numeric|nullable',
            ]);
        
        $character = Character::create([
            'user_id'        => Auth::user()->id,
            'name'           => request()->name,
            'race'           => request()->race,
            'profession'     => request()->profession,
            'gender'         => request()->gender,
            'height'         => request()->height,
            'weight'         => request()->weight,
            'age'            => request()->age,
            'hair'           => request()->hair,
            'eyes'           => request()->eyes,
            'culture'        => request()->culture,
            'place_of_birth' => request()->place_of_birth,
            'title'          => request()->title,
            'social'         => request()->social,
            'MU'             => request()->MU,
            'KL'             => request()->KL,
            'IN'             => request()->IN,
            'CH'             => request()->CH,
            'FF'             => request()->FF,
            'GE'             => request()->GE,
            'KO'             => request()->KO,
            'KK'             => request()->KK,
            'lep'            => request()->lep_max,
            'asp'            => request()->asp_max,
            'kap'            => request()->kap_max,
            'lep_max'        => request()->lep_max,
            'asp_max'        => request()->asp_max,
            'kap_max'        => request()->kap_max,
            'sp'             => 3,
            'SK'             => request()->SK,
            'ZK'             => request()->ZK,
            'AW'             => request()->AW,
            'IT'             => request()->IT,
            'GW'             => request()->GW,
            'ap_total'       => request()->ap_total,
            'ap_spend'       => request()->ap_spend,
        ]);
        
        $talents = Talent::all();
        foreach ($talents as $talent) {
            $character->addTalent($talent, 0);
        }
        $fightingtalents = Fightingtalent::all();
        foreach ($fightingtalents as $fightingtalent) {
            $character->addFightingtalent($fightingtalent, 6);
        }
        
        return $character->id;
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Character $character
     * @return \Illuminate\Http\Response
     */
    public function destroy(Character $character)
    {
        //
    }
    
    public function weapons(Character $character)
    {
        $weapons = $character->weapons()->get();
        foreach ($weapons as $item) {
            $item->id = $item->pivot->id;
        }
        
        
        return $weapons;
    }
    
    public function updateEnergy(Character $character)
    {
        if (request()->has('lep') && $character->lep_max >= request()->lep) {
            $character->lep = request()->lep;
        }
        if (request()->has('asp') && $character->asp_max >= request()->asp) {
            $character->asp = request()->asp;
        }
        if (request()->has('kap') && $character->kap_max >= request()->kap) {
            $character->kap = request()->kap;
        }
        if (request()->has('sp') && request()->sp < 4) {
            $character->sp = request()->sp;
        }
        $character->save();
        
        return back();
    }
    
    public function updateTalents(Request $request, Character $character)
    {
        $updatedTalents = $request->except('_token');
        $talents = $character->talents;
        
        foreach ($talents as $t => $talent) {
            $talent->pivot->value = $updatedTalents[$t]['value'];
            $talent->pivot->save();
        }
        
        return 'ok';
    }
    
    public function updateFightingtalents(Request $request, Character $character)
    {
        $updatedFightingtalents = $request->except('_token');
        $fightingtalents = $character->fightingtalents;
        
        foreach ($fightingtalents as $t => $fightingtalent) {
            $fightingtalent->pivot->value = $updatedFightingtalents[$t]['value'];
            $fightingtalent->pivot->save();
        }
        
        return 'ok';
    }
    
    public function updatePurse(Request $request, Character $character)
    {
        $updatepurse = $request->except('_token');
        $id = $request->id;
        $purse = $character->purses()->find($id);
        $purse->name = $updatepurse['name'];
        $purse->dukaten = $updatepurse['dukaten'];
        $purse->silber = $updatepurse['silber'];
        $purse->heller = $updatepurse['heller'];
        $purse->kreuzer = $updatepurse['kreuzer'];
        $purse->save();
        
        return 'ok';
    }
    
    public function addLanguage(Request $request, Character $character)
    {
        $level = $request->level;
        $language = Language::find($request->id);
        $character->addLanguage($language, $level);
        
        return 'ok';
    }
    
    public function addLettering(Request $request, Character $character)
    {
        $lettering = Lettering::find($request->id);
        $character->addLettering($lettering);
        
        return 'ok';
    }
    
    public function addBenefice(Request $request, Character $character)
    {
        $benefice = Benefice::find($request->id);
        $options = ['value' => $request->level, 'type' => $request->type];
        $character->addBenefice($benefice, $options);
        
        return 'ok';
    }
    
    public function addHandicap(Request $request, Character $character)
    {
        $handicap = Handicap::find($request->id);
        $options = ['value' => $request->level, 'type' => $request->type];
        $character->addHandicap($handicap, $options);
        
        return 'ok';
    }
    
    public function addMagictrick(Request $request, Character $character)
    {
        $magictrick = Magictrick::find($request->id);
        $character->addMagictrick($magictrick);
        
        return 'ok';
    }
    
    public function addSpecialTalent(Request $request, Character $character)
    {
        $specialtalent = Specialtalent::find($request->id);
        $options = ['value' => $request->level, 'data' => $request->type];
        $character->addSpecialTalent($specialtalent, $options);
        
        return 'ok';
    }
    
    public function addSpecialFightingtalent(Request $request, Character $character)
    {
        $specialfightingtalent = Specialfightingtalent::find($request->id);
        $options = ['value' => $request->level, 'data' => $request->type];
        $character->addSpecialFightingtalent($specialfightingtalent, $options);
        
        return 'ok';
    }
    
    public function addSpecialMagictalent(Request $request, Character $character)
    {
        $specialmagictalent = Specialmagictalent::find($request->id);
        $options = ['value' => $request->level, 'data' => $request->type];
        $character->addSpecialMagictalent($specialmagictalent, $options);
        
        return 'ok';
    }
    
    public function addShield(Request $request, Character $character)
    {
        $shield = Shield::find($request->id);
        $fields = Shield::$fields;
        $modifiers = [];
        foreach ($fields as $field) {
    
            if (isset($request[$field['key']]) && $request[$field['key']] != $shield[$field['key']]) {
                if ($field['type'] != 'string') {
                    if ($field['key'] == 'fightingtalent_id') {
                        $modifiers['fightingtalent_id'] = $request['fightingtalent_id'];
                    } else {
                        $modifiers[$field['key']] = $request[$field['key']] - $shield[$field['key']];
                    }
                } else {
                    $modifiers[$field['key']] = $request[$field['key']];
                }
            }
        };
        $id = $character->addShield($shield, $modifiers);
    
        return $id;
    }
    
    public function addWeapon(Request $request, Character $character)
    {
        $weapon = Weapon::find($request->id);
        $fields = Weapon::$fields;
        $modifiers = [];
        foreach ($fields as $field) {
            
            if (isset($request[$field['key']]) && $request[$field['key']] != $weapon[$field['key']]) {
                if ($field['type'] != 'string') {
                    if ($field['key'] == 'fightingtalent_id') {
                        $modifiers['fightingtalent_id'] = $request['fightingtalent_id'];
                    } else {
                        $modifiers[$field['key']] = $request[$field['key']] - $weapon[$field['key']];
                    }
                } else {
                    $modifiers[$field['key']] = $request[$field['key']];
                }
            }
        };
        $id = $character->addWeapon($weapon, $modifiers);
        
        return $id;
    }
    
    public function addRangeweapon(Request $request, Character $character)
    {
        $rangeweapon = Rangeweapon::find($request->id);
        $fields = Rangeweapon::$fields;
        $modifiers = [];
        foreach ($fields as $field) {
            
            if (isset($request[$field['key']]) && $request[$field['key']] != $rangeweapon[$field['key']]) {
                if ($field['type'] != 'string') {
                    if ($field['key'] == 'fightingtalent_id') {
                        $modifiers['fightingtalent_id'] = $request['fightingtalent_id'];
                    } else {
                        $modifiers[$field['key']] = $request[$field['key']] - $rangeweapon[$field['key']];
                    }
                } else {
                    $modifiers[$field['key']] = $request[$field['key']];
                }
            }
        };
        $id = $character->addRangeweapon($rangeweapon, $modifiers);
        
        return $id;
    }
    
    public function addArmor(Request $request, Character $character)
    {
        $armor = Armor::find($request->id);
        $fields = Armor::$fields;
        $modifiers = [];
        foreach ($fields as $field) {
            
            if (isset($request[$field['key']]) && $request[$field['key']] != $armor[$field['key']]) {
                if ($field['type'] != 'string') {
                    $modifiers[$field['key']] = $request[$field['key']] - $armor[$field['key']];
                } else {
                    $modifiers[$field['key']] = $request[$field['key']];
                }
            }
        };
        $id = $character->addArmor($armor, $modifiers);
        
        return $id;
    }
    
    public function addPurse(Request $request, Character $character)
    {
        Purse::create([
            'name'         => $request->name,
            'character_id' => $request->character_id,
            'dukaten'      => $request->dukaten,
            'silber'       => $request->silber,
            'heller'       => $request->heller,
            'kreuzer'      => $request->kreuzer,
        ])->save();
    
        return 'ok';
    }
    
    public function removeLanguage(Request $request, Character $character)
    {
        $id = $request->id;
        $character->languages()->detach($id);
        
        return 'ok';
    }
    
    public function removeLettering(Request $request, Character $character)
    {
        $id = $request->id;
        $character->letterings()->detach($id);
        
        return 'ok';
    }
    
    public function removeBenefice(Request $request, Character $character)
    {
        $id = $request->id;
        $character->benefices()->detach($id);
        
        return 'ok';
    }
    
    public function removeHandicap(Request $request, Character $character)
    {
        $id = $request->id;
        $character->handicaps()->detach($id);
        
        return 'ok';
    }
    
    public function removeMagictrick(Request $request, Character $character)
    {
        $id = $request->id;
        $character->magictricks()->detach($id);
        
        return 'ok';
    }
    
    public function removeSpecialtalent(Request $request, Character $character)
    {
        $id = $request->id;
        $character->specialtalents()->detach($id);
        
        return 'ok';
    }
    
    public function removeSpecialfightingtalent(Request $request, Character $character)
    {
        $id = $request->id;
        $character->specialfightingtalents()->detach($id);
        
        return 'ok';
    }
    
    public function removeSpecialmagictalent(Request $request, Character $character)
    {
        $id = $request->id;
        $character->specialmagictalents()->detach($id);
    
        return 'ok';
    }
    
    public function removeShield(Request $request, Character $character)
    {
        $id = $request->id;
        $character->shields()->where('pivot_id' == $id)->detach();
        
        return 'ok';
    }
    
    public function removeWeapon(Request $request, Character $character)
    {
        $id = $request->id;
        $character->weapons()->where('pivot_id' == $id)->detach();
        
        return 'ok';
    }
    
    public function removeRangeweapon(Request $request, Character $character)
    {
        $id = $request->id;
        $character->rangeweapons()->where('pivot_id' == $id)->detach();
    
        return 'ok';
    }
    
    public function removeArmor(Request $request, Character $character)
    {
        $id = $request->id;
        $character->armors()->where('pivot_id' == $id)->detach();
        
        return 'ok';
        
    }
    
    public function removePurse(Request $request, Character $character)
    {
        $id = $request->except('_token');
        Purse::destroy($id);
        
        return 'ok';
    }
}