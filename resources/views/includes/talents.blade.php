<div class="talents-container clearfix">
    @foreach($talentgroups as $talentgroup)
        <div class="talent-block pull-left">
            <h4>{{$talentgroup}}</h4>
            @foreach($character->talents as $talent)
                @if($talent->group == $talentgroup)
                    <div class="talent-single clearfix pull-left">

                        <p class="talent-name">{{$talent->name}}: </p>
                        <p class="talent-value pull-left">{{$talent->pivot->value}}</p>

                        <div class="talent-skill pull-right">
                            <div class="skill-block pull-left">
                                <p class="skill-name">{{$talent->first_skill}}</p>
                                <p class="skill-value">{{$talent->first_skill}}</p>
                            </div>
                            <div class="skill-block pull-left">
                                <p class="skill-name">{{$talent->second_skill}}</p>
                                <p class="skill-value">{{$talent->second_skill}}</p>
                            </div>
                            <div class="skill-block pull-left">
                                <p class="skill->name">{{$talent->third_skill}}</p>
                                <p class="skill-value">{{$talent->third_skill}}</p>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach

        </div>
    @endforeach

</div>