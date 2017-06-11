<div>
    <div class="clearfix benefice-box">
    <div class="benefices-block">
        <h4 class="">Vorteile</h4>
        @foreach($character->benefices as $benefice)
            <div class="clearfix benefice-single">
                <b class="pull-left benefice-name">
                    {{$benefice->name}}
                </b>
                <b class="pull-left azure benefice-value ">
                    {{$benefice->pivot->value}}
                </b>
                <p class="pull-right benefice-type azure">
                    {{$benefice->pivot->type }}
                </p>
            </div>
        @endforeach
    </div>
    </div>
    <div class="clearfix benefice-box">
        <h4 class="">Nachteile</h4>
        <div class="benefices-block">

        @foreach($character->handicaps as $handicap)
            <div class="clearfix benefice-single">
                <b class="pull-left benefice-name">
                    {{$handicap->name}}
                </b>
                <b class="pull-left azure benefice-value ">
                    {{$handicap->pivot->value}}
                </b>
                <p class="pull-right benefice-type azure">
                    {{$handicap->pivot->type }}
                </p>
            </div>
        @endforeach
    </div>
    </div>
</div>