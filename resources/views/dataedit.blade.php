@extends('base')

@section('title')
    Database
@endsection

@section('nav-left')
    
    <a href="/database/table/?table={{$selected}}" class="button is-danger">
        Zurück
    </a>

@endsection
@section('nav-center')
    <h1 class="title primary">Bearbeiten von {{$selected}} Nummer {{$data->id}}</h1>

@endsection
@section('body')
    
    <form action="/database/{{$selected}}/{{$data->id}}/update" method="POST">
        {!! csrf_field() !!}
        @foreach($fields as $field)
            @if($field['type'] == 'string')
                <div class="field is-horizontal">
                    <label class="label m-r-5 primary">{{$field['name']}}</label>
                    <p class="control">
                        <input class="input is-pulled-left" name="{{$field['key']}}" type="text"
                            value="{{$data[$field['key']]}}">
                    </p>
                    @if($field['required']== true)
                        <lable class=" lable primary is-pulled-left">*</lable>
                    @endif
                </div>
            @endif
            @if($field['type'] == 'text')
                <div class="field is-horizontal">
                    <label class="label m-r-5 primary">{{$field['name']}}</label>
                    <p class="control">
                        <textarea class="textarea" name="{{$field['key']}}" type="textfield"
                        >{{$data[$field['key']]}}</textarea>
                    </p>
                </div>
            @endif
            @if($field['type'] == 'integer')
                <div class="field is-horizontal">
                    <label class="label m-r-5 primary">{{$field['name']}}</label>
                    <p class="control">
                        <input class="input is-small" name="{{$field['key']}}" type="number"
                            value="{{$data[$field['key']]}}">
                    </p>
                </div>
            @endif
        @endforeach
        @if($errors->all() != [])
            <div class="hero is-danger m-b-5">
                @foreach($errors->all() as $e)
                    <p>{{$e}}</p>
                @endforeach
            </div>
        @endif
        
        <button class="button is-danger" type="submit">Save</button>
    </form>

@endsection