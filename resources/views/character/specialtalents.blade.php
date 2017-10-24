@if(!is_null($character->specialtalents->first()))
    <div class="box is-pulled-left m-r-10">
        <h4>Spezialtalente</h4>
        @foreach($character->specialtalents as $specialtalent)
            <div class="is-clearfix">
                <b class="is-pulled-left">{{$specialtalent->name}}&nbsp;</b>
                <p class="is-pulled-left">{{$specialtalent->pivot->value}}</p>
                <p class="is-pulled-right">{{$specialtalent->pivot->data}}</p>
            </div>
        @endforeach
    </div>
@endif

@if(!is_null($character->specialmagictalents->first()))
    <div class="box is-pulled-left m-r-10">
        <h4>Spezial Magietalente</h4>
        @foreach($character->specialmagictalents as $specialmagictalent)
            <div class="specialtalent-single">
                <b class="is-pulled-left">{{$specialmagictalent->name}}&nbsp;</b>
                <p class="is-pulled-left">{{$specialmagictalent->pivot->value}}</p>
                <p class="is-pulled-right">{{$specialmagictalent->pivot->data}}</p>
            </div>
        @endforeach
    </div>
@endif

@if(!is_null($character->specialfightingtalents->first()))
    <div class="box is-pulled-left m-r-10">
        <h4>Spezial Kampftalente</h4>
        @foreach($character->specialfightingtalents as $specialfightingtalent)
            <div class=" is-clearfix">
                <b class="is-pulled-left">{{$specialfightingtalent->name}}&nbsp;</b>
                <p class="is-pulled-left">{{$specialfightingtalent->pivot->value}}</p>
                <p class="is-pulled-right">{{$specialfightingtalent->pivot->data}}</p>
            </div>
        @endforeach
    </div>
@endif
