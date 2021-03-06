@extends('app')

@section('title')
    Held Bearbeiten
@endsection

@section('vue-id')
    id="app"
@endsection

@section('content')
    <div>
        <button v-on:click="status = 1" class="button is-medium m-b-5 m-l-5" style="width:190px">Basics</button>
        <button v-show="status != 0" v-on:click="status = 2" class="button is-medium m-b-5 m-l-5" style="width:190px">Talente</button>
        <button v-show="status != 0" v-on:click="status = 3" class="button is-medium m-b-5 m-l-5" style="width:190px">Kampf-fertigkeiten</button>
        <button v-show="status != 0" v-on:click="status = 4" class="button is-medium m-b-5 m-l-5" style="width:190px">Sprachen & Schriften</button>
        <button v-show="status != 0" v-on:click="status = 5" class="button is-medium m-b-5 m-l-5" style="width:190px">Vor- & Nachteile</button>
        <button v-show="status != 0" v-on:click="status = 6" class="button is-medium m-b-5 m-l-5" style="width:190px">Spezialtalente</button>
        <button v-show="status != 0" v-on:click="status = 7" class="button is-medium m-b-5 m-l-5" style="width:190px">Waffen & Rüstung</button>
        <button v-show="status != 0" v-on:click="status = 8" class="button is-medium m-b-5 m-l-5" style="width:190px">Inventare</button>
        <button v-show="status != 0" v-on:click="status = 9" class="button is-medium m-b-5 m-l-5" style="width:190px">Geldbeutel</button>
        <button v-show="status != 0" v-on:click="status = 10" class="button is-medium m-b-5 m-l-5" style="width:190px">Zaubertricks</button>
    </div>

    <div>
        <div v-show="status == 1 || status == 0" class="columns">
            <div class="column is-full">
                <addcharacter v-bind:character="character" v-on:new_character="new_character"></addcharacter>
            </div>
        </div>
        <div v-show="status == 2" class="columns">
            <div class="column is-full">
                <addtalents :pickedtalents="pickedtalents" v-bind:character="character"></addtalents>
            </div>
        </div>
        <div v-show="status == 3" class="columns">
            <div class="column is-full">
                <addfightingtalents :pickedfightingtalents="pickedfightingtalents"
                    v-bind:character="character"></addfightingtalents>
            </div>
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
                <addspecialtalents v-bind:pickedspecialtalents="pickedspecialtalents"
                    v-bind:character="character"></addspecialtalents>
            </div>
            <div class="column is-half">
                <addspecialfightingtalents v-bind:pickedspecialfightingtalents="pickedspecialfightingtalents"
                    v-bind:character="character"></addspecialfightingtalents>
            </div>
            <div class="column is-half">
                <addspecialmagictalents v-bind:pickedspecialmagictalents="pickedspecialmagictalents"
                    v-bind:character="character"></addspecialmagictalents>
            </div>
        </div>
        <div v-show="status == 7" class="columns is-multiline">
            <div class="column is-full">
                <addweapons v-bind:pickedweapons="pickedweapons" v-bind:character="character"></addweapons>
            </div>
            <div class="column is-full">
                <addrangeweapons v-bind:pickedrangeweapons="pickedrangeweapons"
                    v-bind:character="character"></addrangeweapons>
            </div>
            <div class="column is-full">
                <addshields v-bind:pickedshields="pickedshields" v-bind:character="character"></addshields>
            </div>
            <div class="column is-full">
                <addarmors v-bind:pickedarmors="pickedarmors" v-bind:character="character"></addarmors>
            </div>
        </div>
        <div v-show="status == 8" class="columns is-multiline">
            <div class="column is-full">
                <addinventories :pickedinventories="pickedinventories" :character="character"></addinventories>
            </div>
        </div>
        <div v-show="status == 9" class="columns is-multiline">
            <div class="column is-full">
                <addpurses v-bind:pickedpurses="pickedpurses" v-bind:character="character"></addpurses>
            </div>
        </div>
        <div v-show="status == 10" class="columns is-multiline">
            <div class="column is-full">
                <addmagictricks :pickedmagictricks="pickedmagictricks" v-bind:character="character"></addmagictricks>
            </div>
        </div>
    </div>

@endsection
