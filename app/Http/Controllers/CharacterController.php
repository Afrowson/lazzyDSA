<?php

namespace App\Http\Controllers;

use App\Character;
use Illuminate\Http\Request;

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
        //
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
}
