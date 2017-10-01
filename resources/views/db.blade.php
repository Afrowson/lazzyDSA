@extends('base')

@section('title')
    Datenbank Bearbeiten
@endsection

@section('vue-id')
    id="db"
@endsection

@section('nav-left')
    <a href="/index" class="button is-info">Deine Helden</a>

    <a href="/database" class="button is-info">Datenbank</a>
@endsection

@section('nav-center')
    <label class=" label primary">
        Tabele wählen:
        <select class="select" v-model="selected_table_name" v-on:change="changetable">
            <option :value="null" disabled hidden>Select Table</option>
        
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

@section('body')
    <table class="table is-pulled-left">
        <thead>
        <tr>
            <th>ID</th>
    
            <th v-for="field in fields">
                @{{ field.key}}
            </th>

        </tr>
        </thead>
        <tbody v-for="entry in selectedtable">
        <tr v-for>
            <td v-for>'hier stand php'>
            <td>'hier stand php'']} )}}</td>
                <td>
                    <a href="/database/'hier stand php''hier stand php'"
                        class="button is-primary">Edit
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection