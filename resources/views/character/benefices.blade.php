<div class="box is-pulled-left m-r-10">
    <h4 class="title is-4">Vorteile</h4>
    @foreach($character->benefices as $benefice)
        <div class="is-clearfix">
            <b class="is-pulled-left">{{$benefice->name}}&nbsp;{{$benefice->pivot->value}}</b>
            <p class="is-pulled-right">{{$benefice->pivot->type }}</p>
        </div>
    @endforeach
</div>