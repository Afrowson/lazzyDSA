<div class="flex">
    @foreach($character->skills as $skill)
        <div class="mx-1">
            <p class="text-center primary">{{$skill}}</p>
            <p class="value-box {{$skill}} primary">{{$character->$skill}}</p>
        </div>
    @endforeach
</div>