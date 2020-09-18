<div class="">
    @foreach($character->skills as $skill)
        <div class="is-pulled-left m-lr-5">
            <p class="text-center primary">{{$skill}}</p>
            <p class="value-box {{$skill}} primary">{{$character->$skill}}</p>
        </div>
    @endforeach
</div>