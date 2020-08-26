@extends('base')

@section('title')
    Datenbank Bearbeiten
@endsection

@section('vue-id')
    id="db"
@endsection


@section('content')
    <div class="flex justify-center pt-3">
        <div class="">
            <select v-model="selected_table_name" v-on:change="change_table"
                class="bg-green-600 p-2 outline-none border border-gray-200 rounded">
                <option :value="null" disabled hidden>Select a Table</option>

                <option v-for="table in tables">
                    @{{ table }}
                </option>
            </select>
        </div>
    </div>
    <button v-show="selected_table_name !== null" class="button is-pulled-left m-l-5" v-on:click="create_entry">Eintrag
        anlegen</button>

    <table v-show="selected_table_name !== null" class="table is-fullwidth is-pulled-left">
        <thead>
            <tr>
                <th>ID</th>
                <th v-for="field in fields">@{{ field . name }}</th>
                <th>Optionen</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="entry in selected_table">
                <td v-for="value in entry">@{{ value }}</td>
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
