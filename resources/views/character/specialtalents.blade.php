<div class="is-clearfix">
    @if(!is_null($character->specialtalents->first()))
        <div class="is-clearfix specialtalent-box">
            <h4>Spezialtalente</h4>
            @foreach($character->specialtalents as $specialtalent)
                <div class="is-clearfix specialtalent-single">
                    <b class="is-pulled-left specialtalent-name">{{$specialtalent->name}}</b>
                    <b class="is-pulled-left specialtalent-value">{{$specialtalent->pivot->value}}</b>
                    <b class="is-pulled-right specialtalent-data">{{$specialtalent->pivot->data}}</b>
                </div>
            @endforeach
        </div>
    @endif


    @if(!is_null($character->specialmagictalents->first()))
        <div class=" is-clearfix specialtalent-box">
            <h4>Spezial Magietalente</h4>
            @foreach($character->specialmagictalents as $specialmagictalent)
                <div class="specialtalent-single">
                    <b class="is-pulled-left specialtalent-name">{{$specialmagictalent->name}}</b>
                    <b class="is-pulled-left specialtalent-value">{{$specialmagictalent->pivot->value}}</b>
                    <b class="is-pulled-right specialtalent-data">{{$specialmagictalent->pivot->data}}</b>
                </div>
            @endforeach
        </div>
    @endif


    @if(!is_null($character->specialfightingtalents->first()))
        <div class=" is-clearfix specialtalent-box">
            <h4>Spezial Kampftalente</h4>
            @foreach($character->specialfightingtalents as $specialfightingtalent)
                <div class=" is-clearfix specialtalent-single">
                    <b class="is-pulled-left specialtalent-name">{{$specialfightingtalent->name}}</b>
                    <b class="is-pulled-left specialtalent-value">{{$specialfightingtalent->pivot->value}}</b>
                    <b class="is-pulled-right specialtalent-data">{{$specialfightingtalent->pivot->data}}</b>
                </div>
            @endforeach
        </div>
    @endif
</div>