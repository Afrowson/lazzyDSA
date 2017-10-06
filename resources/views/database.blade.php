@extends('base')

@section('title')
    Datenbank Bearbeiten
@endsection

@section('vue-id')
    id="db"
@endsection

@section('nav-left')
    <a href="/index" class="button">Deine Helden</a>
    
    <a href="/database" class="button">Datenbank</a>
@endsection

@section('nav-center')
    <div class="select is-pulled-left">
        <select v-model="selected_table_name" v-on:change="change_table">
            <option :value="null" disabled hidden>Select a Table</option>
            
            <option v-for="table in tables">
                @{{table}}
            </option>
        </select>
    </div>
    <button v-show="selected_table_name !== null" class="button is-pulled-left m-l-5" v-on:click="create_entry">Eintrag anlegen</button>
@endsection

@section('nav-right')
    <form id="logout-form" action="{{ route('logout') }}" method="POST">
        {{ csrf_field() }}
        <button class="button" type="submit" href="{{ route('logout') }}">Logout</button>
    </form>
@endsection

@section('body')
    <table v-show="selected_table_name !== null" class="table is-pulled-left">
        <thead>
        <tr>
            <th>ID</th>
            <th v-for="field in fields">@{{ field.name}}</th>
            <th>Optionen</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="entry in selected_table">
            <td v-for="value in entry">@{{value}}</td>
            <td>
                <button class="button is-success" v-on:click="edit_entry(entry)">Edit</button>
                <button class="button is-danger" v-on:click="delete_entry(entry)">Delete</button>
            </td>
        </tr>
        </tbody>
    </table>
    <add_entry :togle="togle" :fields="fields" :entry="selected_entry" @close="close" @update_entry="update_entry">
    </add_entry>
@endsection