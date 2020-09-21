@if (!is_null($character->specialtalents->first()))
    <div class="col-span-5 m-2">
        <div class="bg-gray-400 px-5 py-4 rounded h-full">
            <div class="flex flex-col bg-gray-200 p-10 mt-5 md:mx-4 rounded">
                <h4 class="text-center text-lg font-medium">Spezialtalente</h4>
                <div class="flex flex-col items-center">
                    @foreach ($character->specialtalents as $specialtalent)
                        <div>
                            <div>{{ $specialtalent->name }}&nbsp;</div>
                            <div>{{ $specialtalent->pivot->value }}</div>
                            <div>{{ $specialtalent->pivot->data }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endif

@if (!is_null($character->specialmagictalents->first()))
    <div class="col-span-5 m-2">
        <div class="bg-gray-400 px-5 py-4 rounded h-full">
            <div class="flex flex-col bg-gray-200 p-10 mt-5 md:mx-4 rounded">
                <h4 class="text-center text-lg font-medium">Spezial Magietalente</h4>
                <div class="flex flex-col items-center">
                    @foreach ($character->specialmagictalents as $specialmagictalent)
                        <div>
                            <div>{{ $specialmagictalent->name }}&nbsp;</div>
                            <div>{{ $specialmagictalent->pivot->value }}</div>
                            <div>{{ $specialmagictalent->pivot->data }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endif
@if (!is_null($character->specialfightingtalents->first()))
    <div class="col-span-5 m-2">
        <div class="bg-gray-400 px-5 py-4 rounded h-full">
            <div class="flex flex-col bg-gray-200 p-10 mt-5 md:mx-4 rounded">
                <h4 class="text-center text-lg font-medium">Spezial Kampftalente</h4>
                <div class="flex flex-col items-center">
                    @foreach ($character->specialfightingtalents as $specialfightingtalent)
                        <div class="flex flex-row">
                            <div class="">{{ $specialfightingtalent->name }}&nbsp;</div>
                            <div class="">{{ $specialfightingtalent->pivot->value }}</div>
                            <div class="">{{ $specialfightingtalent->pivot->data }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endif

