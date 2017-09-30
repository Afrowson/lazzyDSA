@extends('base')

@section('title')
    Datenbank Bearbeiten
@endsection

@section('vue-id')
    id="db"
@endsection

@section('head')

@endsection

@section('nav-left')
    <a href="/index" class="button is-info">Deine Helden</a>

    <a href="/database" class="button is-info">Datenbank</a>
@endsection

@section('nav-center')
    <label class=" label primary">
        Tabele wählen:
        <select class="select" v-model="activetable" v-on:change="changetable">
            <option v-for="table in tables">
                @{{table}}
            </option>
        </select>
    </label>

@endsection

@section('nav-right')
    <form id="logout-form" action="{{ route('logout') }}" method="POST">
        {{ csrf_field() }}
        <button class="button is-info" type="submit" href="{{ route('logout') }}">Logout</button>
    </form>
@endsection

@section('content')
    <table class="table is-pulled-left">
        <thead>
        <tr>
            <th><abbr title="ID">ID</abbr></th>
            @foreach($fillables as $fillable)
                <th><abbr title="Name">{{($fillable['name'])}}</abbr></th>
            @endforeach
        </tr>
        </thead>
        <tbody>
        @foreach($datas as $data)
            <tr>
                <td>{{$data->id}}</td>
                @foreach($fillables as $fillable)
                    <td>{{($data->{$fillable['key']} )}}</td>
                @endforeach
                <td>
                    <a href="/database/{{class_basename($data)}}/{{$data->id}}/edit"
                        class="button is-primary">Edit
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection