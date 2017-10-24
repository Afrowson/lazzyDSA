@if(!is_null($character->purses->first()))
    <div class="box is-clearfix is-pulled-left m-r-10">
        <h3 class="title is-4">Geldbeutel:</h3>
        @foreach($character->purses as $purse)
            <div class="box is-pulled-left m-r-10">
                <h5 class="subtitleis-5">{{$purse->name}}</h5>
                <div class="is-pulled-left">
                    <b class="is-block">Dukaten:&nbsp;</b>
                    <b class="is-block">Silber:</b>
                    <b class="is-block">Kreuzer:</b>
                    <b class="is-block">Heller:</b>
                </div>
                <div class="is-pulled-right">
                    <p>{{$purse->dukaten}}</p>
                    <p>{{$purse->silber}}</p>
                    <p>{{$purse->kreuzer}}</p>
                    <p>{{$purse->heller}}</p>
                </div>
            </div>
        @endforeach
    </div>
@endif