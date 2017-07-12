<div class="talents-container is-clearfix">

    @for($i=$t;$t<=$e;$t++)
        <div class="talent-block is-pulled-left">
            <h4 style="margin: 2px!important">{{$talentgroups[$t]}}</h4>
            @foreach($character->talents as $talent)
                @if($talent->group == $talentgroups[$t])
                    <div class="talent-single clearfix is-pulled-left">

                        <p class="talent-name">{{$talent->name}}: </p>
                        <p class="talent-value is-pulled-left">{{$talent->pivot->value}}</p>

                        <div class="talent-skill pull-right">
                            <div class="skill-block is-pulled-left">
                                <p class="skill-name">{{$talent->first_skill}}</p>
                                <p class="skill-value {{$talent->first_skill}}">{{$character->{$talent->first_skill} }}</p>
                            </div>
                            <div class="skill-block is-pulled-left">
                                <p class="skill-name">{{$talent->second_skill}}</p>
                                <p class="skill-value {{$talent->second_skill}}">{{$character->{$talent->second_skill} }}</p>
                            </div>
                            <div class="skill-block is-pulled-left">
                                <p class="skill-name">{{$talent->third_skill}}</p>
                                <p class="skill-value {{$talent->third_skill}}">{{$character->{$talent->third_skill} }}</p>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach

        </div>
    @endfor

</div>