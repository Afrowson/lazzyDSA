<div class="box is-pulled-left m-r-10">
    <h4 class="title is-4">Sprachen</h4>
    @foreach($character->languages as $language)
        <div>
            <p><b>{{$language->name}}&nbsp;</b>{{$language->pivot->value}}</p>
        </div>
    @endforeach
</div>
