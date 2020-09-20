<div class="flex flex-col md:flex-row bg-gray-400 px-5 py-4 mx-2 my-2 rounded">
    <div>
        @if (!is_null($character->specialtalents->first()))
            <div class="flex flex-col bg-gray-200 p-10 mt-5 md:mx-4 rounded">
                <h4 class="text-center text-lg font-medium">Spezialtalente</h4>
                <div class="">
                    @foreach ($character->specialtalents as $specialtalent)
                        <div>
                            <div class="">{{ $specialtalent->name }}&nbsp;</div>
                            <div class="">{{ $specialtalent->pivot->value }}</div>
                            <div class="">{{ $specialtalent->pivot->data }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>

    <div>
        @if (!is_null($character->specialmagictalents->first()))
            <div class="flex flex-col bg-gray-200 p-10 mt-5 md:mx-4 rounded">
                <h4 class="text-center text-lg font-medium">Spezial Magietalente</h4>
                <div>
                    @foreach ($character->specialmagictalents as $specialmagictalent)
                        <div class="flex flex-row">
                            <div class="">{{ $specialmagictalent->name }}&nbsp;</div>
                            <div class="">{{ $specialmagictalent->pivot->value }}</div>
                            <div class="">{{ $specialmagictalent->pivot->data }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

    </div>

    <div>
        @if (!is_null($character->specialfightingtalents->first()))
            <div class="flex flex-col bg-gray-200 p-10 mt-5 md:mx-4 rounded">
                <h4 class="text-center text-lg font-medium">Spezial Kampftalente</h4>
                <div>
                    @foreach ($character->specialfightingtalents as $specialfightingtalent)
                        <div class="flex flex-row">
                            <div class="">{{ $specialfightingtalent->name }}&nbsp;</div>
                            <div class="">{{ $specialfightingtalent->pivot->value }}</div>
                            <div class="">{{ $specialfightingtalent->pivot->data }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

    </div>
</div>
