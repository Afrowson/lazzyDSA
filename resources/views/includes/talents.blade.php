<div class="talents-container clearfix">

    @foreach($talents as $talent)

        <div class="talent-block pull-left">
            <p>{{$talent->name}}</p>
            <p>{{$talent->first_skill}}</p>
            <p>{{$character->talent(5)}}</p>
            <p>{{$talent->second_skill}}</p>
            <p>{{$talent->third_skill}}</p>

        </div>
    @endforeach



</div>