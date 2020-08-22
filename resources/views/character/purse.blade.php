@if(!is_null($character->purses->first()))
    <div class="flex flex-col bg-gray-400 px-5 py-4 mx-2 rounded">
        <h3 class="text-center text-lg font-medium">Geldbeutel:</h3>
        @foreach($character->purses as $purse)
            <div class=" bg-gray-200 p-10 mt-5 rounded">
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