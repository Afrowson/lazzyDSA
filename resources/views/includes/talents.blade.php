<div class="talents-container clearfix">
    {{$i=0, $talentgroup = ['Körpertalente','Gesellschaftstalente','Naturtalente','Wissenstalente','Handwerkstalente']}}


    <div class="talent-block pull-left">
        @foreach($talents[0] as $talent)

            <p>{{$talent->name}}</p>
            <p>{{$character->talent($talent->id)}}</p>
            <p>{{$talent->first_skill}}</p>
            <p>{{$talent->second_skill}}</p>
            <p>{{$talent->third_skill}}</p>

        @endforeach
    </div>


</div>