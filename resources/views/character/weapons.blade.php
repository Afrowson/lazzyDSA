{{-- Waffen --}}
<div class="flex flex-col bg-gray-400 px-5 py-4 mx-2 my-2 rounded">
    <h4 class="text-center text-lg font-medium">Waffen</h4>
    <div class="bg-gray-200 p-10 mt-5 rounded">
        <div class="grid grid-cols-1 md:grid-cols-2">
            @foreach($character->weapons as $weapon)

            <div>
                <div class="flex flex-row">
                    <div class="px-2 font-bold">{{$weapon->name}}</div>
                    <div class="text-sm">- {{$character->fightingtalents[$weapon->fightingtalent_id-1]->name }}</div>
                </div>


                <div class="flex flex-row flex-wrap">
                    <div class="bg-gray-400 flex flex-row my-2 w-1/2">
                        <div class="flex flex-col">
                            <div class="font-bold mx-2">AT</div>
                            <div class="font-bold mx-2">PA</div>
                            <div class="font-bold mx-2">TP+SS</div>
                        </div>
                        <div class="flex flex-col">
                            <div class="mx-2">
                                {{$weapon->at_mod+ $character->fightvalues[$weapon->fightingtalent_id-1]['at']}}</div>
                            <div class="mx-2">
                                {{$weapon->pa_mod+ $character->fightvalues[$weapon->fightingtalent_id-1]['pa']}}</div>
                            <div class="mx-2">
                                {{$weapon->dice}}W6+{{$weapon->bonus_dmg + max($character->{$weapon->skill}-$weapon->ss,0 )}}
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-300 flex flex-row my-2 w-1/2">
                        <div class="flex flex-col">
                            <div class="font-bold mx-2">Reichweite</div>
                            <div class="font-bold mx-2">EP</div>
                            <div class="font-bold mx-2">SS</div>
                            <div class="font-bold mx-2">TP</div>
                            <div class="font-bold mx-2">Modifi.</div>
                            <div class="font-bold mx-2">Gewicht</div>
                        </div>
                        <div class="flex flex-col">
                            <div class="mx-2">{{$weapon->reach}}</div>
                            <div class="mx-2">{{$weapon->skill}}</div>
                            <div class="mx-2">{{$weapon->ss}}</div>
                            <div class="mx-2">{{$weapon->dice}}W6+{{$weapon->bonus_dmg}}</div>
                            <div class="mx-2">{{$weapon->at_mod}} | {{$weapon->pa_mod}}</div>
                            <div class="mx-2">{{$weapon->weight}}</div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</div>

{{-- Schilde --}}
@if(!is_null($character->shields->first()))
<div class="flex flex-col bg-gray-400 px-5 py-4 mx-2 my-2 rounded">
    <h4 class="text-center text-lg font-medium">Schilde</h4>
    <div class="bg-gray-200 p-10 mt-5 rounded">
        <div class="grid grid-cols-1 md:grid-cols-2">
            @foreach($character->shields as $shield)
            <div>
                <div class="flex flex-col w-1/4">
                    <div class="px-2 font-bold">{{$shield->name}}</div>
                </div>
                <div class="flex flex-row flex-wrap ">
                    <div class="bg-gray-400 flex flex-row my-2 w-1/2">
                        <div class="flex flex-col">
                            <div class="font-bold mx-2">AT</div>
                            <div class="font-bold mx-2">PA</div>
                            <div class="font-bold mx-2">TP+SS</div>
                        </div>
                        <div class="flex flex-col">
                            <div>{{$shield->at_mod+ $character->fightvalues[$shield->fightingtalent_id-1]['at']}}</div>
                            <div>{{$shield->pa_mod+ $character->fightvalues[$shield->fightingtalent_id-1]['pa']}}</div>
                            <div>
                                {{$shield->dice}}W6+{{$shield->bonus_dmg + max($character->{$shield->skill}-$shield->ss,0 )}}
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-300 flex flex-row my-2 w-1/2">
                        <div class="flex flex-col">
                            <div class="font-bold mx-2">Reichweite</div>
                            <div class="font-bold mx-2">EP</div>
                            <div class="font-bold mx-2">SS</div>
                            <div class="font-bold mx-2">TP</div>
                            <div class="font-bold mx-2">Modifi.</div>
                            <div class="font-bold mx-2">Gewicht</div>
                        </div>
                        <div class="flex flex-col">
                            <div>{{$shield->reach}}</div>
                            <div>{{$shield->skill}}</div>
                            <div>{{$shield->ss}}</div>
                            <div>{{$shield->dice}}W6+{{$shield->bonus_dmg}}</div>
                            <div>{{$shield->at_mod}} | {{$shield->pa_mod}}</div>
                            <div>{{$shield->weight}}</div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</div>
