<div class="flex flex-col bg-gray-400 px-5 py-4 mx-2 my-2 rounded">
    <h4 class="text-center text-lg font-medium">Vorteile</h4>
    <div class="bg-gray-200 p-10 mt-5 rounded">
        <div class="grid grid-cols-2">
            @foreach ($character->benefices as $benefice)
            <div class="px-2 font-bold">
                {{ $benefice->name }}&nbsp;{{ $benefice->pivot->value }}
            </div>
            <div class="px-2">{{ $benefice->pivot->type }}</div>
            @endforeach
        </div>  
    </div>
</div>