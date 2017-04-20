<div class="talents-container clearfix">
    {{$i=0, $talentgroup = ['Körpertalente','Gesellscha','Naturtalente','Wissenstalente','Handwerkstalente']}}
    @foreach($talents as $talent)

        @if(in_array($talent->id,[15,13]) )
            <p>{{$talentgroup[$i++]}}</p>
        @endif
        <div class="talent-block pull-left">
            <p>{{$talent->name}}</p>

            <p>{{$character->talent($talent->id)}}</p>
            <p>{{$talent->first_skill}}</p>
            <p>{{$talent->second_skill}}</p>
            <p>{{$talent->third_skill}}</p>

        </div>
    @endforeach


</div>