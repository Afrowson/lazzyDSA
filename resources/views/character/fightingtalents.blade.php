<div class="fightingtalents-container">

    <div class="fightingtalents-single is-clearfix">
        <h4 class=" is-pulled-left"> Kampftechnik</h4>
        <b class="is-pulled-right" style="margin: 5px">PA</b>
        <b class="is-pulled-right" style="margin: 5px">AT</b>
        <b class="is-pulled-right" style="margin: 5px">Ktw</b>
    </div>
    @foreach($character->fightingtalents as $i=> $fightingtalent)
        <div class="fightingtalents-single is-clearfix">
            <b class="is-pulled-left ">{{$fightingtalent->name}}</b>

            <p class="is-pulled-right azure value-box">{{$fightvalues[$i]['pa']}}</p>
            <p class="is-pulled-right azure value-box">{{$fightvalues[$i]['at']}}</p>
            <p class="is-pulled-right azure value-box">{{$fightingtalent->pivot->value}}</p>
        </div>
    @endforeach
</div>