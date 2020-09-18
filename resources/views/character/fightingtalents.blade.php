<div class="bg-gray-400 px-5 py-4 mx-2 my-2 rounded">
    <div class="is-clearfix">
        <h4 class="title is-4 is-pulled-left">Kampftechnik</h4>
        <b class="is-pulled-right" style="margin: 5px">PA</b>
        <b class="is-pulled-right" style="margin: 5px">AT</b>
        <b class="is-pulled-right" style="margin: 5px">Ktw</b>
    </div>
    @foreach($character->fightingtalents as $i=> $fightingtalent)
        <div class="is-clearfix">
            <b class="is-pulled-left ">{{$fightingtalent->name}}</b>
            <p class="is-pulled-right value-box">{{$character->fightvalues[$i]['pa']}}</p>
            <p class="is-pulled-right value-box">{{$character->fightvalues[$i]['at']}}</p>
            <p class="is-pulled-right value-box">{{$fightingtalent->pivot->value}}</p>
        </div>
    @endforeach
</div>