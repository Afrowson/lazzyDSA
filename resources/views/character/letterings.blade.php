<div class="box is-pulled-left m-r-10">
    <h4 class="title is-4">Schriften</h4>
    @foreach($character->letterings as $lettering)
        <b class="is-block">{{$lettering->name}}</b>
    @endforeach
</div>