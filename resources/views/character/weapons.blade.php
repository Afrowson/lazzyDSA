<div class="box is-pulled-right m-r-10">
    <h4 class="title is-4">Waffen und Rüstungen</h4>
    <table class="table is-narrow">
        <tr>
            <th style="width: 170px">Name</th>
            <th style="width: 100px">Kampftechnik</th>
            <th style="width: 40px" colspan="2">AT|PA</th>
            <th style="width: 50px">TP+SS</th>
            <th style="width: 80px">Reichweite</th>
            <th style="width: 25px">EP</th>
            <th style="width: 20px">SS</th>
            <th style="width: 50px">TP</th>
            <th style="width: 40px" colspan="1">Modifi.</th>
            <th style="width: 60px">Gewicht</th>
        </tr>
        @foreach($character->weapons as $weapon)
            
            <tr>
                <td class="weapons-table-cell">{{$weapon->name}}</td>
                <td class="weapons-table-cell">{{$character->fightingtalents[$weapon->fightingtalent_id-1]->name }}</td>
                <td class="weapons-table-cell-w">{{$weapon->at_mod+ $character->fightvalues[$weapon->fightingtalent_id-1]['at']}}</td>
                <td class="weapons-table-cell-w">{{$weapon->pa_mod+ $character->fightvalues[$weapon->fightingtalent_id-1]['pa']}}</td>
                <td class="weapons-table-cell-w">{{$weapon->dice}}W6+{{$weapon->bonus_dmg + max($character->{$weapon->skill}-$weapon->ss,0 )}}</td>
                <td class="weapons-table-cell">{{$weapon->reach}}</td>
                <td class="weapons-table-cell">{{$weapon->skill}}</td>
                <td class="weapons-table-cell">{{$weapon->ss}}</td>
                <td class="weapons-table-cell">{{$weapon->dice}}W6+{{$weapon->bonus_dmg}}</td>
                <td class="weapons-table-cell">{{$weapon->at_mod}} | {{$weapon->pa_mod}}</td>
                <td class="weapons-table-cell">{{$weapon->weight}}</td>
            </tr>
        @endforeach
        @if(!is_null($character->shields->first()))
            <tr>
                <td>Schilde</td>
            </tr>
            @foreach($character->shields as $shield)
                <tr>
                    <td class="weapons-table-cell">{{$shield->name}}</td>
                    <td class="weapons-table-cell"></td>
                    <td class="weapons-table-cell-w">{{$shield->at_mod+ $character->fightvalues[$shield->fightingtalent_id-1]['at']}}</td>
                    <td class="weapons-table-cell-w">{{$shield->pa_mod+ $character->fightvalues[$shield->fightingtalent_id-1]['pa']}}</td>
                    <td class="weapons-table-cell-w">{{$shield->dice}}W6+{{$shield->bonus_dmg + max($character->{$shield->skill}-$shield->ss,0 )}}</td>
                    <td class="weapons-table-cell">{{$shield->reach}}</td>
                    <td class="weapons-table-cell">{{$shield->skill}}</td>
                    <td class="weapons-table-cell">{{$shield->ss}}</td>
                    <td class="weapons-table-cell">{{$shield->dice}}W6+{{$shield->bonus_dmg}}</td>
                    <td class="weapons-table-cell">{{$shield->at_mod}} | {{$shield->pa_mod}}</td>
                    <td class="weapons-table-cell">{{$shield->weight}}</td>
                </tr>
            @endforeach
    </table>
    @endif
    @if(!is_null($character->rangeweapons->first()))
        <table class="table is-narrow">
            <tr>
                <th style="width: 170px">Name</th>
                <th style="width: 100px">Kampftechnik</th>
                <th style="width: 40px">AT</th>
                <th style="width: 50px">TP</th>
                <th style="width: 80px" colspan="3">Reichweite</th>
                <th style="width: 73px">Nachlade.</th>
                <th style="width: 65px">Munition</th>
                <th style="width: 60px">Gewicht</th>
            </tr>
            @foreach($character->rangeweapons as $rangeweapon)
                <tr>
                    <td class="weapons-table-cell">{{$rangeweapon->name}}</td>
                    <td class="weapons-table-cell">{{$character->fightingtalents[$rangeweapon->fightingtalent_id-1]->name }}</td>
                    <td class="weapons-table-cell-w">{{$character->fightvalues[$rangeweapon->fightingtalent_id-1]['at']}}</td>
                    <td class="weapons-table-cell-w">{{$rangeweapon->dice}}W6+{{$rangeweapon->bonus_dmg}}</td>
                    <td class="weapons-table-cell">{{$rangeweapon->range_1}}</td>
                    <td class="weapons-table-cell">{{$rangeweapon->range_2}}</td>
                    <td class="weapons-table-cell">{{$rangeweapon->range_3}}</td>
                    <td class="weapons-table-cell">{{$rangeweapon->reload_time}}</td>
                    <td class="weapons-table-cell">{{$rangeweapon->munition_type}}</td>
                    <td class="weapons-table-cell">{{$rangeweapon->weight}}</td>
                </tr>
            @endforeach
        </table>
    @endif
    
    <table class="table is-narrow">
        <tr>
            <th style="width: 270px">Name</th>
            <th style="width: 30px">RS</th>
            <th style="width: 25px">BE</th>
            <th style="width: 60px">Gewicht</th>
        </tr>
        @foreach($character->armors as $armor)
            <td class="weapons-table-cell">{{$armor->name}}</td>
            <td class="weapons-table-cell-w">{{$armor->RS}}</td>
            <td class="weapons-table-cell">{{$armor->BE}}</td>
            <td class="weapons-table-cell">{{$armor->weight}}</td>
        @endforeach
    </table>
</div>