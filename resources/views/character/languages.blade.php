<div class="is-clearfix languages-container">
    <div class="languages-block">

        <h4>Sprachen</h4>

        @foreach($character->languages as $language)
            <div class="is-clearfix language-single">

                <b class="is-pulled-left language-name">{{$language->name}}</b>
                <p class="is-pulled-right language-value">  {{$language->pivot->value}}</p>

            </div>
        @endforeach
    </div>
    <div class="languages-block">
        <h4>Schriften</h4>

        @foreach($character->letterings as $lettering)
            <div class="language-single">

                <b class="language-name">{{$lettering->name}}</b>

            </div>
        @endforeach
    </div>
</div>