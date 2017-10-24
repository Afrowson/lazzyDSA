<div class="box is-pulled-left m-r-10">
    <h4 class="title is-4">Nachteile</h4>
    @foreach($character->handicaps as $handicap)
        <div class="is-clearfix">
            <b class="is-pulled-left">{{$handicap->name}}&nbsp;{{$handicap->pivot->value}}&nbsp;</b>
            <p class="is-pulled-right">{{$handicap->pivot->type }}</p>
        </div>
    @endforeach
</div>
