@for($i=$t;$t<=$e;$t++)
    <div class="box is-clearfix is-pulled-right" style="width: 44%">
        
        <h4 class="title is-4">{{$talentgroups[$t]}}</h4>
        
        @foreach($character->talents as $talent)
            @if($talent->group == $talentgroups[$t])
                <div class="box is-pulled-left m-r-10">
                    <div class="tile is-ancestor">
                        <div class="tile is-parent is-vertical is-paddingless">
                            <b style="margin:0px!important;" class="tile is-child text-center">{{$talent->name}}:</b>
                            <div class="tile is-parent is-paddingless">
                                <div class="tile is-child">
                                    <p class=" is-size-4 text-center m-t-5">{{$talent->pivot->value}}</p>
                                </div>
                                <div style="width: 120px" class="tile is-parent is-paddingless">
                                    <div class="tile is-child is-4 m-lr-5">
                                        <p class="text-center">{{$talent->first_skill}}</p>
                                        <p class="value-box {{$talent->first_skill}}">{{$character->{$talent->first_skill} }}</p>
                                    </div>
                                    <div class="tile is-child is-4 m-lr-5">
                                        <p class="text-center">{{$talent->second_skill}}</p>
                                        <p class="value-box {{$talent->second_skill}}">{{$character->{$talent->second_skill} }}</p>
                                    </div>
                                    <div class="tile is-child is-4 m-lr-5">
                                        <p class="text-center">{{$talent->third_skill}}</p>
                                        <p class="value-box {{$talent->third_skill}}">{{$character->{$talent->third_skill} }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            @endif
        @endforeach
    </div>
@endfor


