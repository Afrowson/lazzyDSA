@extends('app')

@section('title')
    Held Bearbeiten
@endsection

@section('head')

@endsection

@section('nav-left')

@endsection

@section('nav-center')
    <h1 class="subtitle is-4 primary">Hier kannst du deinen Character bearbeiten.</h1>
@endsection

@section('nav-right')
    <a href="/index" class=" button is-info">Deine Helden</a>
    
    <a href="/database" class="button is-info">Datenbank</a>
@endsection

@section('sidebar')
    <div>
        <button v-on:click="status = 1" class="hero m-b-5">
            <h5 class="title">Basics</h5>
        </button>
        <button v-on:click="status = 2" class="hero m-b-5">
            <h5 class="title">Talente</h5>
        </button>
        <button v-on:click="status = 3" class="hero m-b-5">
            <h5 class="title">Kampf-fertigkeiten</h5>
        </button>
        <button v-on:click="status = 4" class="hero m-b-5">
            <h5 class="title">Sprachen & Schriften</h5>
        </button>
        <button v-on:click="status = 5" class="hero m-b-5">
            <h5 class="title">Vor- & Nachteile</h5>
        </button>
        <button v-on:click="status = 6" class="hero m-b-5">
            <h5 class="title">Spezialtalente</h5>
        </button>
        <button v-on:click="status = 7" class="hero m-b-5">
            <h5 class="title">Waffen & Schilde</h5>
        </button>
        <button v-on:click="status = 8" class="hero m-b-5">
            <h5 class="title">Inventare</h5>
        </button>
        <button v-on:click="status = 9" class="hero m-b-5">
            <h5 class="title">Geldbeutel</h5>
        </button>
        <button v-on:click="status = 10" class="hero m-b-5">
            <h5 class="title">Zaubertricks</h5>
        </button>
    </div>
@endsection

@section('content')
    <div>
        <div v-show="status == 1">
            <addcharacter v-bind:character="character"></addcharacter>
        </div>
        <div v-show="status == 2">
            <addtalents :pickedtalents="pickedtalents" v-bind:character="character"></addtalents>
        </div>
        <div v-show="status == 3">
            <addfightingtalents :pickedfightingtalents="pickedfightingtalents" v-bind:character="character"></addfightingtalents>
        </div>
        <div v-show="status == 4" class="columns">
            <div class="column is-half">
                <addlanguages v-bind:pickedlanguages="pickedlanguages" v-bind:character="character"></addlanguages>
            </div>
            <div class="column is-half">
                <addletterings v-bind:pickedletterings="pickedletterings" v-bind:character="character"></addletterings>
            </div>
        </div>
        <div v-show="status == 5" class="columns">
            <div class="column is-half">
                <addbenefices v-bind:pickedbenefices="pickedbenefices" v-bind:character="character"></addbenefices>
            </div>
            <div class="column is-half">
                <addhandicaps v-bind:pickedhandicaps="pickedhandicaps" v-bind:character="character"></addhandicaps>
            </div>
        </div>
        <div v-show="status == 6" class="columns is-multiline">
            <div class="column is-half">
                <addspecialtalents v-bind:pickedspecialtalents="pickedspecialtalents" v-bind:character="character"></addspecialtalents>
            </div>
            <div class="column is-half">
                <addspecialfightingtalents v-bind:pickedspecialfightingtalents="pickedspecialfightingtalents" v-bind:character="character"></addspecialfightingtalents>
            </div>
            <div class="column is-half">
                <addspecialmagictalents v-bind:pickedspecialmagictalents="pickedspecialmagictalents" v-bind:character="character"></addspecialmagictalents>
            </div>
        </div>
        <div v-show="status == 7" class="columns is-multiline">
            <div class="column is-full">
                <addweapons v-bind:pickedweapons="pickedweapons" v-bind:character="character"></addweapons>
            </div>
            <div class="column is-full">
                <addrangeweapons v-bind:pickedrangeweapons="pickedrangeweapons" v-bind:character="character"></addrangeweapons>
            </div>
            <div class="column is-full">
                <addshields v-bind:pickedshields="pickedshields" v-bind:character="character"></addshields>
            </div>
        </div>
        <div v-show="status == 8" class="columns is-multiline">
            <div class="column is-full">
                <addinventories :pickedinventories="pickedinventories" :character="character"></addinventories>
            </div>
        </div>
        {{--<div v-show="status == 9" class="columns is-multiline">--}}
        {{--<div class="column is-full">--}}
        {{--<addpurses v-bind:pickedpurses="pickedpurses" v-bind:character="character"></addpurses>--}}
        {{--</div>--}}
        {{--</div>--}}
        <button class="button m-t-10" v-on:click="save()">Übertragen</button>
        @{{ status }}
    </div>
    <div v-show="status == 10">
        <addmagictricks :pickedmagictricks="pickedmagictricks" v-bind:character="character"></addmagictricks>
    </div>
@endsection
