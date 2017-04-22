<div class="talents-container clearfix">
    @foreach($talentgroups as $talentgroup)
        <div class="talent-block pull-left">
            <h4>{{$talentgroup}}</h4>
            @foreach($talents[$loop->index] as $talent)
                <div class="clearfix">
                    <p class="talent-name">{{$talent->name}}: </p>
                        <p class="talent-value pull-left">{{$character->talent($talent->id)}}</p>
                    <div class="talent-skill pull-right">
                        <div class="skill-block pull-left">
                            <p class="skill-name">{{$talent->first_skill}}</p>
                            <p class="skill-value">{{$character->{$talent->first_skill} }}</p>
                        </div>
                        <div class="skill-block pull-left">
                            <p class="skill-name">{{$talent->second_skill}}</p>
                            <p class="skill-value">{{$character->{$talent->second_skill} }}</p>
                        </div>
                        <div class="skill-block pull-left">
                            <p class="skill->name">{{$talent->third_skill}}</p>
                            <p class="skill-value">{{$character->{$talent->third_skill} }}</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    @endforeach

</div>