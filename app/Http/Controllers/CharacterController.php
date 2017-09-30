<?php

namespace App\Http\Controllers;

use App\Character;
use App\Fightingtalent;
use App\Language;
use App\Lettering;
use App\Talent;
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
            'lep'            => request()->lep,
            'asp'            => request()->asp,
            'kap'            => request()->kap,
            'lep_max'        => request()->lep_max,
            'asp_max'        => request()->asp_max,
            'kap_max'        => request()->kap_max,
            'sp'             => request()->sp,
            'SK'             => request()->SK,
            'ZK'             => request()->ZK,
            'AW'             => request()->AW,
            'IT'             => request()->IT,
            'GW'             => request()->GW,
            'ap_total'       => request()->ap_total,
            'ap_spend'       => request()->ap_spend,
        ]);
        $talents = Talent::all();
    
        return redirect()->route('addTalents', [$character]);
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Character $character
     * @return \Illuminate\Http\Response
     */
    public function show(Character $character)
    {
        //
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Character $character
     * @return \Illuminate\Http\Response
     */
    public function edit(Character $character)
    {
        //
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Character $character
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Character $character)
    {
        //
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
    
    public function addTalents(Request $request, Character $character)
    {
    
        $talents = $request->except('_token');
    
        foreach ($talents as $key => $value) {
            $talent = Talent::find($key);
            $character->addTalent($talent, $value);
        
        }
    
        return redirect()->route('addFightingtalents', [$character]);
    }
    
    public function addFightingtalents(Request $request, Character $character)
    {
    
        $fightingtalents = $request->except('_token');
    
        foreach ($fightingtalents as $key => $value) {
            $fightingtalent = Fightingtalent::find($key);
            $character->addFightingtalent($fightingtalent, $value);
        }
    
        return redirect()->route('editCharacter', [$character]);
    }
    
    public function addLanguages(Request $request, Character $character)
    {
    
        $languages = $request->except('_token');
        Log::info($languages);
    
        foreach ($languages as $language) {
            $level = $language['level'];
            $language = Language::find($language['id']);
            $character->addLanguage($language, $level);
        }
    
        return 'ok';
    }
    
    public function addLetterings(Request $request, Character $character)
    {
    
        $letterings = $request->except('_token');
    
        foreach ($letterings as $lettering) {
            $lettering = Lettering::find($lettering['id']);
            $character->addLettering($lettering);
        }
    
        return 'ok';
    }
}