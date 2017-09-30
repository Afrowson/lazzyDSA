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
    <select class="select" v-model="activetable" v-on:change="changetable">
        <option v-for="table in tables">
            {table}
        </option>
    </select>
@endsection

@section('nav-right')

@endsection

@section('content')

@endsection