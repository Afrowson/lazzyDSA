<div class="fightingtalents-container">

    <div class="fightingtalents-single clearfix">
        <h4 class="pull-left"> Kampftechnik</h4>
        <b class="pull-right" style="margin: 5px">PA</b>
        <b class="pull-right" style="margin: 5px">AT</b>
        <b class="pull-right" style="margin: 5px">Ktw</b>
    </div>
    @foreach($character->fightingtalents as $i=> $fightingtalent)
        <div class="fightingtalents-single clearfix">
            <b class="pull-left ">{{$fightingtalent->name}}</b>

            <p class="pull-right azure value-box">{{$fightvalues[$i]['pa']}}</p>
            <p class="pull-right azure value-box">{{$fightvalues[$i]['at']}}</p>
            <p class="pull-right azure value-box">{{$fightingtalent->pivot->value}}</p>
        </div>
    @endforeach
</div>