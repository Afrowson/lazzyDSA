<div class="col-span-7">
    <div class="bg-gray-400 px-5 py-4 mx-2 my-2 rounded">
        <h4 class="text-center text-lg font-medium">Vorteile</h4>
        <div class="flex justify-center bg-gray-200 p-10 mt-5 rounded">
            <div class="grid grid-cols-3">
                @foreach ($character->benefices as $benefice)
                    <div class="col-span-2 px-2 font-bold">
                        {{ $benefice->name }}&nbsp;{{ $benefice->pivot->value }}
                    </div>
                    <div class="px-2 col-auto">{{ $benefice->pivot->type }}</div>
                @endforeach
            </div>
        </div>
    </div>
</div>