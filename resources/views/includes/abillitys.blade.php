<div class="skillscontainer clearfix">
    @foreach($character->skills as $skill)
        <div class="pull-left skillbox">

            <p class="skill">{{$skill}}</p>

            <p class="skill-value">{{$character->$skill}}</p>

        </div>
    @endforeach
</div>