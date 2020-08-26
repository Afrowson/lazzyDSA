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
                class="bg-green-200 p-2 outline-none border border-gray-200 rounded">
                <option :value="null" disabled hidden>Select a Table</option>

                <option v-for="table in tables">
                    @{{ table }}
                </option>
            </select>
        </div>
        <div>
            <button v-show="selected_table_name !== null"
                class="bg-green-600 py-2 px-4 mx-4 text-xs sm:text-sm md:text-base text-black rounded float-right"
                v-on:click="create_entry">Eintrag
                anlegen</button>
        </div>
    </div>

    <div class="flex justify-center pb-6 pt-3 overflow-x-auto">
        <table v-show="selected_table_name !== null" class="table-auto bg-gray-100 rounded">
            <thead>
                <tr class="p-2">
                    <th class="pl-4 pr-2 py-2">ID</th>
                    <th class="pl-4 pr-2 py-2" v-for="field in fields">@{{ field . name }}</th>
                    <th class="pl-4 pr-2 py-2">Optionen</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="entry in selected_table">
                    <div class="overflow-y-auto">
                        <td class="pl-4 pr-2 border-b-2 py-2" v-for="value in entry">@{{ value }}</td>
                    </div>
                    <td class="border-b-2">
                        <div class="flex flex-row my-2">
                            <button class="bg-green-600 px-4 py-2 mr-2 ml-4 rounded"
                                v-on:click="edit_entry(entry)">Edit</button>
                            <button class="bg-red-400 p-2 mr-4 ml-2 rounded"
                                v-on:click="delete_entry(entry)">Delete</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <add_entry :togle="togle" :fields="fields" :entry="selected_entry" @close="close" @update_entry="update_entry">
    </add_entry>
@endsection
