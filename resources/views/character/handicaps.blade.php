<div class="flex flex-col bg-gray-400 px-5 py-4 mx-2 my-2 rounded">
    <h4 class="text-center text-lg font-medium">Nachteile</h4>
    <div class="bg-gray-200 p-10 mt-5 rounded">
        <div class="grid grid-cols-2">
            @foreach ($character->handicaps as $handicap)
            <div class="px-2 font-bold">{{ $handicap->name }}&nbsp;{{ $handicap->pivot->value }}&nbsp;</div>
            <div class="px-2">{{ $handicap->pivot->type }}</div>
            @endforeach
        </div>
    </div>
</div>
