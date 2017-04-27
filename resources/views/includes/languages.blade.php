<div class="clearfix languages-container">
    <div class="pull-left languages-block">

        <h4>Sprachen</h4>

        @foreach($character->languages as $language)
            <div class="clearfix language-single">

                <b class="pull-left language-name">{{$language->name}}</b>
                <p class="pull-right language-value">  {{$language->pivot->value}}</p>

            </div>
        @endforeach
    </div>
    <div class="pull-left languages-block">
        <h4>Schriften</h4>

        @foreach($character->letterings as $lettering)
            <div class="language-single">

                <b class="language-name">{{$lettering->name}}</b>

            </div>
        @endforeach
    </div>
</div>