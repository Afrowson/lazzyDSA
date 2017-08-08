@extends('app')


@section('content')
    <div>
        <form action="/character/{{$character->id}}/addTalents/" method="post">
            {{csrf_field()}}
    
            <div class="is-clearfix m-t-10">
                @foreach($talents as $talent)
                    <div class="field is-pulled-left talent-single clearfix">
                        <label class="label m-r-5 ">{{$talent->name}}:</label>
                        <div class="control">
                            <div class="select">
                                <select name="{{$talent->id}}">
                                    @for($i=20;$i>=0;$i--)
                                        <option @if($i==0)selected @endif > {{$i}} </option>
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