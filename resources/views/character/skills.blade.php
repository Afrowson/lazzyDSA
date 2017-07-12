<div class="level-item">
    <div class="skills-container is-clearfix">
        @foreach($character->skills as $skill)
            <div class="is-pulled-left skill-block">

                <p class="skill-name primary">{{$skill}}</p>

                <p class=" skill-value {{$skill}} ">{{$character->$skill}}</p>

            </div>
        @endforeach
    </div>
</div>