@extends('app')


@section('content')
    <div>
        <form action="/character/{{$character->id}}/addFightingtalents/" method="post">
            {{csrf_field()}}

            <div class="is-clearfix m-t-10">
                @foreach($fightingtalents as $fightingtalent)
                    <div class="field is-pulled-left talent-single clearfix">
                        <label class="label m-r-5 ">{{$fightingtalent->name}}:</label>
                        <div class="control">
                            <div class="select">
                                <select name="{{$fightingtalent->id}}">
                                    @for($i=20;$i>=6;$i--)
                                        <option @if($i==6)selected @endif > {{$i}} </option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                    </div>
                @endforeach

                <button class="button is-primary"> Talente hinzufügen</button>
            </div>


        </form>


    </div>

@endsection