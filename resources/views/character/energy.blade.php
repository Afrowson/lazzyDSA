<div class="m-t-20">
<form action="/character/{{$character->id}}/energy" method="POST">
    {{csrf_field()}}
    <div class="columns">
        <div class="colum is is-two-thirds columns is-multiline">
            <div class="column is-half">
                <div class="field is-horizontal">
                    <label class="label m-r-5 primary">LeP</label>
                    <p class="control">
                        <input class="input is-small" style="width: 30px" name="lep" type="text"
                               value="{{$character->lep}}">
                    </p>
                    <label class="label m-l-5 primary"> /{{$character->lep_max}}</label>
                </div>
            </div>

            @if($character->asp_max >= 1)
                <div class="column is-half">
                    <div class="field is-horizontal">
                        <label class="label m-r-5 primary">AsP</label>
                        <p class="control ">
                            <input class="input is-small" style="width: 30px" name="asp" type="text"
                                   value="{{$character->asp}}">
                        </p>
                        <label class="label m-l-5 primary">/{{$character->asp_max}}</label>
                    </div>
                </div>
            @endif
            @if($character->kap_max >= 1)

                <div class="column is-half">
                    <div class="field is-horizontal">
                        <label class="label m-r-5 primary">KaP</label>
                        <p class="control ">
                            <input class="input is-small" style="width: 30px" name="kap" type="text"
                                   value="{{$character->kap}}">
                        </p>
                        <label class="label m-l-5 primary">/{{$character->kap_max}}</label>
                    </div>
                </div>
            @endif

            <div class="column">
                <div class="field is-half is-horizontal">
                    <label class="label m-r-5 primary">SP</label>
                    <p class="control ">
                        <input class="input is-small" style="width: 23px" type="text" name="sp"
                               value="{{$character->sp}}">
                    </p>
                    <label class="label m-l-5 primary">/3</label>
                </div>
            </div>
        </div>
        <div class="colum is-one-third">
            <button class="button is-warning m-t-30">Update</button>
        </div>
    </div>
</form>
</div>