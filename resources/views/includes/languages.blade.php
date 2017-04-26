<div class="clearfix languages-container">
    <div class="pull-left">
    <h3>Sprachen</h3>

    @foreach($character->languages as $language)
        <div class="clearfix language-single">

            <p class="pull-left language-name">{{$language->name}}</p>
            <p class="language-value">Level: {{$language->pivot->value}}</p>

        </div>
    @endforeach
    </div>
    <div class="pull-left">
    <h3>Schriften</h3>

    @foreach($character->letterings as $lettering)
        <div class="clearfix lettering-single">

            <p class="pull-left lettering-name">{{$lettering->name}}</p>

        </div>
    @endforeach
    </div>
</div>