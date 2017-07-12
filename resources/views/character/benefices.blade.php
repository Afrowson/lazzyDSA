<div>
    <div class="is-clearfix benefice-box">
    <div class="benefices-block">
        <h4 class="">Vorteile</h4>
        @foreach($character->benefices as $benefice)
            <div class="is-clearfix benefice-single">
                <b class="is-pulled-left benefice-name">
                    {{$benefice->name}}
                </b>
                <b class="is-pulled-left azure benefice-value ">
                    {{$benefice->pivot->value}}
                </b>
                <p class="is-pulled-right benefice-type azure">
                    {{$benefice->pivot->type }}
                </p>
            </div>
        @endforeach
    </div>
    </div>
    <div class="is-clearfix benefice-box">
        <h4 class="">Nachteile</h4>
        <div class="benefices-block">

        @foreach($character->handicaps as $handicap)
                <div class="is-clearfix benefice-single">
                    <b class="is-pulled-left benefice-name">
                    {{$handicap->name}}
                </b>
                    <b class="is-pulled-left azure benefice-value ">
                    {{$handicap->pivot->value}}
                </b>
                    <p class="is-pulled-right benefice-type azure">
                    {{$handicap->pivot->type }}
                </p>
            </div>
        @endforeach
    </div>
    </div>
</div>