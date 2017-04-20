<div class="skills-container clearfix">
    @foreach($character->skills as $skill)
        <div class="pull-left skill-block">

            <p class="skill-name">{{$skill}}</p>

            <p class="skill-value">{{$character->$skill}}</p>

        </div>
    @endforeach
</div>