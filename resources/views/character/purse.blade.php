<div>
    <h3 class="title is-3">Geldbeutel:</h3>
    <div>
        @foreach($character->purses as $purse)
            <div class="box">
                <h5 class="title is-5">{{$purse->name}}</h5>
                <p>Dukaten: {{$purse->dukaten}}</p>
                <p>Silber: {{$purse->silber}}</p>
                <p>Kreuzer: {{$purse->kreuzer}}</p>
                <p>Heller: {{$purse->heller}}</p>
            </div>
        @endforeach
    </div>
</div>