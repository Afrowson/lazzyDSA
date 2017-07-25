@extends('app')

@section('title')
    Neuer Character
@endsection

@section('content')
    <div class="is-pulled-left">
        <form method="post" action="/character/store">
            {{csrf_field()}}
            <div class="is-clearfix m-t-10">
                <div class="field is-pulled-left m-l-10">
                    <label class="label m-r-5 ">Name:</label>
                    <p class="control">
                        <input class="input" name="name" type="text">
                    </p>
                </div>
                <div class="field is-pulled-left m-l-10">
                    <label class="label m-r-5 ">Titel:</label>
                    <p class="control">
                        <input class="input" name="title" type="text">
                    </p>
                </div>
                <div class="field is-pulled-left m-l-10">
                    <label class="label m-r-5 ">Geschlecht:</label>
                    <div class="control">
                        <div class="select">
                            <select name="gender">
                                <option value="0">Weiblich</option>
                                <option value="1">Mänlich</option>
                                <option value="2">Sontiges</option>
                            </select>

                        </div>
                    </div>
                </div>
                <div class="field is-pulled-left m-l-10">
                    <label class="label m-r-5 ">Geburtsort:</label>
                    <p class="control">
                        <input class="input" name="place_of_birth" type="text">
                    </p>
                </div>
            </div>

            <div class="is-clearfix m-t-10">
                <div class="field is-pulled-left m-l-10">
                    <label class="label m-r-5 ">Spezie:</label>
                    <p class="control">
                        <input class="input" name="race" type="text">
                    </p>
                </div>
                <div class="field is-pulled-left m-l-10">
                    <label class="label m-r-5 ">Kultur:</label>
                    <p class="control">
                        <input class="input" name="culture" type="text">
                    </p>
                </div>
                <div class="field is-pulled-left m-l-10">
                    <label class="label m-r-5 ">Beruf:</label>
                    <p class="control">
                        <input class="input" name="profession" type="text">
                    </p>
                </div>
                <div class="field is-pulled-left m-l-10">
                    <label class="label m-r-5 ">Sozialstatus:</label>
                    <p class="control">
                        <input class="input" name="social" type="text">
                    </p>
                </div>
            </div>
            <div class="is-clearfix m-t-10">
                <div class="field is-pulled-left m-l-10">
                    <label class="label m-r-5 ">Alter:</label>
                    <p class="control">
                        <input class="input" name="age" type="number">
                    </p>
                </div>
                <div class="field is-pulled-left m-l-10">
                    <label class="label m-r-5 ">Größe in cm:</label>
                    <p class="control">
                        <input class="input" name="height" type="number">
                    </p>
                </div>
                <div class="field is-pulled-left m-l-10">
                    <label class="label m-r-5 ">Gewicht in cm:</label>
                    <p class="control">
                        <input class="input" name="weight" type="number">
                    </p>
                </div>
                <div class="field is-pulled-left m-l-10">
                    <label class="label m-r-5 ">Haarfarbe:</label>
                    <p class="control">
                        <input class="input" name="hair" type="text">
                    </p>
                </div>
                <div class="field is-pulled-left m-l-10">
                    <label class="label m-r-5 ">Augenfarbe:</label>
                    <p class="control">
                        <input class="input" name="eyes" type="text">
                    </p>
                </div>
            </div>

            <div class="is-clearfix m-t-10">
                @foreach($skills as $skill)
                    <div class="field is-pulled-left m-l-10">
                        <label class="label m-r-5 ">{{$skill}}:</label>
                        <div class="control">
                            <div class="select">
                                <select name="{{$skill}}">
                                    @for($i=1;$i<=20;$i++)
                                        <option>{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="is-clearfix m-t-10 ">
                <div class="field is-pulled-left m-l-10">
                    <label class="label m-r-5 ">Lebensphnkte:</label>
                    <p class="control">
                        <input class="input" name="lep_max" type="number">
                    </p>
                </div>
                <div class="field is-pulled-left m-l-10">
                    <label class="label m-r-5 ">Astralpunkte:</label>
                    <p class="control">
                        <input class="input" name="asp_max" type="number">
                    </p>
                </div>
                <div class="field is-pulled-left m-l-10">
                    <label class="label m-r-5 ">Karmapunkte:</label>
                    <p class="control">
                        <input class="input" name="kap_max" type="number">
                    </p>
                </div>
            </div>
            <div class="is-clearfix m-t-10">
                <div class="field is-pulled-left m-l-10">
                    <label class="label m-r-5 ">Sehlenkraft:</label>
                    <p class="control">
                        <input class="input" name="SK" type="number">
                    </p>
                </div>
                <div class="field is-pulled-left m-l-10">
                    <label class="label m-r-5 ">Zähigkeit:</label>
                    <p class="control">
                        <input class="input" name="ZK" type="number">
                    </p>
                </div>
                <div class="field is-pulled-left m-l-10">
                    <label class="label m-r-5 ">Ausweichen:</label>
                    <p class="control">
                        <input class="input" name="AW" type="number">
                    </p>
                </div>
                <div class="field is-pulled-left m-l-10">
                    <label class="label m-r-5 ">Initiative:</label>
                    <p class="control">
                        <input class="input" name="IT" type="number">
                    </p>
                </div>
                <div class="field is-pulled-left m-l-10">
                    <label class="label m-r-5 ">Geschwindigkeit:</label>
                    <p class="control">
                        <input class="input" name="GW" type="number">
                    </p>
                </div>
            </div>
            <div class="is-clearfix m-t-10">
                <div class="field is-pulled-left m-l-10">
                    <label class="label m-r-5 ">Abenteuerpunkte:</label>
                    <p class="control">
                        <input class="input" name="ap_total" type="number">
                    </p>
                </div>
                <div class="field is-pulled-left m-l-10">
                    <label class="label m-r-5 ">davon ausgegeben:</label>
                    <p class="control">
                        <input class="input" name="ap_spend" type="number">
                    </p>
                </div>
            </div>
            <button class="button is-primary m-l-10">Character anlegen</button>
        </form>
    </div>

@endsection
