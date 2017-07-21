@extends('base')

@section('nav-center')
    <form action="/database/table" method="GET">
        <div class="field">
            <label class="label primary is-pulled-left ">Tabelle</label>
            <p class="control is-pulled-left m-l-15">
                 <span class="select">
                    <select name="table">
                        @foreach($tables as $table)
                            <option @if($table == $selected) selected @endif >{{$table}}</option>
                        @endforeach
                    </select>
                </span>
            </p>
        </div>
        <button class="button is-danger is-pulled-left">Laden</button>
    </form>
@endsection

@section('body')

    @if( $datas == NULL)
        <p>Es wurde keine Tabelle ausgewählt. Wähle eine Tabelle in der Navigationsbar</p>
    @else

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
                           class="button is-primary">Edit</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
@endsection