@endif

{{-- Fernkampfwaffen --}}
@if(!is_null($character->rangeweapons->first()))
<div class="flex flex-col bg-gray-400 px-5 py-4 mx-2 my-2 rounded">
    <h4 class="text-center text-lg font-medium">Fernkampfwaffen</h4>

    <div class="bg-gray-200 p-10 mt-5 rounded">
        <div class="grid grid-cols-1 md:grid-cols-2">

            @foreach($character->rangeweapons as $rangeweapon)
            <div>
                <div class="flex flex-row">
                    <div class="px-2 font-bold">{{$rangeweapon->name}}</div>
                    <div class="text-sm">- {{$character->fightingtalents[$rangeweapon->fightingtalent_id-1]->name }}
                    </div>
                </div>
                <div class="flex flex-row flex-wrap">
                    <div class="bg-gray-400 flex flex-row my-2 w-1/2">
                        <div class="flex flex-col">
                            <div class="font-bold mx-2">AT</div>
                            <div class="font-bold mx-2">PA</div>
                            <div class="font-bold mx-2">TP+SS</div>
                        </div>
                        <div class="flex flex-col">
                            <div>{{$character->fightvalues[$rangeweapon->fightingtalent_id-1]['at']}}</div>
                            <div>{{$character->fightvalues[$rangeweapon->fightingtalent_id-1]['pa']}}</div>
                            <div>{{$rangeweapon->dice}}W6+{{$rangeweapon->bonus_dmg}}</div>
                        </div>
                    </div>
                    <div class="bg-gray-300 flex flex-row my-2 w-1/2">
                        <div class="flex flex-col">
                            <div class="font-bold mx-2">Reichweite</div>
                            <div class="font-bold mx-2">Nachladen</div>
                            <div class="font-bold mx-2">Munition</div>
                            <div class="font-bold mx-2">Gewicht</div>
                        </div>
                        <div class="flex flex-col">
                            <div class="flex flex-row">
                                <div class="pr-2">{{$rangeweapon->range_one}}</div>
                                <div class="pr-2">{{$rangeweapon->range_two}}</div>
                                <div>{{$rangeweapon->range_three}}</div>
                            </div>
                            <div>{{$rangeweapon->reload_time}}</div>
                            <div>{{$rangeweapon->munition_type}}</div>
                            <div>{{$rangeweapon->weight}}</div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
    @endif

{{-- Rüstungen --}}
<div class="flex flex-col bg-gray-400 px-5 py-4 mx-2 my-2 rounded">
    <h4 class="text-center text-lg font-medium">Rüstungen</h4>
    <div class="bg-gray-200 p-10 mt-5 rounded">
        <div class="grid grid-cols-1 md:grid-cols-2">
            @foreach($character->armors as $armor)
            <div>
                <div class="flex flex-row">
                    <div class="px-2 font-bold">{{$armor->name}}</div>
                </div>
                <div class="flex flex-row flex-wrap">
                    <div class="bg-gray-400 flex flex-row my-2 w-1/2">
                        <div class="flex flex-col">
                            <div class="font-bold mx-2">RS</div>
                            <div class="font-bold mx-2">BE</div>
                            <div class="font-bold mx-2">Gewicht</div>
                        </div>
                        <div class="flex flex-col">
                            <div>{{$armor->RS}}</div>
                            <div>{{$armor->BE}}</div>
                            <div>{{$armor->weight}}</div>
                        </div>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>